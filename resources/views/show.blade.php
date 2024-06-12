@extends('layout')

@section('title', 'Servicio | ' . $persona->cPerApellidos)

@section('content')

<tr>
    <td colspan="4">{{$persona->cPerApellidos}}</td>
</tr>
<tr>
    <td colspan="4">{{$persona->cPerNombre}}</td>
</tr>


@endsection