<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
	<title>Ma première vue</title>
    <style>
    body {
        display: inline;
    }

    .board {
        display: grid;
        grid-template-columns: repeat(10, 1fr);
        grid-template-rows: repeat(10, 1fr);
        width: 0;
    }
    
    .center {
        grid-column: 2 / 10;
        grid-row: 2 / 10;
        background: lightgrey;
        border: solid black 1px;
    }

    .cell {
        width: 70px;
        height: 100px;
        border: solid black 1px;
    }

    .p1 { grid-column: 10 / span 1; grid-row: 10 / span 1; }
    .p2 { grid-column: 9 / span 1; grid-row: 10 / span 1; }
    .p3 { grid-column: 8 / span 1; grid-row: 10 / span 1; }
    .p4 { grid-column: 7 / span 1; grid-row: 10 / span 1; }
    .p5 { grid-column: 6 / span 1; grid-row: 10 / span 1; }
    .p6 { grid-column: 5 / span 1; grid-row: 10 / span 1; }
    .p7 { grid-column: 4 / span 1; grid-row: 10 / span 1; }
    .p8 { grid-column: 3 / span 1; grid-row: 10 / span 1; }
    .p9 { grid-column: 2 / span 1; grid-row: 10 / span 1; }
    .p10 { grid-column: 1 / span 1; grid-row: 10 / span 1; }

    .p11 { grid-column: 1 / span 1; grid-row: 9 / span 1; }
    .p12 { grid-column: 1 / span 1; grid-row: 8 / span 1; }
    .p13 { grid-column: 1 / span 1; grid-row: 7 / span 1; }
    .p14 { grid-column: 1 / span 1; grid-row: 6 / span 1; }
    .p15 { grid-column: 1 / span 1; grid-row: 5 / span 1; }
    .p16 { grid-column: 1 / span 1; grid-row: 4 / span 1; }
    .p17 { grid-column: 1 / span 1; grid-row: 3 / span 1; }
    .p18 { grid-column: 1 / span 1; grid-row: 2 / span 1; }
    .p19 { grid-column: 1 / span 1; grid-row: 1 / span 1; }

    .p20 { grid-column: 2 / span 1; grid-row: 1 / span 1; }
    .p21 { grid-column: 3 / span 1; grid-row: 1 / span 1; }
    .p22 { grid-column: 4 / span 1; grid-row: 1 / span 1; }
    .p23 { grid-column: 5 / span 1; grid-row: 1 / span 1; }
    .p24 { grid-column: 6 / span 1; grid-row: 1 / span 1; }
    .p25 { grid-column: 7 / span 1; grid-row: 1 / span 1; }
    .p26 { grid-column: 8 / span 1; grid-row: 1 / span 1; }
    .p27 { grid-column: 9 / span 1; grid-row: 1 / span 1; }
    .p28 { grid-column: 10 / span 1; grid-row: 1 / span 1; }

    .p29 { grid-column: 10 / span 1; grid-row: 2 / span 1; }
    .p30 { grid-column: 10 / span 1; grid-row: 3 / span 1; }
    .p31 { grid-column: 10 / span 1; grid-row: 4 / span 1; }
    .p32 { grid-column: 10 / span 1; grid-row: 5 / span 1; }
    .p33 { grid-column: 10 / span 1; grid-row: 6 / span 1; }
    .p34 { grid-column: 10 / span 1; grid-row: 7 / span 1; }
    .p35 { grid-column: 10 / span 1; grid-row: 8 / span 1; }
    .p36 { grid-column: 10 / span 1; grid-row: 9 / span 1; }
    .p37 { grid-column: 10 / span 1; grid-row: 10 / span 1; }

    a { font-size: 24px; }
    </style>
</head>
<body>
<div class="board">
<div class="center"></div>

@for ($i = 0; $i < 36; $i++)
<div class="cell p{{ $i+1 }}">This is cell name is {{ $cells[$i]->getName() }}</div>
@endfor
@isset($pos)
<div class="cell p{{ $pos }}">
<img src="/image/pepetransparent.png">
</div>
@endisset

@empty($pos)
<div class="cell p1">
<img src="/image/pepetransparent.png">
</div>
@endempty
</div>
<a href="{{ url('test2/roll') }}">Lancer les dés</a>
</body>
</html>