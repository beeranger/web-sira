<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
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
            'users'=>User::all(),
        ];
        return view('webadmin.user.user-list')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=[
            'users'=>User::all(),
        ];
        return view('webadmin.user.user-add')->with($data);
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
            'name' => 'required | string|max:255',
            'username' => 'required |string|max:255|unique:users|alpha_dash',
            'password' => 'required|confirmed|min:5'
        ]);
        $isadmin = $request->is_admin ? 1 : 0;
        User::firstOrCreate([
            'name' => $request->name,
            'username' =>  $request->username,
            'password'=> Hash::make($request->password),
            'is_admin'=> $isadmin,
        ]);
        $request->session()->flash('status', $request->username.' berhasil ditambahkan!');        
        return redirect()->route('webadmin.users-list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $data=[
            'user'=>User::findOrFail($user->id),
        ];
        return view('webadmin.user.user-edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */

    

    public function update(Request $request, User $user)
    {
        if($request->has('reset_password')){
            $this->validate($request,[
                'password' => 'required|min:5'
                ]);
            User::where('id',$user->id)->update([
                'password'=> Hash::make($request->password),
            ]);
            $request->session()->flash('status', $user->username.' password telah di reset ke default password'); 
            return back();
        }elseif($request->has('save')){
            $this->validate($request,[
            'name' => 'required | string|max:255',
            'username' => 'required |string|max:255|alpha_dash',
            // 'password' => 'required|confirmed|min:5'
            ]);
        
            User::where('id',$user->id)->update([
                    'name' => $request->name,
                    'username' =>  $request->username,
                    'is_admin'=> $request->is_admin,
            ]);
            $request->session()->flash('status', $user->username.' data berhasil diperbaharui');        
            return redirect()->route('webadmin.users-list');
        }        
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user = User::findOrFail($user->id);
        $user->delete();
        request()->session()->flash('status', $user->name.' telah dihapus!');
        return back();        
    }

    public function getPassword(User $user)
    {
        $data=[
            'user'=>User::findOrFail($user->id),
        ];
        return view('webadmin.ubah-password')->with($data);
    }
    public function resetPassword(Request $request,User $user)
    {
        $this->validate($request,[
            'password' => 'required|confirmed|min:5'
        ]);
        User::where('id',$user->id)->update([
            'password'=> Hash::make($request->password),
        ]);
        // return $request;
        $request->session()->flash('status','Password untuk '. $request->username.'  berhasil di ganti');        
        return  redirect()->route('webadmin.home');
    }

}
