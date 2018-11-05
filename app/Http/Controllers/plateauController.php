<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monomalpoly\Game;
use App\Monomalpoly\Cell;
use Illuminate\Support\Facades\Auth;

class plateauController extends Controller
{
    public function index() {
        $game = cache('game');
        if ($game) {
            $game = new Game();
        }
        $befboard = $game->getBoard();
        $game->join('1', Auth::user()->name);
        $game->start();
        cache(['game' => $game], 60 * 30);
        return view('vue2', array('game' => $game, 'cells' => $befboard));
    }
    public function rollDice() {
        $game = cache('game');
        $befboard = $game->getBoard();
        var_dump($game->getTurn()->getPosX());
        $game->move($game->getTurn());
        var_dump($game->getTurn()->getPosX()); 
        cache(['game' => $game], 60 * 30);
        return view('vue2', array('game' => $game, 'cells' => $befboard, 'pos'=> $game->getTurn()->getPosX()+1));
    }

    public function buyCell(Request $request, $x) {
        $game = cache('game');
        $befboard = $game->getBoard();
        if(isset($x)) {
            var_dump($game->getBoard()[$game->getTurn()->getPosX()]->getDisks());
            $game->buy($game->getTurn(),$x);
            var_dump($game->getBoard()[$game->getTurn()->getPosX()]->getDisks());
        }
        $game->nextTurn();
        cache(['game' => $game], 60 * 30);
        return view('vue2', array('game' => $game, 'cells' => $befboard, 'pos'=> $game->getTurn()->getPosX()+1));
    }
}
