<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Monomalpoly\Game;
use App\Monomalpoly\Player;
use App\Monomalpoly\Piece;


class TestController extends Controller
{
    public function index() {
        $var = new Game();
        $var->join(1, 'Paul');
        $var->join(2, 'Paul2');
        $var->join(3, 'Paul3');
        $var->join(4, 'Paul4');
        $var->join(5, 'Paul5');
        $var->join(6, 'Paul6');
        $var->start();
        var_dump($var->getTurn());
        return view('test');
    }
}
