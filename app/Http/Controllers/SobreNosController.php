<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function __construct() {
        $this->middleware('log.acesso'); //chamando o middleware pelo seu name;
    }

    public function sobreNos() {
        return view('site.sobre-nos');
    }
}
