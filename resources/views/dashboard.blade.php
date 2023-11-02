@extends('layouts.main')
@section('title', 'DsahBoard')
@section('content')

    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>Meus Eventos</h1>
    </div>

    <div class="col-md-10 offset-md-1 dasboard-events-container">
        @if (count($events) > 0)
            
        @else
            <p>Você não tem nenhum evento Criado, <a href="/events/create">Criar Evento</a></p>
        @endif
    </div>
    
@endsection