<?php

namespace App\Http\Controllers\Customer;

use Hash;
use App\Models\Customer;
use App\Mail\WebSitemail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CustomerAuthController extends Controller
{
    public function login()
    {
        return view('front.login');
    }
    public function login_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::guard('customer')->attempt($credential)) {
            return redirect()->route('customer.home');
        } else {
            return redirect()->route('customer.login')->with('error', 'Bilgileri Doğru Giriniz !');
        }
    }
    public function signup()
    {
        return view('front.signup');
    }
    public function signup_submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers',
            'password' => 'required',
            'retype_password' => 'required'
        ]);
        $token = hash('sha256', time());
        $password = Hash::make($request->password);
        $verification_link = url('signup-verify/' . $request->email . '/' . $token);

        $obj = new Customer();
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->password = $password;
        $obj->token = $token;
        $obj->status = 0;
        $obj->save();

        $subject = 'Kayıt Doğrulama';
        $message = 'Kayıt İşlemini İçin Lütfen Aşağıdaki Bağlantıya Tıklayın= : <br>';
        $message .= '<a href="' . $verification_link . '">';
        $message .= $verification_link;
        $message .= '<br> Mesaj=' . $request->message;

        Mail::to($request->email)->send(new WebSitemail($subject, $message));

        return redirect()->route('customer.login')->with('success', 'E-postanızı Kontrol Edin ve Bağlantıyı Tıklayın !');
    }
    public function signup_verify($email, $token)
    {
        $customer_data = Customer::where('email', $email)->where('token', $token)->first();

        if ($customer_data) {
            $customer_data->token = '';
            $customer_data->status = 1;
            $customer_data->update();

            return redirect()->route('customer.login')->with('succes', 'Hesap Doğrulandı !');
        } else {
            return redirect()->route('customer.login');
        }
    }
    public function logout()
    {
        Auth::guard('customer')->logout();
        return redirect()->route('customer.login');
    }
    public function forget_password()
    {
        return view('front.forget_password');
    }
    public function forget_password_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);
        $customer_data = Customer::where('email', $request->email)->first();
        if (!$customer_data) {
            return redirect()->back()->with('error', 'Email Bulunamadı !');
        }
        $token = hash('sha256', time());

        $customer_data->token = $token;
        $customer_data->update();

        $reset_link = url('reset-password/' . $token . '/' . $request->email);
        $subject = 'Şifreyi Yenile';
        $message = 'Lütfen Aşağıdaki Linke Tıklayın: <br>';
        $message = '<a href="' . $reset_link . '">Buraya Tıklayın</a>';

        \Mail::to($request->email)->send(new Websitemail($subject, $message));

        return redirect()->route('customer.login')->with('success', 'Lütfen E-postanızı Kontrol Edin');
    }
    public function reset_password($token, $email)
    {
        $customer_data = Customer::where('token', $token)->where('email', $email)->first();
        if (!$customer_data) {
            return redirect()->route('customer.login');
        }
        return view('front.reset_password', compact('token', 'email'));
    }
    public function reset_password_submit(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'retype_password' => 'required|same:password'
        ]);

        $customer_data = Customer::where('token', $request->token)->where('email', $request->email)->first();

        $customer_data->password = Hash::make($request->password);
        $customer_data->token = '';
        $customer_data->update();

        return redirect()->route('customer.login')->with('success', 'Şifre Başarıyla Sıfırlandı');
    }
}
