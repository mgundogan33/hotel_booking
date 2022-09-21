@extends('admin.layout.app')
@section('heading', 'Video Ekle')

@section('right_top_button')
    <a href="{{ route('admin.video_view') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Videolar</a>
@endsection

@section('main_content')

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.video_store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label class="form-label">Video Id</label>
                                        <input type="text" class="form-control" name="video_id"
                                            value="{{ old('video_id') }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Alt Yazı</label>
                                        <input type="text" class="form-control" name="caption"
                                            value="{{ old('caption') }}">
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
