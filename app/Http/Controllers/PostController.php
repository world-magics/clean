<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;



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

        // $newPost=new Post();
        // $newPost->title='new post3';
        // $newPost->content='new content';
        // $newPost->short_content='new showrt content';
        // $newPost->photo='/storage/new_post.png';
        // $newPost->save();
        // return 'succes';
        // // $posts=Post::where('title','clean code')->first();
        // // dd($posts);


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
            // Post::withTrashed()->find(1)->restore();

        // return 'success';
        // $posts=Post::find(1);
        // dd($posts);


        //     'content'=>'content123',
        //     'photo'=>'photo.jpg'
        // ]);

        // $post=Post::find(2);
        // $post->title='new 2023.18:511';
        // $post->update();
        // return view('posts.index');

            // $post=DB::table('posts')->get()->pluck('short_content');
            // $post=DB::table('posts')->WhereIn('id',[2,3])->get();
            // $post=DB::table('posts')->insert([
            //     'title'=>'123title',
            //     'short_content'=>'123short',
            //     'content'=>'123Content',
            //     'photo'=>'123photo'
            // ]);
            // dd($post);
            // $post=DB::table('posts')->where('id',3)->get()->dd();
            // return 'success';
            $posts=Post::all();
            return view('posts.index')->with('posts',$posts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $path=$request->file('photo')->store('post-photos');
        // $path=$request->file('photo')->store('post-photos');
        // $path=$request->file('photo')->store('post-photos');
        // $path=$request->file('photo')->store('post-photo');
        $post=Post::create([
            'title'=>$request->title,
            'short_content'=>$request->short_content,
            'content'=>$request->content,
            'photo'=>$path,
            
        ]);
        return redirect()->to('post.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show')->with([
            'post'=>$post,
            'recent_posts'=>Post::latest()->get()->except($post->id)->take(7),
                                        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post, $id)
    {
        return view('post.edit',$post->id);
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response

     */
    public function destroy($id)
    {

    }

}
