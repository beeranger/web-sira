<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data= ['categories'=>Category::all()];
        return view('webadmin.tag.tag-category')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('webadmin.tag.tag-category-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Category::firstOrCreate([
            'name' => $request->name,
            'slug' => Str::slug($request->name) ,            
        ]);
        // return $request;
        $request->session()->flash('status', 'Post berhasil di tambahkan');
        return redirect()->route('webadmin.tag-category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $data=[
            'category' => Category::findOrFail($category->id),            
        ];
        return view('webadmin.tag.tag-category-edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        Category::where('id',$category->id)->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name) ,            
        ]);
        // return $request;
        $request->session()->flash('status', 'Post berhasil di update');
        return redirect()->route('webadmin.tag-category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $category = Category::findOrFail($category->id);
        $category->delete();
        request()->session()->flash('status', 'Kategori ini telah dihapus!');
        return redirect()->route('webadmin.tag-category');
        
    }
}
