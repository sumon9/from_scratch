<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cards;
use App\Users;



class CardController extends Controller
{
    public function index(){
    	$cards = Cards::all();
     return view('cards.index')->with(compact('cards'))	;
    }

    public function show(Cards $card){
    	//$card = Cards::find($cards);
    	//$card = Cards::with('notes.users')->get();
    	
    	$card->load('notes.users');
    	// return $card;
     return view('cards.show',compact('card'));
    }
}
