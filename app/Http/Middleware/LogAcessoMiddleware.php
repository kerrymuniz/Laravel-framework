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
        //$request - manipular
        //return $next($request);

        $ip = $request->server->get('REMOTE_ADDR'); //recuperando o ip da requisição
        $rota = $request->getRequestUri(); //recuperando a rota da requisição
        LogAcesso::create(['log' => "IP $ip requisitou a rota $rota"]);

        return Response('Chegamos no middleware e finalizamos no próprio middleware');
    }
}
