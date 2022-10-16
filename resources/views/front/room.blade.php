@extends('front.layout.app')
@section('main.content')
    <div class="page-top">
        <div class="bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{ $global_page_data->room_heading }}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="home-rooms">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="main-header">Odalar ve Süitler</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($room_all as $item)
                    <div class="col-md-3">
                        <div class="inner">
                            <div class="photo">
                                <img src="{{ asset('uploads/' . $item->featured_photo) }}" alt="">
                            </div>
                            <div class="text">
                                <h2><a href="{{ route('room_detail', $item->id) }}">{{ $item->name }}</a></h2>
                                <div class="price">
                                    $ {{ $item->price }} / Gecelik
                                </div>
                                <div class="button">
                                    <a href="{{ route('room_detail', $item->id) }}" class="btn btn-primary">Ayrıntıları
                                        Gör</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-12">
                {{ $room_all->links() }}
            </div>
        </div>
    </div>
@endsection
