@extends('front.layout.app')
@section('main.content')
    <div class="page-top">
        <div class="bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Blog</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-item">
        <div class="container">
            <div class="row">
                @foreach ($post_all as $item)
                    <div class="col-md-4">
                        <div class="inner">
                            <div class="photo">
                                <img src="{{ asset('uploads/' . $item->photo) }}" alt="">
                            </div>
                            <div class="text">
                                <h2><a href="{{route('post',$item->id)}}">{{ $item->heading }}</a></h2>
                                <div class="short-des">
                                    <p>
                                        {!! $item->short_content !!}
                                    </p>
                                </div>
                                <div class="button">
                                    <a href="{{route('post',$item->id)}}" class="btn btn-primary">Devamını Oku...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{ $post_all->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
