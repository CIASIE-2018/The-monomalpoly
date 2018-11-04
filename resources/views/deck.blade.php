@extends('layouts.app')

@section('content')
    <form id="deck_form" class="grid" action="{{ url('decklist') }}" method="POST">
        @csrf
        <div class="grid-row">
            <div class="card">
                <input autofocus="on" type="textField" autocomplete="off" name="deck_name" class="card-header" placeholder="Nom du deck">                                    
                <div class="card-body">
                    <?php echo $everyCards; ?>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Liste des cartes
                </div>
                <div class="card-body">
                    <ul class="deck-card-list"></ul>
                </div>
            </div>
            <input style="display:none;" type="text" name="type_card_1">
            <input style="display:none;" type="text" name="type_card_2">
            <input style="display:none;" type="text" name="type_card_3">
        </div>
        <div class="grid-row middleFlex">
            <button type="Button"><a  href="{{ url('decklist') }}">Annuler</a></button>
            <button type="Submit">Créer deck</button>
        </div>
    </form>      
@endsection