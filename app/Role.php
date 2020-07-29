<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
     protected $fillable = [
    	'name',
    	
    ];
     
     //Each role has many user
     public function users(){
        return &this->hasMany('App\User');
    }
}
