<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - Sobre Nós</title>
        <meta charset="utf-8">

        <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}">
    </head>

    <body>
    {{-- a função @yield está indicando onde o conteúdo da @sectiion está sendo empurrado (nesse caso está sendo empurrado no body) --}}
        @yield('conteudo')

    </body>
</html>