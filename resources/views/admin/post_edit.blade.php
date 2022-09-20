@extends('admin.layout.app')
@section('heading', 'Gönderi Düzenle')

@section('right_top_button')
    <a href="{{ route('admin.post_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> Gönderi</a>
@endsection

@section('main_content')

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.post_update', $post_data->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label class="form-label">Gönderi Resmi</label>
                                        <div>
                                            <img src="{{ asset('uploads/' . $post_data->photo) }}" alt=""
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
                                        <label class="form-label">Başlık</label>
                                        <input type="text" class="form-control" name="heading"
                                            value="{{ $post_data->heading }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Kısa İçerik</label>
                                        <textarea name="short_content" class="form-control h_100" id="" cols="30" rows="10">{{ $post_data->short_content }}</textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">İçerik</label>
                                        <textarea name="content" class="form-control snote" id="" cols="30" rows="10">{{ $post_data->content }}</textarea>
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
