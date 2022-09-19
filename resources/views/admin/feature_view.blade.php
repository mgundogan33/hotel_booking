@extends('admin.layout.app')
@section('heading', 'Iconları Görüntüle')

@section('right_top_button')
    <a href="{{ route('admin.feature_add') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Icon Oluştur</a>
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
                                        <th>İcon</th>
                                        <th>Başlık</th>
                                        <th>Düzenle / Sil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($features as $row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <i class="{{ $row->icon }} fz_40"></i>
                                            </td>
                                            <td>
                                                {{ $row->heading }}
                                            </td>
                                            <td class="pt_10 pb_10">
                                                <a href="{{ route('admin.feature_edit', $row->id) }}"
                                                    class="btn btn-success">Düzenle</a>
                                                <a href="{{ route('admin.feature_delete', $row->id) }}"
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
