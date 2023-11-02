@extends('layouts.main')
@section('title', 'EditarEvento')
@section('content')
<section id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{$event->title}}</h1>
    <form action="/events/update/{{$event->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image">Imagem do evento</label>
            <input type="file" class="form-control-file" id="image" name="image">
            <img src="/img/events/{{$event->image}}" alt="" class="img-preview">
        </div>

        <div class="form-group">
            <label for="title">Evento</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Insira o nome do evento..." value="{{$event->title}}">
        </div>

        <div class="form-group">
            <label for="title">Lema</label>
            <input type="text" class="form-control" id="dono" name="dono" placeholder="Responsavel do evento...">
        </div>

        <div class="form-group">
            <label for="date">Data do Evento</label>
            <input type="date" class="form-control" id="date" name="date" value="{{$event->date->format('Y,m,d')}}">
        </div>

        <div class="form-group">
            <label for="title">Local</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Insira o local do evento..." value="{{$event->city}}">
        </div>

        <div class="form-group">
            <label for="title">O evento é privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="Privado">Privado</option>
                <option value="Público" {{$event->private == 'Público' ? "selected = 'selected'" : ""}}>Público</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="title">Descrição</label>
            <textarea name="description" id="descricao" class="form-control" placeholder="Escreva aqui alguns detalhes sobre o seu evento...">{{$event->description}}</textarea>
        </div>

        <div class="form-group">
            <label for="title">Adicione itens de infraestrutura</label>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Cadeiras"> Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Palco"> Palco
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Lanche"> Lanche
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Brindes"> Brindes
            </div>
        </div>

        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</section>
@endsection