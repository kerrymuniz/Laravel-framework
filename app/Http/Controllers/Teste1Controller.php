<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Teste1Controller extends Controller
{
    public function teste1(int $par1, int $par2) {
        //echo "Esse é o $par1 e o $par2";

        //encaminhando parmts. para a view:
        
        //array associativo
        //return view('site.teste1', ['par1' => $par1, 'par2' => $par2]);
    
        //método compact()
        //return view('site.teste1', compact('par1', 'par2'));
        
        //método with()
        return view('site.teste1')->with('par1', $par1)->with('par2', $par2);
    }
}
