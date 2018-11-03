<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
	<title>Plateau Monomalpoly</title>
    <link rel="stylesheet" type="text/css" media="screen" href="./css/board_css.css" />
    <link href="{{ asset('/css/board_css.css') }}" rel="stylesheet">
</head>
<body>
<div class="board">
<div class="center">
Au tour de {{ $game->getTurn()->getName() }} <br>
<a href="{{ url('test2/roll') }}">Lancer les dés</a><br>
<a href="{{ url('test2/buy') }}">Ne rien faire</a><br>
<a href="{{ url('test2/buy/1') }}">Achetez 1 disque</a><br>
<a href="{{ url('test2/buy/2') }}">Achetez 2 disques</a><br>
<a href="{{ url('test2/buy/3') }}">Achetez 3 disques</a><br>
</div>

@for ($i = 0; $i < 36; $i++)
<div class="cell p{{ $i+1 }}" style="text-align: center;">
    @if ($cells[$i]->getType() == 'purchasable')
        <div style="background-color: lightgreen"> {{ $cells[$i]->getName() }} </div>
        <div style="font-size: 11px"> Acheté par : {{ $cells[$i]->getOwner()->getName() }} <br> <br>
        Contient {{ $cells[$i]->getDisks() }} disques </div>
    @else
        <div style="background-color: lightgreen; font-size: 16px"> {{ $cells[$i]->getName() }} </div>
    @endif
</div>
@endfor
@isset($pos)
<div class="cell p{{ $pos }}">
<img src="{{ asset('/img/pepetransparent.png') }}" style="height: 35px; margin: 25%;">
</div>
@endisset

@empty($pos)
<div class="cell p1">
<img src="{{ asset('/img/pepetransparent.png') }}" style="height: 35px; margin: 25%;">
</div>
@endempty
</div>
</body>
</html>