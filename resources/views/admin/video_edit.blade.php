@extends('admin.layout.app')
@section('heading', 'Video Düzenle')

@section('right_top_button')
    <a href="{{ route('admin.video_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> Videolar</a>
@endsection

@section('main_content')

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.video_update', $video_data->id) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label class="form-label">Mevcut Video</label>
                                        <div class="iframe-container1">
                                            <iframe class="w_200"
                                                src="https://www.youtube.com/embed/{{ $video_data->video_id }}"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Video Id</label>
                                        <input type="text" class="form-control" name="video_id"
                                            value="{{ $video_data->video_id }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Alt Yazı</label>
                                        <input type="text" class="form-control" name="caption"
                                            value="{{ $video_data->caption }}">
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
