@extends('layout.layout')
@section('title','Edit')
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
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit {{$data->title}}</div>
                    <div class="card-body">
                        <form method="post" action="{{route ('blog.update',$data->id)}}">
                            <div class="form-group">
                                <label class="label" for="titleInput">Title:</label>
                                <input type="text" id="titleInput" name="title" class="form-control" value="{{$data->title}}"
                                    required />
                            </div>
                            <div class="form-group">
                                <label class="label" for="autherInput">Auther:</label>
                                <input type="text" id="autherInput" name="auther" class="form-control" value="{{$data->auther}}"
                                    required />
                            </div>
                            <div class="form-group">
                                <label class="label" for="slugInput">Category:</label>
                                <input type="text" id="slugInput" name="slug" class="form-control" value="{{$data->slug}}"
                                    required />
                            </div>
                            <div class="form-group">
                                <label class="label" for="bodyInput">Subject:</label>
                                <textarea class="form-control" name="body" id="bodyInput" minlength="80" rows="3"
                                    required>{{$data->body}}</textarea>
                            </div>
                            <div class="form-group">
                                @csrf
                                <input type="submit" class="btn btn-success" value="Edit"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
