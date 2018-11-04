<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NamePlayer extends Controller{

// Will store a new player for the game when he press the bouton 'jouer'

    public function storeNamePlayer(Request $request)
    {
        $Playername = $request->input('PlayerName');
    }      
}
