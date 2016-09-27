<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
	{
	    protected $table='users';
	    protected $fillable=['id','username','email','password'];

		// public function userNotes(){
	 //        return $this->hasMany(Notes::class,'id');
	 //    }
	}

