<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('produtos','App\Http\Controllers\MioController@produtos');
Route::get('nome','App\Http\Controllers\MioController@getnome');
Route::get('idade','App\Http\Controllers\MioController@getidade');
Route::get('multiplicar/{n1}/{n2}','App\Http\Controllers\MioController@multiplicar');

Route::resource('clientes','App\Http\Controllers\ClienteController');


/*
Route::get('/tomatinho/{nome}', function($nome){
    return "Aqui está seu tomatinho, $nome!";
});

Route::get('/abacate/{nome?}', function($nome=null){
    if(isset($nome))
    return "Aqui está seu abacate, $nome!";
    return "O nome não foi digitado!";
});

Route::get('/regrinhas/{nome}/{n}', function($nome, $n){
    for($i=0; $i<$n; $i++)
    echo "Oie $nome, aceita um chocolate? <br>";

})->where('nome','[A-Za-z]+')->where('n','[0-9]+');
 

Route::prefix('/app')->group(function(){

    Route::get('/', function(){
        return view('app');
    })->name('app');

    Route::get('/user', function(){
        return view('user');
    })->name('app.user');

    Route::get('/profile', function(){
        return view("profile");
    })->name('app.profile');
});

Route::get('/produtos',function(){
    echo "<h1>Produtos</h1>";
    echo "<ol>";
    echo "<li>Notebook</li>";
    echo "<li>Impressora</li>";
    echo "<li>Mouse</li>";
    echo "</ol>";
})->name('produtwos');

Route::redirect('/produtomatinho', 'produtos' , 301);

Route::post('/requisicoes',function(Request $request){
    return 'HELLOR POSTR';
});

Route::delete('/requisicoes', function(Request $request){
    return 'HELLOR DELETR';
});

Route::put('/requisicoes', function(Request $request){
    return 'HELLOR PUTR';
});

Route::patch('/requisicoes',function(Request $request){
    return'HELLOR PATCHR';
});

Route::options('/requisicoes',function(Request $request){
    return'HELLOR OPTIONS';
});

Route::get('/requisicoes',function(Request $request){
    return'HELLOR GETR';
});
*/

