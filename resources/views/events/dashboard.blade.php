@extends('layouts.main')
@section('title', 'DashBoard')
@section('content')

    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>Meus Eventos</h1>
    </div>

    <div class="col-md-10 offset-md-1 dashboard-events-container">
        @if (count((array)$events) > 0)

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Participantes</th>
                    <th scope="col">Acções</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($events as $event)
                    <tr>
                        <td scope="row">{{$loop->index + 1}}</td>
                        <td><a href="/events/{{$event->id}}">{{$event->title}}</a></td>
                        <td>0</td>
                    <td class="fle">
                        <a href="/events/edit/{{$event->id}}" class="btn btn-info edit-btn"><i class="fa fa-edit"></i>Editar</a>
                        <form action="/events/{{$event->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn"><i class="fa fa-trash"></i>
                                Excluir
                            </button>
                        </form>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
            
        @else
            <p>Você não tem nenhum evento Criado, <a href="/events/create">Criar Evento</a></p>
        @endif
    </div>
    
@endsection