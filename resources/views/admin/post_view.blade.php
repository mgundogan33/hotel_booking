@extends('admin.layout.app')
@section('heading', 'Gönderi')

@section('right_top_button')
    <a href="{{ route('admin.post_add') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Gönderi Oluştur</a>
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
                                        <th>Slider Fotoğraf</th>
                                        <th>Başlık</th>
                                        <th>Düzenle / Sil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img src="{{ asset('uploads/' . $row->photo) }}" alt=""
                                                    class="w_200">
                                            </td>
                                            <td>{{ $row->heading }}</td>
                                            <td class="pt_10 pb_10">
                                                <a href="{{ route('admin.post_edit', $row->id) }}"
                                                    class="btn btn-success">Düzenle</a>
                                                <a href="{{ route('admin.post_delete', $row->id) }}"
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
