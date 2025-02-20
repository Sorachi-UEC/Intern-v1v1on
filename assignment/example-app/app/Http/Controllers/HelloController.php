<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;//インポート:vender/laravel/framework/src/Illuminate

class HelloController extends Controller
{
    public function message(){
        $msg = 'こんにちは';
        $title = 'this is title!';
        $url = 'bye';

        return view('child', ['msg'=>$msg, 'title'=>$title, 'link'=>url($url)]);
    }
}
