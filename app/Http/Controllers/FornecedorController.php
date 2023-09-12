<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1', 
                'status' => 'S',
                'cnpj' => '044444',
                'ddd' => '11', //São paulo (SP)
                'telefone' => '0000-0000',
                'estado' => 'SP'
            ],

            1 => [
                'nome' => 'Fornecedor 2', 
                'status' => 'N',
                'cnpj' => null,
                'ddd' => '85', //Fortaleza (CE)
                'telefone' => '0000-0000',
                'estado' => 'CE'
            ],

            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '32', //Juiz de Fora (MG)
                'telefone' => '0000-0000',
                'estado' => 'MG',
                'serviço' => 'extratos'
            ],

            3 => [
                'nome' => 'Fornecedor 4',
                'status' => 'N',
                'cnpj' => '122323223',
                'ddd' => '81', //Recife (PE)
                'estado' => 'PE',
                'telefone' => '0000-0000'
            ],

            4 => [
                'nome' => 'Fornecedor 5',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => null,
                'telefone' => '0000-0000',
                'estado' => null,
                'serviço' => 'banco'
            ]
        ];

            /* Operador Ternário 
        //condicao ? se verdade : se falso;
        $msg = isset($fornecedores[0]['cnpj']) ? 'CNPJ informado' : 'CNPJ não informado';
        echo $msg;*/
        
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}

?>