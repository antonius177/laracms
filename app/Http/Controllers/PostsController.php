<?php

namespace App\Http\Controllers;

use App\Http\Requests\createPostRequest;
use App\post;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$posts = post::latest();
		return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('Posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createPostRequest $request)
    {
		$input = $request->all();
		
		if($file = $request->file('gambar')){
			$name = $file->getClientOriginalName();
			$file->move('images', $name);
			$input['path'] = $name;
		}
		Post::create($input);
		
		//$file = $request->file('gambar');
		
		//echo $file->getClientOriginalName();
		//echo"<br/>";
		
		//echo $file->getClientSize();
		//echo "<br/>";
		
		//
		//return $request->all();
		//return $request->get('title');
		//return $request->title;
			//$this->validate($request,[
			//'title' => 'required',
			//]);
		
		//cara 1
		//post::create($request->all());
		
		//cara 2
		//$post = new post;
		//$post->title = $request->title;
		//$post->save();
		
		return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
		$post = post::findOrFail($id);
		return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
		$post = post::findOrFail($id);
		return view('posts/edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
		//return $request->all();
		$post = post::findOrFail($id);
		$post->update($request->all());
		return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
		$post = Post::whereId($id)->delete();
		return redirect('/posts');
    }
	public function contact(){
		$people =['anton', 'alex', 'budi', 'chandra', 'dewi', 'putri'];
		return view('contact', compact('people'));
	}
	Public function show_post($id, $name, $password){
		//return view('post')->with('id', $id);
		return view('post', compact('id','name','password'));
	}
}
