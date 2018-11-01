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
            ->select('name')
            ->where('idUser','=',Auth::user()->id)
            ->get();


        $decklist='<ul>';
        forEach($result as $row){
            $decklist.='<li><a href="route("deck")">'.$row->name.'</a></li>';            
        }
        $decklist.='</ul>';

        return view('decklist',compact('decklist'));
    }
}
