@extends('admin.layout.app')
@section('heading', 'Ödeme Kontrol')

@section('main_content')

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.page_checkout_update') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label class="form-label">Başlık </label>
                                        <input type="text" class="form-control" name="checkout_heading"
                                            value="{{ $page_data->checkout_heading }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Statü </label>
                                        <select name="checkout_status" class="form-control">
                                            <option value="1" @if ($page_data->checkout_status == 1) selected @endif>Aktif
                                            </option>
                                            <option value="0" @if ($page_data->checkout_status == 0) selected @endif>Pasif
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label"></label>
                                        <button type="submit" class="btn btn-primary">Düzenle</button>
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
