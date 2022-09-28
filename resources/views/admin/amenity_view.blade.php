@extends('admin.layout.app')
@section('heading', 'Otel Odası Olanakları')

@section('right_top_button')
    <a href="{{ route('admin.amenity_add') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Otel Odası Olanakları</a>
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
                                        <th>İsim</th>
                                        <th>Düzenle / Sil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($amenities as $row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                {{ $row->name }}
                                            </td>
                                            <td class="pt_10 pb_10">
                                                <a href="{{ route('admin.amenity_edit', $row->id) }}"
                                                    class="btn btn-success">Düzenle</a>
                                                <a href="{{ route('admin.amenity_delete', $row->id) }}"
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
