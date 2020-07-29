<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email',
        'password',
        'first_name',
        'middle_name',
        'last_name',
        'city',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //each user belongs to a role
     public function role(){
        return $this->belongsTo('App\Role');
    }

     public function companies(){
        return $this->hasMany('App\Company');
    }

     public function tasks(){
        return $this->belongsToMany('App\Task');
    }

     public function projects(){
        //many to many relationships
        //this means the user can have many projects and project can have many users
        return $this->belongsToMany('App\project');
    }

    public function comments()
    {
        return $this->morphMany('App\comment', 'commentable'); 
    }


}
