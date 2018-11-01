<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DeckCreationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    function getEveryCards(){
        //Get every cards
        $result = DB::table('card_types')
        ->select('id','name','description')
        ->get();

        $everyCards='<ul class="type-card-list">';
        foreach($result as $row){
            $everyCards.='<li id='.$row->id.'>'.$row->name.'<button onclick="addToList()">-></button></li>';
        }
        $everyCards.='</ul>';

        return view('deck',compact('everyCards'));
    }
}
