@extends('admin.layout.app')
@section('heading', 'Blog Ekle')

@section('right_top_button')
    <a href="{{ route('admin.post_view') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Blog</a>
@endsection

@section('main_content')

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.post_store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label class="form-label">Gönderi Resmi</label>
                                        <div>
                                            <input type="file" name="photo">
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Başlık</label>
                                        <input type="text" class="form-control" name="heading"
                                            value="{{ old('heading') }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Kısa İçerik</label>
                                        <textarea name="short_content" class="form-control h_100" id="" cols="30" rows="10">{{ old('short_content') }}</textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">İçerik</label>
                                        <textarea name="content" class="form-control h_100" id="" cols="30" rows="10">{{ old('content') }}</textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label"></label>
                                        <button type="submit" class="btn btn-primary">Oluştur</button>
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
