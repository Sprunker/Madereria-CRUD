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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-18">
                <div class="card">
                    <div class="card-header">Madera {{$madera->tipo}}</div> <br>

                    <div class="card-body">
                        <table class="table">
                        <thead>
                            <tr>
                            <th>Medidas</th>
                            <th>Grosor</th>
                            <th>Cantidad</th>
                            <th>Detalles</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            <tr>
                        </thead>
                        <tbody>
                                <tr>
                                <td>{{ $madera->medida }}</td>
                                <td>{{ $madera->grosor }}</td>
                                <td>{{ $madera->cantidad }}</td>
                                <td>{{ $madera->detalles }}</td>
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
                        </tbody>
                        </table>
                        <br>
                        <form action="{{route('catalogo.index')}}">
                            {{csrf_field()}}
                            <button type="submit">Regresar</button>
                        </form>
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