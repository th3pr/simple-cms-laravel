@extends('layout.layout')
@section('title')
{{$data->title}}
@endsection
@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-8">
        <!-- Title -->
        <h1 class="mt-4">{{$data->title}}</h1>
        <!-- Author -->
        <p>by {{$data->auther}}
        </p>
        <hr>
        <!-- Date/Time -->
        <p>Posted on {{$data->created_at}}</p>
        <hr>
        <!-- Preview Image -->
        <img class="img-fluid rounded" src="{{ url('/images/avatar.png') }}" alt="">
        <hr>
        <!-- Post Content -->
        <p class="lead">{{$data->body}}</p>
        <a href="{{url ('/blog/'.$data->id.'/edit')}}" class="btn btn-success">Edit</a></>
        <a href="{{ route('blog.delete',$data->id) }}" class="btn btn-danger float-right">Delete</a>
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">HTML</a>
                  </li>
                  <li>
                    <a href="#">Freebies</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection
