<h1> Lista de compromissos</h1>
<hr>
@if($errors->any())
    <h3 style="color:red">Erro!</h3>
    <ul>
        @foreach ($errors->all() as $erro)
            <li>{{ $erro }}</li>
        @endforeach
    </ul>
@endif
<form action="{{ route('compromissos.salvar') }}" method="post">
    @csrf
    <input type="text" name="titulo" value ="{{ old('titulo') }}"placeholder="escreve aqui tua tarefa">
    <input type="datetime-local" value ="{{ old('quando') }}" name="quando">
    <input type="submit" name="Gravar">
    </form>
<hr>
Sua Lista:
<ul>
    @foreach($compromissos as $comp)
    <li>{{$comp->titulo}} ({{ $comp->quando }}) |
   <a href="{{ route('compromissos.editarporid', $comp->id) }}">Editar</a></li>
   <form action="{{ route('compromissos.apagar') }}" method="post">
    @csrf
    @method('DELETE')
    <input type="hidden" name="id" value="{{ $comp-> id }}">
    <input type="submit" value="Apagar">
</form>
    @endforeach
</ul>