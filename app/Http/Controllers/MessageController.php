<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function hello()
    {
        return view('messeage.hello');
    }

    public function var() 
    {
        return view('messeage.var', ['variable' => 'Hello from MessageController']);
    }

    public function word ($msg)
    {
        return view('messeage.word',['msg' => $msg]);
    }

    public function word2 ($name, $msg)
    {
        return view('messeage.word2',[
            'msg' => $msg,
            'name' => $name
        ]);
    }
}