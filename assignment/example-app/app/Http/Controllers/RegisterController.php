<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;//インポート:vender/laravel/framework/src/Illuminate

class RegisterController extends Controller
{
    public function message(){
        $msg = 'Reg';
        $title = 'this is title!';
        $url = 'login';

        return view('child', ['msg'=>$msg, 'title'=>$title, 'link'=>url($url)]);
    }
}
