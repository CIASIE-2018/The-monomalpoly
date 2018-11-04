@extends('layouts.navigation')

@section('card-head')
    Liste des decks
@endsection

@section('card-content')
    <div class="deck-container">
    <!-- On ajoute la vue pour les différents decks -->
    <?php
        echo $decklist;
    ?>
    </div>    
    <button class="btn-creation" onclick="window.location.href = 'deckcreation'">[ + ] Créer un deck</button>
@endsection