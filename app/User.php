<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

public function Post(){
	return $this->hasOne('App\Post');
	// hasOne (RELATEMODEL, FOREIGNKEY);
	//RELATEMODEL adalah model yang ingin direlasikan dengan user, yaitu Post
	// secara default FOREIGNKEY adalah MODELNAME_id
	// dalam kasus ini user_id
}

public function posts(){
	return $this->hasMany('App\Post');
}
public function roles(){
	return $this->belongsToMany('App\role')->Pivot('created_at');
	//->withPivot('created_at');
}
public function photos(){
	return $this->morphMany('App\Photo', 'imageable');
}
public function getNameAttribute($value){
	return strtoupper($value);
}

public function setNameAttribute($value){
	$this->attributes['name'] = strtoupper($value);
}
}
