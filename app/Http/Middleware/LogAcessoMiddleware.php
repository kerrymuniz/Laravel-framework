<?php

namespace App\Http\Middleware;

use Closure;
use App\LogAcesso;

class LogAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $ip = $request->server->get('REMOTE_ADDR'); //recuperando o ip da requisição
        $rota = $request->getRequestUri(); //recuperando a rota da requisição
        LogAcesso::create(['log' => "IP $ip requisitou a rota $rota"]);

        //return $next($request); //variável que empurra uma requisição do middleware para outra;

        $resposta = $next($request);
        return $resposta;
        //dd($resposta);
    }
}
