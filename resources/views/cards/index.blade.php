@extends('layouts.main')
@section('content')
    <h1>Cartas en el sistema</h1>
    @forelse($data['cards'] as $card)
        <hr>
        <h2>{{ $card->name }}</h2>
    @empty
        <hr>
        <p>No existen cartas en el sistema</p>
    @endforelse
@endsection
