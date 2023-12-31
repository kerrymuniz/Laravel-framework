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

Route::get('/', 'PrincipalController@principal')->name('site.index')->middleware('log.acesso');

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@salvar')->name('site.contato');

Route::get('/login/{erro?}', 'LoginController@index')->name('site.login');
Route::post('/login', 'LoginController@autenticar')->name('site.login');


//criando um prefixo para agrupar as rotas;
Route::middleware('autenticacao:padrao, visitante')->prefix('/app')->group(function () {
    Route::get('/home', 'HomeController@index')->name('app.home');
    Route::get('/sair', 'LoginController@sair')->name('app.sair');
    Route::get('/cliente', 'ClienteController@index')->name('app.cliente');
    Route::get('/fornecedor', 'FornecedorController@index')->name('app.fornecedor');
    Route::get('/produto', 'ProdutoController@index')->name('app.produto');

});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');
Route::get('/teste1/{par1}/{par2}', 'Teste1Controller@teste1')->name('teste1');

//redirecionando rotas (redirect);
    /*
    Route::get('/rota2', function() {
        return redirect()->route('site.rota1');
    })->name('site.rota2');

    Route::get('/rota3', function() {
        return redirect()->route('site.rota1');
    })->name('site.rota3');*/
    //Route::redirect('/rota2', '/rota1');

//criando rota de fallback;
Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir para a página inicial!';
});



    



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
