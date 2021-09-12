<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Unit;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title ='';
        if (request('category')){
            $category = Category::firstWhere('slug',request('category'));
            $title =' by '. $category->name;
        }
        if (request('unit')){
            $unit = Unit::firstWhere('slug',request('unit'));
            $title =' in '. $unit->name;
        }
        return view('posts',[
            "title"=>"All Posts" . $title,//
            "posts" => Post::latest()->filter(request(['category','unit']))->paginate(10)->withQueryString(),
        ]);
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
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        return view('post',[
            "post"=>$post
        ]);
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
    }

    public function unitSekolah(Unit $unit) {
        return view('unit',[
            'posts' => $unit->posts->load('unit','category'),
            'unit'=>$unit,
        ]);
    }

    public function home(){
        $data =[
            'posts' =>Post::latest()->get(),
        ];
        return view('home')->with($data);
        // return $data;
    }

    public function about(){
        return view('about');
    }
}
