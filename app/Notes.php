<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    protected $table='note';
    protected $fillable=['body','user_id','card_id'];

    public function by(Users $users){
    	$this->user_id = $user->id;
    }
    public function cards(){
    	return $this->belongsTo(Cards::class,'id');
    }
    public function users(){

    	return $this->belongsTo(Users::class,'user_id');
    }
}
