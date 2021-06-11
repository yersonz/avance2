@extends("layouts.app")
@section("content")
    <div class="container">
        <table class="table">
            <h2>Mostrar Servicios</h2>
            <tr>
                <th>Nombre</th>
                <th>Tipo de Servicios</th>
            </tr>
            <form method="post" action="/ingresar-proveedor">
                @csrf
                <tr>
                    <th><input type="text" class="form-control" size="20" maxlength="100" name="nombre"></th>
                    <th>
                        <select class="form-control">
                            <option name="enfermero">Enfermeros</option>
                            <option name="medio">Medicos</option>
                            <option name="electricista">Electricista</option>
                            <option name="pintor">Pintores</option>
                            <option name="profesor">Profesores</option>
                            <option name="ingeniero">Ingenieros</option>
                            <option name="tecnico">Tecnicos</option>
                        </select>
                    </th>
                </tr>
                <tr>
                    <td colspan="5"><input type="submit" class="btn btn-primary mt-2" name="submit" value="Buscar"></td>
                </tr>
                <tr>
                    <td colspan="5"><input type="reset" class="btn btn-outline-secondary" name="reset" value="Limpiar"></td>
                </tr>
            </form>
        </table>
    </div>
@endsection

