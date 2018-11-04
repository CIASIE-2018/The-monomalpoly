<?php

namespace App\Monomalpoly;

use Illuminate\Database\Eloquent\Model;


class Piece extends Model
{
    //The player with whom the piece is associated
    private $player;
    //Color of the piece
    private $color;
    //The letter of the name of player
    private $letter;

    function __construct($player, $color) {
        $this->player = $player;
        $this->color = $color;
        $this->letter = $this->player->getName()[0];
    }
}
