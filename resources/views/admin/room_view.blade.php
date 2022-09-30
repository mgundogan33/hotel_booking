@extends('admin.layout.app')
@section('heading', 'Odalar')

@section('right_top_button')
    <a href="{{ route('admin.room_add') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Oluştur</a>
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
                                        <th>Fotoğraf</th>
                                        <th>Oda Adı</th>
                                        <th>Gecelik Fiyat</th>
                                        <th>Düzenle / Sil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=0; @endphp
                                    @foreach ($rooms as $row)
                                        @php $i++; @endphp
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img src="{{ asset('uploads/' . $row->featured_photo) }}" alt=""
                                                    class="w_200">
                                            </td>
                                            <td>{{ $row->name }}</td>
                                            <td>$ -{{ $row->price }}</td>
                                            <td class="pt_10 pb_10">
                                                <button class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal{{ $i }}">Detay</button>

                                                    <a href="{{route('admin.room_galery', $row->id)}}"
                                                        class="btn btn-warning">Foto Galeri</a>

                                                <a href="{{ route('admin.room_edit', $row->id) }}"
                                                    class="btn btn-success">Düzenle</a>
                                                <a href="{{ route('admin.room_delete', $row->id) }}"
                                                    onclick="return confirm('Silmek İstediğinize Eminmisiniz ?')"
                                                    class="btn btn-danger">Sil</a>
                                            </td>
                                        </tr>

                                        <div class="modal fade" id="exampleModal{{ $i }}" tabindex="-1"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Oda Detay</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">x</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group row bdb1 pt_10 mb_0">
                                                            <div class="col-md-4"><label class="form-label">Fotoğraf</label>
                                                            </div>
                                                            <img src="{{ asset('uploads/' . $row->featured_photo) }}"
                                                                class="w_200" alt="">
                                                        </div>
                                                        <div class="form-group row bdb1 pt_10 mb_0">
                                                            <div class="col-md-4"><label class="form-label">Oda Adı</label>
                                                            </div>
                                                            <div class="col-md-8">{{ $row->name }}</div>
                                                        </div>
                                                        <div class="form-group row bdb1 pt_10 mb_0">
                                                            <div class="col-md-4"><label class="form-label">Açıklama</label>
                                                            </div>
                                                            <div class="col-md-8">{!! $row->description !!}</div>
                                                        </div>
                                                        <div class="form-group row bdb1 pt_10 mb_0">
                                                            <div class="col-md-4"><label class="form-label">Gecelik
                                                                    Fiyat</label>
                                                            </div>
                                                            <div class="col-md-8">$ {{ $row->price }}</div>
                                                        </div>
                                                        <div class="form-group row bdb1 pt_10 mb_0">
                                                            <div class="col-md-4"><label class="form-label">Toplam
                                                                    Oda</label>
                                                            </div>
                                                            <div class="col-md-8">{{ $row->total_rooms }}</div>
                                                        </div>
                                                        <div class="form-group row bdb1 pt_10 mb_0">
                                                            <div class="col-md-4"><label class="form-label">Otel Odası
                                                                    Olanakları</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                @php
                                                                    $arr = explode(',', $row->amenities);
                                                                    for ($j = 0; $j < count($arr); $j++) {
                                                                        $temp_row = \App\Models\Amenity::where('id', $arr[$j])->first();
                                                                        echo $temp_row->name . '<br>';
                                                                    }
                                                                @endphp
                                                            </div>
                                                        </div>
                                                        <div class="form-group row bdb1 pt_10 mb_0">
                                                            <div class="col-md-4"><label class="form-label">Oda
                                                                    Boyutu</label>
                                                            </div>
                                                            <div class="col-md-8">{{ $row->size }}</div>
                                                        </div>
                                                        <div class="form-group row bdb1 pt_10 mb_0">
                                                            <div class="col-md-4"><label class="form-label">Toplam
                                                                    Yatak</label>
                                                            </div>
                                                            <div class="col-md-8">{{ $row->total_beds }}</div>
                                                        </div>
                                                        <div class="form-group row bdb1 pt_10 mb_0">
                                                            <div class="col-md-4"><label class="form-label">Toplam
                                                                    Banyo</label>
                                                            </div>
                                                            <div class="col-md-8">{{ $row->total_bathrooms }}</div>
                                                        </div>
                                                        <div class="form-group row bdb1 pt_10 mb_0">
                                                            <div class="col-md-4"><label class="form-label">Toplam
                                                                    Balkon</label>
                                                            </div>
                                                            <div class="col-md-8">{{ $row->total_balconies }}</div>
                                                        </div>
                                                        <div class="form-group row bdb1 pt_10 mb_0">
                                                            <div class="col-md-4"><label
                                                                    class="form-label">Misafirler</label>
                                                            </div>
                                                            <div class="col-md-8">{{ $row->total_guests }}</div>
                                                        </div>
                                                        <div class="form-group row bdb1 pt_10 mb_0">
                                                            <div class="col-md-4"><label class="form-label">Video</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="iframe-container1">

                                                                    <iframe class="w_200"
                                                                        src="https://www.youtube.com/embed/{{ $row->video_id }}"
                                                                        title="YouTube video player" frameborder="0"
                                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                                        allowfullscreen></iframe>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
