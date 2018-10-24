@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Heureux de vous revoir !</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="menu">
                        <a href="">Rejoindre une partie</a>
                        <a href="">Editeur de cartes</a>
                        <a href="{{ url('rules') }}">Règles</a>
                        <a href="">Crédits</a>                    
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
