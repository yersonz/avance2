@extends("layouts.app")
@section("content")
    <div class="container">
        <h1>Registrar Dirección</h1>
        <form method="post" action="/guardar-direccion">
            @csrf
            <input class="form-control mt-2" type="text" name="region" placeholder="ingrese region">
            <input class="form-control mt-2" type="text" name="provincia" placeholder="ingrese provincia">
            <input class="form-control mt-2" type="text" name="distrito" placeholder="ingrese distrito">
            <input class="form-control mt-2" type="text" name="residencia" placeholder="ingrese direccion">
            <input class="btn btn-primary mt-2" type="submit" value="Guardar">
        </form>
    </div>
@endsection
