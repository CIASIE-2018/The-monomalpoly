<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
	<title>Plateau Monomalpoly</title>
    <link rel="stylesheet" type="text/css" media="screen" href="./css/board_css.css" />

    
</head>
<body>
<div class="board">
<div class="center"></div>

@for ($i = 0; $i < 36; $i++)
<div class="cell p{{ $i+1 }}">This is cell name is {{ $cells[$i]->getName() }}</div>
@endfor

</div>
</body>
</html>