@extends('admin.layout.app')
@section('heading', 'Hakkımda')

@section('main_content')

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.page_about_update') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label class="form-label">Başlık </label>
                                        <input type="text" class="form-control" name="about_heading"
                                            value="{{ $page_data->about_heading }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">İçerik</label>
                                        <textarea name="about_content" class="form-control snote" cols="30" rows="10">{{ $page_data->about_content }}</textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Statü </label>
                                        <select name="about_status" class="form-control">
                                            <option value="1" @if($page_data->about_status == 1) selected @endif>Aktif</option>
                                            <option value="0" @if($page_data->about_status == 0) selected @endif>Pasif</option>
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
