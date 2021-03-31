@extends('layout.layout')
@section('title', 'Blog')
@section('slider')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 img-fluid " src="{{ url('/images/hotelsbg.jpeg') }}" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="h1">@yield('title')</h1>
                <button class="btn btn-info">Buy</button>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 img-fluid" src="{{ url('/images/hotelsbg.jpeg') }}" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="h1">Second slide</h1>
                <button class="btn btn-success">Buy</button>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 img-fluid " src="{{ url('/images/hotelsbg.jpeg') }}" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="h1">Third slide</h1>
                <button class="btn btn-secondary">Buy</button>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
@endsection
@section('content')
    <div class="container mt-3">
        <a href="{{ route('blog.create') }}" class="btn btn-info">Create</a>
        <div class="card-group">
            <div class="row">
                @foreach ($data as $item)
                    <div class="col-12 col-md-4 col-lg-4 mt-2">
                        <div class="card">
                            <img class="card-img-top" src="{{ url('/images/avatar.png') }}" alt="Card image cap">
                            <div class="card-body">
                                {{-- tl3 3ene el ref da --}}
                                <h5 class="card-title"><a href="{{url ('/blog/'.$item->id)}}">{{ $item->title }}</a></h5>
                                <p class="card-text text-justify">{{ Str::limit($item->body ,80) }}</p>
                                <span class="card-text float-left"><small
                                        class="text-muted">{{ $item->auther }}</small></span>
                                <span class="card-text float-right"><small
                                        class="text-muted">{{ $item->slug }}</small></span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
