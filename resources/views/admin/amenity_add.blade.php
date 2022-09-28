@extends('admin.layout.app')
@section('heading', 'Otel Odası Olanakları Ekle')

@section('right_top_button')
    <a href="{{ route('admin.amenity_view') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Otel Odası Olanakları</a>
@endsection

@section('main_content')

    <div class="section-body">
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.amenity_store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="mb-4">
                                        <label class="form-label">İsim</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ old('name') }}">
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
