{{ $slot }}
<form action="{{ route('site.contato') }}" method="post">
    @csrf
    <input type="text" name="nome" value="{{ old('nome') }}" placeholder="Nome" class="{{ $classe }}">
    @if ($errors->has('nome')) {{-- verificando se há algum erro no input nome --}}
        {{ $errors->first('nome') }}
    @endif
    <br>
    <input type="text" name="telefone" value="{{ old('telefone') }}" placeholder="Telefone" class="{{ $classe }}">
    @if ($errors->has('telefone')) {{-- verificando se há algum erro no input nome --}}
        {{ $errors->first('telefone') }}
    @endif
    <br>
    <input type="text" name="email" value="{{ old('email') }}" placeholder="E-mail" class="{{ $classe }}">
    @if ($errors->has('email')) {{-- verificando se há algum erro no input nome --}}
        {{ $errors->first('email') }}
    @endif
    <br>

    <select name="motivo_contatos_id" class="{{ $classe }}">
        <option value="">Qual o motivo do contato?</option>

        @foreach ($motivo_contatos as $key => $motivo_contato)
            <option value="{{$motivo_contato->id}}" {{ old('motivo_contatos_id') == $motivo_contato->id ? 'selected' : ''}}>{{$motivo_contato->motivo_contato}}</option>
        @endforeach
    </select>
    @if ($errors->has('motivo_contatos_id')) {{-- verificando se há algum erro no input nome --}}
        {{ $errors->first('motivo_contatos_id') }}
    @endif
    <br>
    <textarea name="mensagem" class="{{ $classe }}"> {{ (old('mensagem') != '') ? old('mensagem') : 'Preencha aqui a sua mensagem' }}
    </textarea>
    @if ($errors->has('mensagem')) {{-- verificando se há algum erro no input nome --}}
        {{ $errors->first('mensagem') }}
    @endif
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>

@if($errors->any()) {{-- o método any() está indicando caso exista algum erro, ai sim o $errors será exibido --}}
    <div style="position:absolute; top:0px; left:0px; width:100%; background:red">
        
        @foreach ($errors->all() as $erro)
            {{ $erro }}
            </br>
        @endforeach

    </div>
@endif