<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
    protected $table='card';
    protected $fillable=['id','title'];

    public function notes(){
        return $this->hasMany(Notes::class,'card_id');
    }
    
    public function path(){
    	return '/cards/'.$this->id;
    }
    
    public function addNote(Notes $note,$userId){
        $note->user_id = $userId;
    	return $this->notes()->save($note);
    }
}
