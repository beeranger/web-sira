<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Unit;
use App\Models\Photo;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Image;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=[
            'photos'=>Photo::latest()->get(),
        ];
        return view('webadmin.galeri.galeri-list')->with($data);
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
        ];
        return view('webadmin.galeri.galeri-create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // GET FILENAME
        $filename_ext = $request->file('imgupload')->getClientOriginalName();
        // GET FILENAME WITHOUT EXTENSION
        $filename = pathinfo($filename_ext, PATHINFO_FILENAME);
        // GET EXTENSION
        $ext = $request->file('imgupload')->getClientOriginalExtension();
        //FILNAME TO STORE
        $imgname = $filename.'_'.time().'.'.$ext;
        // $this->validate($request,[
        //     'category_id'=> 'required',
        //     'unit_id'=> 'required',
        //     'caption'=> 'string|nullable',
        //     'imgupload'=>'required|image|max:5000'
        // ]);
        // $path = Storage::putFileAs('public/galeri/', $request->file('imgupload'),$imgname);
        Storage::disk('public')->putFileAs('galeri/', $request->file('imgupload'),$imgname);

        Photo::firstOrCreate([
            'category_id'=> $request->category_id,
            'unit_id'=> $request->unit_id,
            'caption'=>$request->caption,
            'url' =>$imgname,
        ]);

        
        $request->session()->flash('status', 'Gambar berhasil ditambahkan');
        // $data =[
        //     'posts' => Post::latest()->get(),
        // ];
        return redirect()->route('webadmin.galeri-list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
        $data=[
            'photo' => Photo::findOrFail($photo->id),
            'categories'=>Category::all(),
            'units'=>Unit::all(),

        ];
        return view('webadmin.galeri.galeri-edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {   
        // $this->validate($request,[
        //     'category_id'=> 'required',
        //     'unit_id'=> 'required',
        //     // 'imgupload'=>'required|file|max:10000'
        // ]);
        Photo::where('id',$photo->id)->update([
            'category_id'=> $request->category_id,
            'unit_id'=> $request->unit_id,
            'caption'=>$request->caption
        ]);
        // return $request;
        $request->session()->flash('status', 'Informasi Gambar berhasil di update');
        return redirect()->route('webadmin.galeri-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $photo = Photo::findOrFail($photo->id);
        $photo->delete();
        request()->session()->flash('status', 'Gambar '.$photo->url.' ini telah dihapus!');
        return back();
    }
}
