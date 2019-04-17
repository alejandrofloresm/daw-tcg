@extends('layouts.main')
@section('content')
    <div class="columns is-mobile is-multiline">
        @forelse($data['cards'] as $card)
            <div class="column is-one-third">
                <p class="title">{{ $card->name }}</p>
                <p class="subtitle">Attack: {{ $card->attack}}</p>
                <p class="subtitle">Defense: {{ $card->attack}}</p>
            </div>
        @empty
            <p>No existen cartas en el sistema</p>
        @endforelse
    </div>
@endsection
