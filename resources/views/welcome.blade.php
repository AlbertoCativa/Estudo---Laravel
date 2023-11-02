@extends('layouts.main')
@section('title', 'BootCampEventos')
@section('content')

<section id="search-container" class="col-md-12">
    <h1>Pesquise por um Evento</h1>
    <form action="/" method="GET">
      <input type="text" id="search" name="search" class="form-control" placeholder="Procure aqui um evento...">
    </form>
  </section>

  <section id="events-container" class="col-md-12">
    <h2>Eventos a Seguir</h2>
    <p class="subtitle">Estes são os eventos dos proximos dias</p>
    <div id="cards-container" class="row">
        @foreach ($events as $event)
        <div class="card col-md-3">
          <img src="/img/events/{{ $event->image}}" alt="{{$event->title}}">
          <div class="card-body">
            <p class="card-date">{{date('d/m/Y', strtotime($event->date))}}</p>
            <h5 class="card-title">{{$event->title}}</h5>
            <p class="card-participants">{{$event->participant}} Participantes</p>
            <p class="card-participants">Lema {{$event->dono}}</p>
            <a href="/events/{{ $event->id}}" class="btn btn-primary">Saber Mais</a>
          </div>
        </div>
    @endforeach
    @if (count($events) == 0)
        <p>Não há eventos disponiveis</p>
    @endif
          </div>
@endsection