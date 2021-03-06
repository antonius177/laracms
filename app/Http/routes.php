<?php

use App\Post;
use App\User;
use App\country;
use App\photo;
use App\Tag;
use App\Video;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
    //return view('welcome');
//	return "Hi Guys...";
//});
//Route::get('/contoh', function () {
 //   return view('welcome');
//});
//Route::get('/admin/post', function () {
 //   return "admin is here.";
//});
//Route::get('/about', function () {
 //   return "Hi about page.";
//});

//Route::get('/contact','PostsController@contact');

//Route::get('/post/{id}', function ($id) {
 //   return "This is post number. " .$id;
//});
//Route::get('/post/{id}/{name}', function ($id, $name) {
 //   return "This is post number. " .$id ." ".$name;
//});
//Route::get('admin/post/example', array('as'=>'admin.home', function(){
//	$url = route('admin.home');
 //   return "this url iis:". $url;
//}));
//Route::get('/post/{id}', 'PostsController@index');

//Route::resource('posts','PostsController');
//Route::get('/contact', 'PostsController@contact');
//Route::get('post/{id}/{name}/{password}', 'PostsController@show_post');

//Route::get('/', function(){
//	return view('Welcome');
//	});

//Route::get('/read', function(){
//	$posts = Post::all();
	//foreach($posts as $Post){
	//	return $Post->title;
	//}
//});

//Route::get('/find', function(){
	//$Post = Post::find(17);
	//return $Post->title;
	
//});
//Route::get('/findwhere', function(){
//	$Posts = Post::where('is_admin', 1)->orderBy('id', 'desc')->take(17)->get();
//	return $Posts;
	
//});

//Route::get('/basicinsert', function(){
//	$Post = new Post;
	//$Post->title = 'New Eloquent Title';
//	$Post->content = 'WOw Eloquent is real cool';
	//$Post->save();
	//});

//Route::get('/create', function(){
	//Post::create(['title' => 'create method', 'content' => 'saya belajar banyak hari ini']);
//});

//Route::get('/basicupdate', function(){
	//$Post = Post::find(17);
	
//	$Post->title = 'updated Eloquent title';
	//$Post->content = 'Updated Eloquent content';
	
	//$Post->save();
//});

//Route::get('/update', function(){
	//Post::where('id', 18)->where('is_admin',0)->update(['title' => 'new php title', //'content' => ' i love learning laravel']);
//});
//Route::get('/delete', function(){
	//$Post = Post::find(17);
	//$Post->delete();
//});
//Route::get('/delete2', function(){
	//Post::destroy(18,17);
//});
//Route::get('/delete3', function(){
	//Post::where('is_admin', 0)->delete();
//});
//Route::get('/softdelete', function(){
	//Post::find(20)->delete();
//});
//Route::get('/readsoftdelete', function(){
	//$Post = Post::find(20);
//	return $Post;
	//$Post = Post::withTrashed()->where('id',20)->get();
	//return $Post;
	//$Post = Post::withTrashed()->get();
	//return $Post;
//	$Post = Post::onlyTrashed()->get();
	//return $Post;
//});

//Route::get('/restore', function(){
	//Post::withTrashed()->where('id',20)->restore();
//});
//Route::get('/forcedelete', function(){
	//Post::onlyTrashed()->where('is_admin',0)->forcedelete();
//});

/*
-----------------------------------------------------
Eloquent Relationships
----------------------------------------------------
*/
//one to one Relationships

//Route::get('User/{id}/Post', function($id){
//	return User::find($id)->Post->title;
//});
//Route::get('Post/{id}/User', function($id){
//	return Post::find($id)->User->name;
//});

//Route::get('/Posts', function(){
	//$user = user :: find(1);
	
	//foreach($user->posts as $post){
		//echo $post->title;
	//}
//});

//Route::get('user/Pivot', function(){
	//$user = User::find(1);
	
//	foreach($user->roles as $role){
		//echo $role->Pivot->created_at;
	//}
//});

//Route::get('user/Pivot', function(){
	//$user = User::find(1);
	
	//foreach($user->roles as $role){
		//echo $role->Pivot->created_at;
		//echo $role->Pivot->created_at;
	//}
//});
//Route::get('/user/country', function (){
	//$country = Country::find(6);
	
	//foreach($country->posts as $Post){
		//return $Post->title;
		
	//}
//});

//Route::get('/post/photos', function(){
	//$post = Post::find(1);
	
	//foreach($post->photos as $photo){
		//return $photo->path;
	//}
//});
//Route::get('/user/photos', function(){
	//$user = User::find(1);
	//foreach($user->photos as $photo){
		//return $photo->path;
	//}
//});

//Route::get('photo/{id}/post', function($id){
	//	$Photo = Photo::findOrFail($id);
		//return $Photo->imageable;
	//});

//Route::get('/post/tag', function (){ 
	//$Post = Post::find(1);
	//foreach($Post->tags as $Tag){
		//echo $Tag->name;
	//}
//});

//Route::get('/tag/post', function(){
	//$Tag = Tag:: find(1);
	//foreach($Tag->Posts as $Post){
		//echo $Post->title;
	//}
//});
	
//Route::get('/user/{id}/role', function ($id){
	//$user = User::find($id)->roles()->orderBy('id', 'desc')->get();
	//return $user;
	//foreach($user->roles as $role){
		//return $role->name;
	//}
//});
	
	
/*
-----------------------------------------------------
DATABASE raw SQL Queries
-----------------------------------------------------
*/
//Route::get('/insert', function(){
	//DB::insert("INSERT INTO posts(title, content) values(?,?)",
	//['PHP with Laravel', 'Laravel is the Best Thing that happen to PHP']);
	//});

//Route::get('/read', function(){
	//	$results = DB::select("SELECT * FROM  posts WHERE id = ?",[1]);
		//foreach($results as $post){
			//return $post->title;
		//}
		//return $results;
//});
//Route::get('/update', function(){
	//	$update = DB::update("UPDATE posts SET title = 'update title' WHERE id =?",[1]);
	//	return $update;
//	});
	
//Route::get('/delete', function(){
//		$delete = DB::delete("DELETE FROM posts WHERE id =?",[1]);
//		return $delete;
//	});	

/*
|---------------------------------------------------------------------------------------------| CRUD Appications
|---------------------------------------------------------------------------------------------
*/

Route::resource('/posts', 'PostsController');
//Route::resource('/Posts', 'PostsController');
	
Route::get('/dates', function(){
	$date = new DateTime('+1 week');
	echo $date->format('m-d-y');
	
	echo "<br/>";
	echo Carbon::now();
	
	echo "<br/>";
	echo Carbon::now()->diffForHumans();
	
	echo "<br/>";
	echo Carbon::now()->addDays(10)->diffForHumans();
	
	echo "<br/>";
	echo Carbon::now()->subMonths(5)->diffForHumans();
	
	echo "<br/>";
	echo Carbon::now()->yesterday()->diffForHumans();
});

Route::get('/getname', function(){
	$user = User::find(1);
	
	return "Mr. " . $user->name;
});

Route::get('/setname', function(){
	$user = User::find(1);
	$user->name="antonius wiryadinata";
	$user->save();
	});