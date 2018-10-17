<?php
class Piece{

    private $posX;
    private $color;

    function Piece($color){
        $this->posX= 0;
        $this->color= $color;
    }


    function piecePosition($x){
        $this->posX=$x;
    }
}

?>