<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class post extends Model
{
    //
	use SoftDeletes;
	
	protected $dates = ['deleted_at'];
	
	protected $fillable =[
	'title',
	'content'
	];

public function User(){
	return $this->belongsTo('App\User');
}

public function photos(){
	return $this->morphMany('App\Photo', 'imageable');
}
public function tags(){
	return $this->morphToMany('App\Tag', 'taggable');
	}
public static function scopeLatest($query){
	return $query->orderBy('id', 'desc')->get();
	return $query->orderBy('id', 'desc')->get();
}
}
