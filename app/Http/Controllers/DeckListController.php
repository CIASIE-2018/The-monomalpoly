<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DeckListController extends Controller
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
    public function getDecklist()
    {
        //Get datas from database
        $result = DB::table('deck')
            ->select()
            ->where('idUser','=',Auth::user()->id)
            ->get();        

        $decklist='<ul class="deck-list">';
        forEach($result as $row){
            if($row->activ==0){
                $decklist.='<li id='.$row->id.' class="item">'.$row->name.'<div><button onclick="window.location.href=\'\'">Utiliser</button><button>Modifier</button><button>Supprimer</button><div></li>';
            }else{
                $decklist.='<li id='.$row->id.' class="item">'.$row->name.'<div><button>Modifier</button><button>Supprimer</button><div></li>';
            }
        }
        $decklist.='</ul>';

        return view('decklist',compact('decklist'));
    }

    public function createDeck(Request $request){
        //Stock creation
        $idDeck = DB::table('deck')
            ->insertGetId(['id'=>'0','name'=>$request->get('deck_name'),'idUser'=>Auth::user()->id,'activ'=>0]);

        //Insert cards
        DB::table('cards')
            ->insert([
                ['id'=>'0','idType'=>$request->get('type_card_1'),'idDeck'=>$idDeck],
                ['id'=>'0','idType'=>$request->get('type_card_2'),'idDeck'=>$idDeck],
                ['id'=>'0','idType'=>$request->get('type_card_3'),'idDeck'=>$idDeck]
            ]);        
        return redirect('decklist');
    }

    public function setActiv(Request $request){
        //Reset activ
        DB::table('deck')
            ->where('activ',1)
            ->update(['activ',0]);
        
        $idDeck = $request->get("id_deck");

        //Set activ
        DB::table('deck')
            ->where('id',$idDeck)
            ->update(['activ'=>1]);
    }
}