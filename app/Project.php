<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [
    	'name',
    	'description',
    	'company_id',
    	'user_id',
    	'days',
    ];
//project belongs to many users ( users()  )
    //many to many relationships
     public function users(){
        return $this->belongsToMany('App\User');
        //or
        //return $this->belongsToMany(User::class);
    }

     public function company(){
        return $this->belongsTo('App\Company');
        //or
        //return $this->belongsTo(Company::class);
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable'); 
    }
}
