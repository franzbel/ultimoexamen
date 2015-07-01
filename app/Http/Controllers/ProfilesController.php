<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
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
        $mas_frecuentes = $this->countWords();
        return view('profile.profile', compact('posts','user','mas_frecuentes'));
    }

    public function showIndex()
    {
        $user = Auth::user();
        $mas_frecuentes = $this->countWords();
        return view('profile.index', compact('user', 'mas_frecuentes'));
    }

    public function searchPerson(Request $request)
    {
        $name = Input::get('nombre');
        $users = User::where('name','LIKE',"%$name%")->get();

        return view('profile.found', compact('users'));

    }
    public function searchComment(Request $request)
    {
        $word = Input::get('palabra');
//        dd($name);
        $posts = Post::where('body','LIKE',"%$word%")->get();
        return view('profile.found_comments', compact('posts'));

    }

    protected function countWords(){
         $post = null;
        $array[] = " ";
        foreach(Post::all() as $post){
             $array[] = $post->body;
        }

        array_walk($array, create_function('&$i,$k','$i=" $k=\"$i\"";'));
        $p_string = implode($array,"");


        $freqData = array();
        foreach( str_word_count( $post, 1 ) as $words ){

            array_key_exists( $words, $freqData ) ? $freqData[ $words ]++ : $freqData[ $words ] = 1;
        }
        $list = '';
        arsort($freqData);
        foreach ($freqData as $word=>$count){
            if ($count > 2){
                $list .= "$word ";
            }
        }
        if (empty($list)){
            $list = "No existen suficientes palabras duplicadas para determinar popularidad";
        }

        return($list);
    }

//    EXAMEN************************************************************************************************************
    public function cambiarPais()
    {
        $id_nuevo_pais = Input::get('country');
        $user = Auth::user();
        $user->country_id = $id_nuevo_pais;
        $user->save();
        return (redirect()->back());
    }

//    EXAMEN************************************************************************************************************

}


