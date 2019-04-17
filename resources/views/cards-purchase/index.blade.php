@extends('layouts.main')
@section('content')
<h1 class="title">Compra de la tarjeta</h1>
<table class="table">
    <tr>
        <th>Nombre</th>
        <td>{{ $data['card']->name }}</td>
    </tr>
    <tr>
        <th>Ataque</th>
        <td>{{ $data['card']->attack }}</td>
    </tr>
    <tr>
        <th>Defensa</th>
        <td>{{ $data['card']->price }}</td>
    </tr>
    <tr>
        <td colspan="2">
            Acción de comprar
        </td>
    </tr>
</table>
@endsection
