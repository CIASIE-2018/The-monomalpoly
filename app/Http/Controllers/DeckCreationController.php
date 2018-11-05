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
        $everyCards="";
        $deck_cards = "";
        $deck_name = "";        

        //Get every cards
        $result = DB::table('card_types')
        ->select('id','name','description')
        ->get();
        
        foreach($result as $row){
            $everyCards.='<li class='.$row->id.'>'.$row->name.'<button type="button" onclick="addToList()">-></button></li>';
        }        

        return view('deck',compact('everyCards','deck_cards','deck_name'));
    }

    function modifDeck(){
        $idDeck = $_GET['id_deck'];
        $deck_cards = "";
        $everyCards="";
        $deck_name = "";

        //Get datas from database
        $deckName = DB::table('deck')
            ->select('name')
            ->where('id',$idDeck)
            ->first();

        $deckCards = DB::table('cards')
            ->join('card_types','cards.idType','=','card_types.id')
            ->select('card_types.id','card_types.name')
            ->where('cards.idDeck',$idDeck)
            ->orderBy('id','asc')
            ->get();

        
        $typeCards = DB::table('card_types')
            ->select()
            ->get();
        
        //Display types
        foreach($typeCards as $row){
            $everyCards.='<li class='.$row->id.'>'.$row->name.'<button type="button" onclick="addToList()">-></button></li>';
        }

        //Display cards
        $i=0;
        foreach($deckCards as $row){
            $i++;
            $deck_cards.='<li name="card_'.$i.'" class='.$row->id.'>'.$row->name.'<button type="button" onclick="removeFromList()">X</button></li>';
        }

        //Set deck name
        $deck_name = $deckName->name;        

        return view('deck',compact('everyCards','deck_cards','deck_name'));
    }
}