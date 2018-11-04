@extends('layouts.app')

@section('content')
    <?php            
        if(strpos($_SERVER['REQUEST_URI'],'modif')!=false){
            echo '<form id="deck_form" class="grid" action="modifDeck?id_deck='.$_GET['id_deck'].'" method="POST">';
        }else{
            echo '<form id="deck_form" class="grid" action="decklist" method="POST">';
        }
    ?>
        @csrf
        <div class="grid-row">
            <div class="card">
                <input autofocus="on" type="textField" autocomplete="off" name="deck_name" class="card-header" placeholder="Nom du deck" value=<?php echo $deck_name; ?>>                                    
                <div class="card-body">
                    <ul class="type-card-list">
                        <?php echo $everyCards; ?>
                    </ul>
                   
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Liste des cartes
                </div>
                <div class="card-body">
                    <ul class="deck-card-list">
                        <?php echo $deck_cards; ?>
                    </ul>
                </div>
            </div>
            <input style="display:none;" type="text" name="type_card_1">
            <input style="display:none;" type="text" name="type_card_2">
            <input style="display:none;" type="text" name="type_card_3">
        </div>
        <div class="grid-row middleFlex">
            <button type="Button"><a  href="{{ url('decklist') }}">Annuler</a></button>
            <button type="Submit">Valider</button>
        </div>
    </form>      
@endsection