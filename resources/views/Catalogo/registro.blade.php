<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    @extends('Catalogo.madera-layout')
</head>
<body>
    
    <h2>Registro de Miembros</h2>

    @if(isset($madera))
        <form action="{{ route('catalogo.update', $madera->id) }}" method="Post">
        <!--    <input type="hidden" name="_method" value="PATCH">  -->
        @method('PATCH')
    @else
        <form action="{{ route('catalogo.store') }}" method="POST">
    @endif
    @csrf

    Tipo: <br />
    <input type="text" name="tipo" value="{{ $madera->tipo ?? '' }}" placeholder="Ingresa el Tipo*" size="20" />
    <p>
        Medidas (m): <br />
        <input type="text" name="medida" value="{{ $madera->medida ?? '' }}" placeholder="Ingresa (Anc x Alt)" size="20" />
    </p>
    <p>
        Grosor (pul): <br />
        <input type="text" name="grosor" value="{{ $madera->grosor ?? '' }}" placeholder="Ingresa el grosor" size="20" />
    </p>
    <p>
        Cantidad: <br />
        <input type="text" name="cantidad" value="{{ $madera->cantidad ?? '' }}" placeholder="Ingresa la cantidad*" size="20" />
    </p>
    <p>
        Detalles: <br />
        <textarea name="detalles" value="{{ $madera->detalles ?? '' }}" placeholder="Ingresa los detalles" rows="5" cols="40"></textarea>
    </p>
    <p>
        Campos obligatorios*
    </p>
    <p>
        <button type="submit" class="btn btn-primary btn-block">Insertar</button>
    </p>
    
    </form>

    <form action="{{route('catalogo.index')}}">
        {{csrf_field()}}
        <button type="submit" style="position: absolute; top: 440px; left: 80px">Cancelar</button>
    </form>
    <form action="{{url('/')}}">
        {{csrf_field()}}
        <button type="submit" style="position: absolute; top: 7px; left: 500px">Inicio</button>
    </form> <br>
</body>
</html>