<h3>Fornecedor</h3>

{{-- Esse é um comentário na sintax blade --}}

@php //-- início bloco php --\\
    /*
    if() {

    } elseif() {

    } else {

    }
    */
@endphp {{-- fim bloco php --}}

{{-- método que o blade reconhece que a 
variável é do tipo array e imprime na tela --}}
@dd($fornecedores)

@if(count($fornecedores) > 0 && count($fornecedores) < 10) {
    <h3>Existem alguns usuários cadastrados</h3>
} @elseif(count($fornecedores) > 10) {
    <h3>Existem vários fornecedores cadastrados</h3>
} @else {
    <h3>Ainda não existem fornecedores cadastrados</h3>
}
@endif
