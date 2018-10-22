<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monomalpoly\Cell;

class plateauController extends Controller
{
    public function index() {
        $var = new Cell(1, 'Depart', 'Depart', '#FFFFFF');
        $type = $var->getType();
        $color = $var->getColor();
        return view('vue2', ['var'=> $var, 'type' => $type, 'color'=> $color]);
    }
}
