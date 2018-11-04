@extends('layouts.navigation')

@section('card-head')
    Heureux de vous voir !
@endsection

@section('card-content')
    <div class="menu">
        <a href="{{ url('game') }}">Rejoindre une partie</a>
        <a href="{{ url('decklist') }}">Créateur de deck</a>
        <a href="{{ url('rules') }}">Règles</a>
        <a href="">Crédits</a>                    
    </div>
@endsection
