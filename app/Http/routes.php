<?php

use App\Post;

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

Route::get('/contact','PostsController@contact');

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

Route::get('/', function(){
	return view('Welcome');
	});

Route::get('/read', function(){
	$posts = Post::all();
	foreach($posts as $Post){
		return $Post->title;
	}
});

Route::get('/find', function(){
	$Post = Post::find(17);
	return $Post->title;
	
});
Route::get('/findwhere', function(){
	$Posts = Post::where('is_admin', 1)->orderBy('id', 'desc')->take(17)->get();
	return $Posts;
	
});

Route::get('/basicinsert', function(){
	$Post = new Post;
	$Post->title = 'New Eloquent Title';
	$Post->content = 'WOw Eloquent is real cool';
	$Post->save();
	
});

Route::get('/create', function(){
	Post::create(['title' => 'create method', 'content' => 'saya belajar banyak hari ini']);
});
	
	
	
	
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
	
	
