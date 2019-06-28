<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;
class ProfileController extends Controller
{
    public function profile(){
        return view('profile', array('user' => Auth::user()) );
    }
    public function show()
    {
        return view('AdminModif.profile', ['user' => Auth::user()] );
    }
    public function update(Request $request){
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/img/' . $filename ) );
            $user = Auth::user();
            $user->avatar = 'img/' . $filename;
            $user->lastname = $request->lastname;
            $user->firstname = $request->firstname;
            $user->email = $request->email;
            $user->save();
        }
        return redirect('/');
    }
}