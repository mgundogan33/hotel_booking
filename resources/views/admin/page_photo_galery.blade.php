@extends('admin.layout.app')
@section('heading', 'Foto Galeri Düzenle')

@section('main_content')

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.page_photo_galery_update') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label class="form-label">Başlık </label>
                                        <input type="text" class="form-control" name="photo_galery_heading"
                                            value="{{ $page_data->photo_galery_heading }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Statü </label>
                                        <select name="photo_galery_status" class="form-control">
                                            <option value="1" @if ($page_data->photo_galery_status == 1) selected @endif>Aktif
                                            </option>
                                            <option value="0" @if ($page_data->photo_galery_status == 0) selected @endif>Pasif
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
