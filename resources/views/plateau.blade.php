<?php 
    $cell2 = "Hello world !!!";
?>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Plateau</title>
    </head>
    <body>
        <div class="content">
            <div class="plateau">
                {{ $cell2 }}
            </div>
        </div>
    </body>
</html>