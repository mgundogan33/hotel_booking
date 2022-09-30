@extends('admin.layout.app')
@section('heading', 'Foto Galeri' . ' ' . $room_data->name)

@section('right_top_button')
    <a href="{{ route('admin.room_view') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Odalar</a>
@endsection

@section('main_content')

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.room_galery_store',$room_data->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label class="form-label">Oda Resmi</label>
                                        <div>
                                            <input type="file" name="photo">
                                        </div>
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
                                        <th>Düzenle / Sil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($room_photos as $row)

                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img src="{{ asset('uploads/'.$row->photo) }}" alt=""
                                                    class="w_200">
                                            </td>
                                            <td class="pt_10 pb_10">
                                                <a href="{{ route('admin.room_galery_delete',$row->id) }}" onclick="return confirm('Silmek İstediğinize Eminmisiniz ?')" class="btn btn-danger">Sil</a>
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
