@extends('layouts.app')

@section('content')
    <div class="grid">
        <div class="grid-row">
            <div class="card">
                <div class="card-header">
                    Nom du deck
                </div>
                <div class="card-body">
                    <?php echo $everyCards; ?>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Liste des cartes
                </div>
                <div class="card-body">
                    <ul id="deck-card-list"></ul>
                </div>
            </div>
        </div>
        <div class="grid-row middleFlex">
            <button>Annuler</button>
            <button>Valider</button>
        </div>        
@endsection