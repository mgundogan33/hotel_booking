@extends('admin.layout.app')
@section('heading', 'Gizlilik Politikası')

@section('main_content')

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.page_privacy_update') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label class="form-label">Başlık </label>
                                        <input type="text" class="form-control" name="privacy_heading"
                                            value="{{ $privacy_data->privacy_heading }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">İçerik</label>
                                        <textarea name="privacy_content" class="form-control snote" cols="30" rows="10">{{ $privacy_data->privacy_content }}</textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Statü </label>
                                        <select name="privacy_status" class="form-control">
                                            <option value="1" @if($privacy_data->privacy_status == 1) selected @endif>Aktif</option>
                                            <option value="0" @if($privacy_data->privacy_status == 0) selected @endif>Pasif</option>
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
