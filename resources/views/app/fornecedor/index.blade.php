<h3>Fornecedor</h3>

{{-- Esse é um comentário na sintax blade --}}

{{-- a tag @ na frente do conteúdo serve para viizualizar os códigos e não interpretá-los 
@isset($fornecedores)
    @for($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: @{{ $fornecedores[$i]['nome'] }}
        <br>
        Status: @{{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: @{{ $fornecedores[$i]['cnpj'] ?? 'não informado' }}
        <br>
        TELEFONE: @({{ $fornecedores[$i]['ddd'] ?? '?' }}) @{{ $fornecedores[$i]['telefone'] ?? 'não informado' }}
        <br>
        SERVIÇO: @{{ $fornecedores[$i]['serviço'] ?? 'não informado' }}
        <br>
        <hr>
    @endfor
@endisset --}}


{{-- bloco php --}}
@php
    /*
    if(isset($variavel)) {} //retornar true se a variável estiver definida
    if(empty($variavel)) {} //retorna true se a variáel estiver vazia
    */
@endphp



{{-- SINTAX FORELSE - forma bem enxuta de desviar o código para o bloco empty caso a variável array esteja vazia 
    + Variiável loop-> variável de consulta (ex.: primeiro registro, qntd. de registros/iteraações, etc.) 
@isset($fornecedores)
    
    @forelse($fornecedores as $indice => $fornecedor)
        @dd($loop)

        Iteração atual: {{ $loop->iteration }}
        <br>
        Fornecedor : {{ $fornecedor['nome'] }}
        <br>
        Status : {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'cnpj não informado' }}
        <br>
        TELEFONE: ({{ $fornecedor['ddd'] ?? '?' }}) {{ $fornecedor['telefone'] ?? '' }} -
        {{ $fornecedor['estado'] ?? 'Estado não informado' }}
        <br>
        SERVIÇO: {{ $fornecedor['serviço'] ?? 'serviço não informado' }}
        <br>
        @if($loop->first)
            Primeira iteração do Loop
        @endif

        @if($loop->last)
            Última iteração do Loop
            <hr>
            <br>
            Total de registros: {{ $loop->count }}
        @endif
        <hr>
        @empty
        Não existem fornecedores cadastrados!!!
    @endforelse

@endisset --}}


{{-- SINTAX FOREACH 
@isset($fornecedores)
    @foreach($fornecedores as $indice => $fornecedor)
        Fornecedor : {{ $fornecedor['nome'] }}
        <br>
        Status : {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        <br>
        TELEFONE: ({{ $fornecedor['ddd'] ?? '?' }}) {{ $fornecedor['telefone'] ?? '' }} -
        {{ $fornecedor['estado'] ?? 'Estado não informado' }}
        <br>
        SERVIÇO: {{ $fornecedor['serviço'] ?? 'serviço não informado' }}
        <hr>
    @endforeach
@endisset --}}


{{-- SINTAX @WHILE 
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
@endisset --}}



{{-- PRATICA SWITCH, WHILE, FOR
@isset($fornecedores)
    @php $i = 0 @endphp
    @while(isset($fornecedores[$i]))
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'cnpj não informado' }}
        <br>
            @switch($fornecedores[$i]['ddd'])
                @case ('11')
                    TELEFONE: ({{ $fornecedores[$i]['ddd'] ?? '?' }}) 
                    {{ $fornecedores[$i]['telefone'] ?? 'telefone não informado' }} -
                    {{ $fornecedores[$i]['estado'] ?? ' - Estado não informado' }}
                    @break
                @case ('85')
                    TELEFONE: ({{ $fornecedores[$i]['ddd'] ?? '?' }}) 
                    {{ $fornecedores[$i]['telefone'] ?? 'telefone não informado' }} -
                    {{ $fornecedores[$i]['estado'] ?? ' - Estado não informado' }}
                    @break
                @case ('32')
                    TELEFONE: ({{ $fornecedores[$i]['ddd'] ?? '?' }}) 
                    {{ $fornecedores[$i]['telefone'] ?? 'telefone não informado' }} -
                    {{ $fornecedores[$i]['estado'] ?? ' - Estado não informado' }}
                    @break
                @case ('81')
                    TELEFONE: ({{ $fornecedores[$i]['ddd'] ?? '?' }}) 
                    {{ $fornecedores[$i]['telefone'] ?? 'telefone não informado' }} -
                    {{ $fornecedores[$i]['estado'] ?? ' - Estado não informado' }}
                    @break
                @case ('')
                    TELEFONE: ({{ $fornecedores[$i]['ddd'] ?? '?' }}) 
                    {{ $fornecedores[$i]['telefone'] ?? 'telefone não informado' }} 
                    {{ $fornecedores[$i]['estado'] ?? ' - Estado não informado' }}
                    @break
            @endswitch
        <br>
        SERVIÇO: {{ $fornecedores[$i]['serviço'] ?? 'serviço não informado' }}
        @php $i++ @endphp
        <hr>
    @endwhile
@endisset --}}



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
