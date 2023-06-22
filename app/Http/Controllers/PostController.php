<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $newPost=new Post;
        // $newPost->title='new post';
        // $newPost->short_content=' new post short content';
        // $newPost->content='new post content';

        // $newPost->save();

        // $newPost=Post::create([
        //     'title'=>'5',
        //     'short_content'=>'short',
        //     'content'=>'content 123',
        //     'photo'=>'avatar.png'
        // ]); post yaratsh
            // $post=Post::find(2);
            // $post->title="uzgartirildi text";
            // $post->save();
            // Post::destroy(1);
            Post::withTrashed()->find(1)->restore();

        return 'success';
        // $posts=Post::find(1);
        // dd($posts);
        // return view('posts.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    }
}
