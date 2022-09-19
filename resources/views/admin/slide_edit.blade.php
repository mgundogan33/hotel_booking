@extends('admin.layout.app')
@section('heading', 'Slayt Düzenle')

@section('right_top_button')
    <a href="{{ route('admin.slide_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> Slaytlar</a>
@endsection

@section('main_content')

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.slide_update', $slide_data->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label class="form-label">Slayt Resmi</label>
                                        <div>
                                            <img src="{{ asset('uploads/' . $slide_data->photo) }}" alt=""
                                                class="w_200">
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Yeni Resim</label>
                                        <div>
                                            <input type="file" name="photo">
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Slayt Başlığı</label>
                                        <input type="text" class="form-control" name="text"
                                            value="{{ $slide_data->heading }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Slayt Metni</label>
                                        <textarea name="text" class="form-control h_100" id="" cols="30" rows="10">{{ $slide_data->text }}</textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Button Metni</label>
                                        <input type="text" class="form-control" name="button_text"
                                            value="{{ $slide_data->button_text }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Button Url</label>
                                        <input type="text" class="form-control" name="button_url"
                                            value="{{ $slide_data->button_url }}">
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
