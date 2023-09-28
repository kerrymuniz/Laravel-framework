<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\LogAcessoMiddleware;

class SobreNosController extends Controller
{
    public function __construct(){ //adicionando o middleware diretamente no construtor de um controlador;
        $this->middleware(LogAcessoMiddleware::class);
    }

    public function sobreNos() {
        return view('site.sobre-nos');
    }
}
