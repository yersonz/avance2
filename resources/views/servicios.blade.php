@extends("layouts.app")
@section("content")
    <div class="container">
        <h2>Ver Servicios</h2>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th>Clave</th>
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>Categoria</th>
            </tr>
        </thead>
        <tbody>
        @foreach($consulta as $c)
        <tr>
                <th scope="row">{{$c->ide}}</th>
                <td>{{$c->nombre}}</td>
                <td>{{$c->descripcion}}</td>
                 <td>{{$c->cate}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>


@endsection
