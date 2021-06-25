@extends("layouts.app")
@section("content")
    <div class="container">
        <h1>PROCESO {{$proceso}}</h1>
        <br>
        <div class="alert alert-success">{{$mensaje}}</div>
    </div>
@endsection
