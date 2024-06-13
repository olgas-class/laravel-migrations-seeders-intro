@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Dettagli della casa {{ $house->id }}</h1>
    <h4>Indirizzo</h4>
    <p>{{ $house->address }}, {{ $house->city }} {{ $house->state }}</p>

    <h4>Dettagli</h4>
    <p>{{ $house->square_meters }} mq, {{ $house->rooms_number }} stanze</p>

    <h4>Descrizione</h4>
    <p>{{ $house->description }}</p>

    <h4>Prezzo</h4>
    <p>{{ $house->price }} €</p>
  </div>
@endsection
