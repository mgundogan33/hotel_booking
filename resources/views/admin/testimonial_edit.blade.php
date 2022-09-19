@extends('admin.layout.app')
@section('heading', 'Referans Düzenle')

@section('right_top_button')
    <a href="{{ route('admin.testimonial_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> Referans</a>
@endsection

@section('main_content')

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.testimonial_update', $testimonial_data->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label class="form-label">Referans Resmi</label>
                                        <div>
                                            <img src="{{ asset('uploads/' . $testimonial_data->photo) }}" alt=""
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
                                        <label class="form-label">İsim</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $testimonial_data->name }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">İsim</label>
                                        <input type="text" class="form-control" name="designation"
                                            value="{{ $testimonial_data->designation }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Yorum</label>
                                        <textarea name="comment" class="form-control h_100" id="" cols="30" rows="10">{{ $testimonial_data->comment }}</textarea>
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
