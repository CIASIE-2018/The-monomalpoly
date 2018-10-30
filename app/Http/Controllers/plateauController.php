<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monomalpoly\Game;
use App\Monomalpoly\Cell;

class plateauController extends Controller
{
    public function index() {
        $var = new Game();
        $befboard = $var->getBoard();
        // $i = 0;
        // foreach ($befboard as $key => $value) {
        //     $board[$i] = $value->getName();
        //     $i++;
        // }
        return view('vue2', array('cells' => $befboard));
    }
}
