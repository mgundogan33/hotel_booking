@extends('front.layout.app')
@section('main.content')
    <div class="page-top">
        <div class="bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{ $global_page_data->signin_heading }}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">

                    <form action="{{route('customer.login_submit')}}" method="POST">
                        @csrf
                        <div class="login-form">
                            <div class="mb-3">
                                <label for="" class="form-label">E-posta</label>
                                <input type="text" class="form-control" name="email">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Şifre</label>
                                <input type="password" class="form-control" name="password">
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary bg-website">Giriş</button>
                                <a href="{{route('customer.forget_password')}}" class="primary-color">Şifremi Unuttum ?</a>
                            </div>
                            <div class="mb-3">
                                <a href="{{ route('customer.signup') }}" class="primary-color">Kayıt Ol</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
