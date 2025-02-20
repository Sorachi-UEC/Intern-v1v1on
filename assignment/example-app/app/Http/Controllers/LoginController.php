<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;//インポート:vender/laravel/framework/src/Illuminate

class LoginController extends Controller
{
    public function message(){
        $msg = 'Login';
        $title = 'this is title!';
        $url = 'register';

        return view('child', ['msg'=>$msg, 'title'=>$title, 'link'=>url($url)]);
    }
}
