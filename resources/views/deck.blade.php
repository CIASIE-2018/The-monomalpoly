@extends('layouts.app')

@section('content')
    <div class="cards-container-row">
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
            <div class="card-body"></div>
        </div>
    </div>
@endsection