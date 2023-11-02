@extends('layouts.main')
@section('title', $event->title)

@section('content')
    <section class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{ $event-> image}}" alt="{{$event->title}}" class="image-fluid">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{$event->title}}</h1>
                <p class="event-city"><i class="fa fa-location-arrow"></i>Localidade: {{$event->city}} </p>
                <p class="events-participants"><i class="icon-copy fa fa-users" aria-hidden="true"></i>{{$event->participant}}Participantes</p>
                <p class="events-participants"><i class="icon-copy fa fa-calendar" aria-hidden="true"></i>Data do evento: {{date('d/m/Y', strtotime($event->date))}}</p>
                <p class="events-participants"><i class="icon-copy fa fa-star" aria-hidden="true"></i>Status: {{$event->private}}</p>
                <p class="events-participants"> <i class="icon-copy fa fa-user-circle-o" aria-hidden="true"></i>Dono do Evento: {{$eventOwner['name']}}</p>
                <a href="" class="btn btn-primary" id="event-submit">Confirmar Presença</a>

                <h3>O Evento Conta Com:</h3>
                <ul id="itens-list">
                    @foreach ($event->itens as $item)
                        <li><i class="icon-copy fa fa-check" aria-hidden="true"></i><span>{{ $item }}</span></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-12" id="descricao-container">
                <h3 class="evento"><i class="icon-copy fa fa-book" aria-hidden="true"></i>Sobre o Evento</h3>
                <p class="event-descricao">{{$event->description}}</p>
            </div>
        </div>
    </section>
@endsection