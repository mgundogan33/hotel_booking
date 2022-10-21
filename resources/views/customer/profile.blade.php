@extends('customer.layout.app')
@section('heading', 'Profili Düzenle')

@section('main_content')

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('customer.profile_submit') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    @auth
                                        @php
                                            if (Auth::guard('customer')->user()->photo != '') {
                                                $customer_photo = Auth::guard('customer')->user()->photo;
                                            } else {
                                                $customer_photo = 'default.png';
                                            }
                                        @endphp

                                        <img src="{{ asset('uploads/' . $customer_photo) }}" alt=""
                                            class="profile-photo w_100_p">
                                        <input type="file" class="form-control mt_10" name="photo">
                                    @endauth
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">İsim</label>
                                                <input type="text" class="form-control" name="name"
                                                    value="{{ Auth::guard('customer')->user()->name }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Email</label>
                                                <input type="text" class="form-control" name="email"
                                                    value="{{ Auth::guard('customer')->user()->email }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Telefon</label>
                                                <input type="text" class="form-control" name="phone"
                                                    value="{{ Auth::guard('customer')->user()->phone }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Ülke</label>
                                                <input type="text" class="form-control" name="country"
                                                    value="{{ Auth::guard('customer')->user()->country }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Adres</label>
                                                <input type="text" class="form-control" name="address"
                                                    value="{{ Auth::guard('customer')->user()->address }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Durum</label>
                                                <input type="text" class="form-control" name="state"
                                                    value="{{ Auth::guard('customer')->user()->state }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Şehir</label>
                                                <input type="text" class="form-control" name="city"
                                                    value="{{ Auth::guard('customer')->user()->city }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Zip</label>
                                                <input type="text" class="form-control" name="zip"
                                                    value="{{ Auth::guard('customer')->user()->zip }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Şifre</label>
                                                <input type="password" class="form-control" name="password">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Şifre Tekrar</label>
                                                <input type="password" class="form-control" name="retype_password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label"></label>
                                        <button type="submit" class="btn btn-primary">Güncelle</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
