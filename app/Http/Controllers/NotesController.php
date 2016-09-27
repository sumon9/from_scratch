<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Notes;
use App\Cards;

class NotesController extends Controller
{
   public function store(Request $request,Cards $card)
   {
   	
   	// $add_note  = new Notes;
   	// $add_note->body  = $request->body;
   	// $card->notes()->save($add_note);

   //$card->notes()->create($request->all());
   // $card->notes()->create(
   // 		[
   // 			'body'=>$request->body
   // 		]
   // 	);
   	// $card->notes()->save(
   	//  new Notes(['body'=>$request->body])
   	// );
      $this->validate($request,[
            'body' => 'required|min:6'
         ]);
   	//best way
      $note = new Notes($request->all());
      //$note->user_id = 1;//Auth::id(1);
      //$note>by(Auth::user());
   	$card->addNote($note,2);
   	return back();

   }
   public function edit(Notes $note)
   {
   	return view('notes.edit')->with(compact('note'));
   } 
   
   public function update(Notes $note,Request $request)
   {
   	//return view('notes.edit')->with(compact('note'));
   	return $note->update($request->all());
   	return back();
   }
}
