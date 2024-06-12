@extends('layout')

@section('title', 'Personas')

@section('content')
<h2>Personas</h2>
<tr>
    @if ($personas)
        @foreach ($personas as $persona)

            <td>{{$persona->cPerNombre}}&nbsp{{$persona->cPerApellidos}}<br></td>

        @endforeach  
    @else
        <td colspan="4">No hay servicios que mostrar</td>
    @endif
</tr>
@endsection