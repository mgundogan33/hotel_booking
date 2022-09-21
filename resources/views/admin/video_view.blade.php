@extends('admin.layout.app')
@section('heading', 'Video')

@section('right_top_button')
    <a href="{{ route('admin.video_add') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Video Oluştur</a>
@endsection


@section('main_content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="example1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Video Önizlemesi</th>
                                        <th>Alt Yazı</th>
                                        <th>Düzenle / Sil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($videos as $row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="iframe-container1">

                                                    <iframe class="w_200"
                                                        src="https://www.youtube.com/embed/{{ $row->video_id }}"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen></iframe>
                                                </div>
                                            </td>
                                            <td>{{ $row->caption }}</td>
                                            <td class="pt_10 pb_10">
                                                <a href="{{ route('admin.video_edit', $row->id) }}"
                                                    class="btn btn-success">Düzenle</a>
                                                <a href="{{ route('admin.video_delete', $row->id) }}"
                                                    onclick="return confirm('Silmek İstediğinize Eminmisiniz ?')"
                                                    class="btn btn-danger">Sil</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
