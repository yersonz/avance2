@extends("layouts.app")
@section("content")
    <div class="container">
            <form method="post" action="/subir-archivos" enctype="multipart/form-data">
             @csrf
            <input type="file" name="archivo">
            <input type="submit" name="submit" value="subir">
            </form>
    </div>
@endsection
