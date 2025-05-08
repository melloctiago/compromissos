<form action="{{ route('compromissos.editar') }}" method="post">
    @method('PUT')
    @csrf

    <input type="hidden" name="id" value="{{ $compromisso->id }}">
    <input type="text" name="titulo" placeholder="escreve aqui tua tarefa" value = "{{ $compromisso->titulo }}">
    <input type="datetime-local" name="quando" value = "{{ $compromisso->quando }}">
    <input type="submit" name="Gravar">
    </form>