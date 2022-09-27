<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\WebSitemail;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class SubscriberController extends Controller
{
    public function send_email(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);
        if (!$validator->passes()) {
            return response()->json(['code' => 0, 'error_message' => $validator->errors()->toArray()]);
        } else {
            // Send email
            $token = hash('sha256', time());

            $obj = new Subscriber();
            $obj->email = $request->email;
            $obj->token = $token;
            $obj->status = 0;
            $obj->save();

            $verification_link = url('subscriber/verify/' . $request->email . '/' . $token);

            $subject = 'Abone Doğrulama';
            $message = 'Aboneliği Onaylamak İçin Lütfen Aşağıdaki Bağlantıya Tıklayın= : <br>';
            $message .= '<a href="' . $verification_link . '">';
            $message .= $verification_link;
            $message .= '<br> Mesaj=' . $request->message;

            Mail::to($request->email)->send(new WebSitemail($subject, $message));

            return response()->json(['code' => 1, 'success_message' => 'E-postanızı Kontrol Ediniz !']);
        }
    }
    public function verify($email, $token)
    {
        $subscriber_data = Subscriber::where('email', $email)->where('token', $token)->first();

        if ($subscriber_data) {
            $subscriber_data->token = '';
            $subscriber_data->status = 1;
            $subscriber_data->update();

            return redirect()->route('home')->with('succes', 'Aboneliğiniz Doğrulandı !');
        } else {
            return redirect()->route('home');
        }
    }
}
