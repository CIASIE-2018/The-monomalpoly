<?php

namespace App\Monomalpoly;

use Illuminate\Database\Eloquent\Model;
    
class Piece extends Model
{
    function piecePosition($x){
        $this->posX=$x;
    }
}
