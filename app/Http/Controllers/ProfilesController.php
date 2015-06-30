<?php

namespace App\Http\Controllers;

use App\User;
use App\post;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class ProfilesController extends Controller
{
    public  function choosePhoto(){
        return view('profile.choose_photo');
    }
    public  function savePhoto(Request $request)
    {

        if ($request->file('image')->isValid()){

            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;

            $request->file('image')->move("uploads/", $fileName);
        }
        $input = $request->all();
        $input["image"] = "/uploads/".$fileName;
        $usuario = Auth::user();
        $usuario->image = "/uploads/".$fileName;;
        $usuario->save();

        return redirect('index');

    }
    public function showProfile($name)
    {
        $user = User::where('name',$name)->first();
        $posts = $user->posts;
        return view('profile.profile', compact('posts','user'));
    }

    public function showIndex()
    {
        $user = Auth::user();
        return view('profile.index', compact('user'));
    }

    public function searchPerson(Request $request)
    {
        $name = Input::get('nombre');
        $users = User::where('name',$name)->get();

        return view('profile.found', compact('users'));

    }

}