<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Unit;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //'
        $data =[
            'posts' => Post::latest()->get(),
        ];
        return view('webadmin.berita.list-posts')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data=[
            'categories'=>Category::all(),
            'units'=>Unit::all(),
            'users'=>User::all(),
        ];
        return view('webadmin.berita.add-post')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

        ]);

        Post::firstOrCreate([
            'title' => $request->title,
            'slug' => Str::slug($request->title) ,
            'category_id'=> $request->category_id,
            'unit_id'=> $request->unit_id,
            'user_id'=>$request->user_id,
            'excerpt'=>$request->excerpt,
            'body' =>$request->bodycontent,
        ]);
        $request->session()->flash('status', 'Post berhasil ditambahkan');
        // $data =[
        //     'posts' => Post::latest()->get(),
        // ];
        return redirect()->route('webadmin.posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        $data=[
            'post' => Post::findOrFail($post->id),
            'categories'=>Category::all(),
            'units'=>Unit::all(),
            'users'=>User::all(),
        ];
        return view('webadmin.berita.edit-post')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        Post::where('id',$post->id)->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title) ,
            'category_id'=> $request->category_id,
            'unit_id'=> $request->unit_id,
            'user_id'=>$request->user_id,
            'excerpt'=>$request->excerpt,
            'body' =>$request->bodycontent,
        ]);
        // return $request;
        $request->session()->flash('status', 'Post berhasil di update');
        return redirect()->route('webadmin.posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $post = Post::findOrFail($post->id);
        $post->delete();
        request()->session()->flash('status', 'Berita ini telah dihapus!');
        return back();

    }
}
