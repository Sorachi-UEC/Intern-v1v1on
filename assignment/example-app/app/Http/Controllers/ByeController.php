<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;//インポート:vender/laravel/framework/src/Illuminate
use Illuminate\Support\Facades\Auth;

class ByeController extends Controller
{
    public function message(){
        $msg = 'さようなら';
        $title = 'this is title!';
        $url = 'hello';
        $name = Auth::check() ? Auth::user()->name : 'guest';
        return view('child', ['msg'=>$msg, 'title'=>$title, 'link'=>url($url), 'name'=>$name]);
    }
}
