<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista</title>

    @extends('Catalogo.madera-layout')
    @extends('Catalogo.nav-bar')

</head>
<body>
    <br> <br> <br> <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-18">
                <div class="card">
                    <div class="card-header">Listado Maderas</div> <br>

                    <div class="container">
                        <table class="table">
                        <thead>
                            <tr>
                            <th>Tipo</th>
                            <th>Medidas</th>
                            <th>Grosor</th>
                            <th>Cantidad</th>
                            <th>Detalles</th>
                            <th>Detalles</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            <tr>
                        </thead>
                        <tbody>
                            @foreach($maderas as $madera)
                                <tr>
                                <td>{{ $madera->tipo }}</td>
                                <td>{{ $madera->medida }}</td>
                                <td>{{ $madera->grosor }}</td>
                                <td>{{ $madera->cantidad }}</td>
                                <td>{{ $madera->detalles }}</td>
                                <td>
                                <!-- <a href="{/{ route('catalogo.show', $madera->id) }}" class="btn btn-sm btn info">Detalles</a> -->
                                <form action="{{route('catalogo.show', $madera->id)}}">
                                    {{csrf_field()}}
                                    <button type="submit">Detalles</button>
                                </form>
                                </td>
                                <td>
                                <!-- <a href="{/{ route('catalogo.edit', $madera->id) }}" class="btn btn-sm btn info">Editar</a> -->
                                <form action="{{route('catalogo.edit', $madera->id)}}">
                                    {{csrf_field()}}
                                    <button type="submit">Editar</button>
                                </form>
                                </td>
                                <td>
                                    <form action="{{url('/catalogo/'.$madera->id)}}">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button type="submit" onclick="return confirm('¿Estás seguro de que quieres borrar este registro?');">Borrar</button>
                                    </form>
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                        <form action="{{route('catalogo.create')}}">
                            {{csrf_field()}}
                            <button type="submit">Nuevo Registro</button>
                        </form> <br>
                        <form action="{{url('/')}}">
                            {{csrf_field()}}
                            <button type="submit" style="position: absolute; top: 7px; right: 5px;">Inicio</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>