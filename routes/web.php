<?php

use Illuminate\Support\Facades\Route;

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
// Criando uma rota que tem url'/', retornando a view chamada 'welcome'
Route::get('/', function () {
    $nome = 'Vitor';
    $idade = 23;
    $profissao = 'programador';

    $arr = [1,2,3,4,5];
    $nomes = ['Spec','Malvado','Majestic'];

    return view('welcome', 
    [
        'nome' => $nome, 
        'idade' => $idade, 
        'profissao' => $profissao,
        'arr' => $arr,
        'nomes' => $nomes
    ]);
        
}); 

Route::get('/contact', function () {
    return view('contact');
}); 

Route::get('/produtos', function () {
    return view('products');
});
