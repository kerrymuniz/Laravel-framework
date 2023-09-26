<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request) {

        /*echo '<pre>';
        print_r($request->all());
        echo '</pre>';
        echo $request->input('nome');
        echo '<br>';
        echo $request->input('email');
        */

        /*$contato = new SiteContato(); //instância da classe SiteContato() do model SiteContato;
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');
        

        //print_r($contato->getAttributes());
        $contato->save();*/

        //outra forma de salvar os dados do formulário no banco de dados;
        //$contato->create($request->all()); //criando uma $request para assim salvar os dados do formulário no banco;

        $motivo_contatos = MotivoContato::all();
        return view('site.contato', ['titulo' => 'Contato (teste)', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request) {

        //realiziar a valdação dos dados do formulário recebidos no request
        $request->validate([ //para isso se usa o método validate([]) recebenndo como parmt array assoc com os campos a serem validados;
            //o required é um dos tipos de validação, isso significa que esse campo deve ser obrigatoriamente preenchido;
            'nome' => 'required|min:3|max:40|unique:site_contatos', //nomes com no mínimo 3 caracteres e no máximo 40 e deixando único;
            'telefone' => 'required',
            'email' => 'email', //validando email;
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000' //mensagem pode ter no máximo 2000 caracteres;
        ]);
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
