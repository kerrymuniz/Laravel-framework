<h3>Fornecedor</h3>

{{-- Esse é um comentário na sintax blade --}}

@php //-- início bloco php --\\
    /*
    if(isset($variavel)) {} //retornar true se a variável estiver definida
    if(empty($variavel)) {} //retorna true se a variáel estiver vazia
    */
@endphp {{-- fim bloco php --}}

{{-- SINTAX @WHILE --}}
@isset($fornecedores)
    @php $i = 0 @endphp
    @while(isset($fornecedores[$i]))
        Fornecedor : {{ $fornecedores[$i]['nome'] }}
        <br>
        Status : {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? '' }}
        <br>
        TELEFONE: ({{ $fornecedores[$i]['ddd'] ?? '' }}) {{ $fornecedores[$i]['telefone'] ?? '' }}
        <hr>
        @php $i++ @endphp
    @endwhile
@endisset


{{-- SINTAX @FOR
@isset($fornecedores)
    @for($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor : {{ $fornecedores[$i]['nome'] }}
        <br>
        Status : {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? '' }}
        <br>
        TELEFONE: ({{ $fornecedores[$i]['ddd'] ?? '' }}) {{ $fornecedores[$i]['telefone'] ?? '' }}
        <hr>
    @endfor
@endisset --}}



{{-- SINTAX @SWITCH/CASE 
@isset($fornecedores)
Fornecedor : {{ $fornecedores[3]['nome'] }}
<br>
Status : {{ $fornecedores[3]['status'] }}
<br>
CNPJ: {{ $fornecedores[3]['cnpj'] ?? '' }}
<br>
TELEFONE: ({{ $fornecedores[3]['ddd'] ?? '' }}) {{ $fornecedores[3]['telefone'] ?? '' }}
    @switch($fornecedores[3]['ddd'])
        @case ('11')
            São Paulo - SP
            @break
        @case ('85')
            Fortaleza - CE
            @break
        @case ('32')
            Juiz de Fora - MG
            @break
        @case ('81')
            Recife - PE
            @break
        @default
            Estado não informado
    @endswitch 
@endisset --}}


{{-- OPERADOR DEFAULT ?? 
@isset($fornecedores)
Fornecedor : {{ $fornecedores[2]['nome'] }}
<br>
Status : {{ $fornecedores[2]['status'] }}
<br>
Email : {{ $fornecedores[2]['email'] ?? 'Email não existente' }}
@endisset --}}


{{-- SINTAX BLADE @EMPTY
verifica se a variável está vazia ou não
@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj'] }}
        @empty($fornecedores[0]['cnpj'])
            -Vazio
        @endempty
    @endisset
@endisset --}}


{{-- SINTAX BLADE @ISSET
@isset($fornecedores) {{-- verifica se a variável existe ou não
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status'] }}
    <br>
    @if(isset($fornecedores[1]['cnpj']))
        CNPJ: {{ $fornecedores[1]['cnpj'] }}
    @else
        CNPJ: CNPJ não encontrado. Favor providenciar um cnpj o quanto antes possível!
    @endif
@endisset --}}


{{-- SINTAX BLADE @UNLESS
@unless($fornecedores[0]['status'] == 'N')
    <!-- se o retorno da condição for false -->
    Fornecedor Ativo
@endunless --}}

{{-- método que o blade reconhece que a 
variável é do tipo array e imprime na tela 
@dd($fornecedores) --}}


{{-- SINTAX BLADE @IF/@ELSE 
@if(count($fornecedores) > 0 && count($fornecedores) < 10) {
    <h3>Existem alguns usuários cadastrados</h3>
} @elseif(count($fornecedores) > 10) {
    <h3>Existem vários fornecedores cadastrados</h3>
} @else {
    <h3>Ainda não existem fornecedores cadastrados</h3>
}
@endif --}}
