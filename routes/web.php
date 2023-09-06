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

/*Route::get('/', function () {
    return 'Olá, seja bem-vindo ao curso!';
});*/

Route::get('/', 'PrincipalController@principal');

Route::get('/sobre-nos', 'SobreNosController@sobreNos');

Route::get('/contato', 'ContatoController@contato');

Route::get('/login', function() { return 'Login'; });
Route::get('/clientes', function() { return 'Clientes'; });
Route::get('/fornecedores', function() { return 'Fornecedores'; });
Route::get('/produtos', function() { return 'Produtos'; });



    



/* tratando parâmetros com expressões regulares 

Route::get('/contato/{nome}/{categoria_id}', function(string $nome = 'Desconhecido', int $categoria_id = 1 /* 1 = 'Informação') {
    echo "Estamos aqui: $nome - $categoria_id ";
})->where('categoria_id', '[0-9]+') //tratando os parâmetros, recebendo primeiro qual o parâmetro a ser tradado, e depois a condição (nesse caso está dizendo que deve estar entre 0 e 9 e pelo menos 1 caracter enviado (+));
->where('nome', '[A-Za-z]+'); //tratando os parâmetros, recebendo primeiro qual o parâmetro a ser tradado, e depois a condição (nesse caso está dizendo que deve estar entre A-Z e a-z e pelo menos 1 caracter enviado (+));

*/


/* enviando parâmetro para a rota
    + parâmetro opcional (?)

Route::get('/contato/{nome}/{cat}/{ass}/{msg?}', function(string $nome, string $cat, string $ass, string $msg = 'nao informada') {
echo "Estamos aqui $nome - $cat - $ass - $msg";
});

*/

/* verbo http

get
post
put
patch
delete
options

*/
