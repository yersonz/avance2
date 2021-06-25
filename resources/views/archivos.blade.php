@extends("layouts.app")
@section("content")

    <div class="container">
        <h1>Publicar</h1>
            <form method="post" action={{route("subir")}} enctype="multipart/form-data">
             @csrf
                <input type="text" name class="form-control mt-2" name="ide" id="ide" value="{{$idesigue}}" readonly='readonly' placeholder="id">
                <input type="text" class="form-control mt-2" name="nombre" placeholder="ingresar titulo">
                <textarea type="text" class="form-control mt-2" name="descripcion" placeholder="ingresar descripcion"></textarea>
                <select name="idd" class="form-control mt-2">
                    <option selected="">Seleccione una categoria</option>
                    @foreach($categoria as $cate)
                        <option value="{{$cate->idd}}">{{$cate->nombre}}</option>
                    @endforeach
                </select>
                <input class="form-control mt-2" type="file" name="archivo">
                <input type="submit"  class="btn btn-danger mt-2" name="submit" value="subir">
            </form>

    </div>
@endsection
