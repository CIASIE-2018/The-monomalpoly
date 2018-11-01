@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liste des différents decks</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="deck-container">
                        <!-- On ajoute la vue pour les différents decks -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection