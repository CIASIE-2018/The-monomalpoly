<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monomalpoly\Game;
use App\Monomalpoly\Cell;

class plateauController extends Controller
{
    public function index() {
        $game = cache('game');
        if ($game) {
            $game = new Game();
        }
        $befboard = $game->getBoard();
        $game->join('1', 'Paul');
        $game->start();
        cache(['game' => $game], 60 * 30);
        return view('vue2', array('cells' => $befboard));
    }
    public function rollDice() {
        $game = cache('game');
        $befboard = $game->getBoard();
        var_dump($game->getTurn()->getPosX());
        $game->move($game->getTurn());
        var_dump($game->getTurn()->getPosX()); 
        cache(['game' => $game], 60 * 30);
        return view('vue2', array('cells' => $befboard, 'pos'=> $game->getTurn()->getPosX()+1));
    }
}
