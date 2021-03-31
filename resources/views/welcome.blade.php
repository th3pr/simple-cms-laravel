@extends('layout.layout')
@section('title', 'Home Page')
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
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4">
                <img class="img-thumbnail rounded-circle" src="{{url('/images/avatar.png')}}" alt="Avatar">
                <h3 class="text-center">Text Title</h3>
                <p class=" text-justify">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <button class="btn btn-secondary">Button</button>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <img class="img-thumbnail rounded-circle" src="{{url('/images/avatar.png')}}" alt="Avatar">
                <h3 class="text-center">Text Title</h3>
                <p class=" text-justify">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <button class="btn btn-primary">Button</button>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <img class="img-thumbnail rounded-circle" src="{{url('/images/avatar.png')}}" alt="Avatar">
                <h3 class="text-center">Text Title</h3>
                <p class=" text-justify">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <button class="btn btn-danger float-right">Button</button>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4">
                <img class="img-thumbnail rounded-circle" src="images/avatar.png" alt="Avatar">
                <h3 class="text-center">Text Title</h3>
                <p class=" text-justify">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <button class="btn btn-secondary">Button</button>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <img class="img-thumbnail rounded-circle" src="images/avatar.png" alt="Avatar">
                <h3 class="text-center">Text Title</h3>
                <p class=" text-justify">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <button class="btn btn-primary">Button</button>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <img class="img-thumbnail rounded-circle" src="images/avatar.png" alt="Avatar">
                <h3 class="text-center">Text Title</h3>
                <p class=" text-justify">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <button class="btn btn-danger float-right">Button</button>
            </div>
        </div>
    </div>
@endsection
