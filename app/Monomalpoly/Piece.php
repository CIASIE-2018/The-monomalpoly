<?php

namespace App\Monomalpoly;

use Illuminate\Database\Eloquent\Model;


class Piece extends Model
{
    private $player;
    private $color;
    private $letter;

    function __construct($player, $color) {
        $this->player = $player;
        $this->color = $color;
        $this->letter = $this->player->getName()[0];
    }
}
