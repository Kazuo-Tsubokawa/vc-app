<?php

use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/route/hello', function () { 
    return '<h1>Hello from Route!<h1>';
});

Route::get('/view/hello', function() {
    return view('messeage.hello');
});

Route::get('/view/var', function(){
    
    return view('messeage.var', ['variable' => 'Hello from wed.php']);
});

Route::get('/view/word/{msg}', function($msg){
    return view('messeage.word',['msg' => $msg]);
});

Route::get('/view/word2/{name}/{msg}', function($name, $msg){
    return view('messeage.word2',[
        'name' => $name,
        'msg' => $msg
    ]);
});