@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Lista di case</h1>

    <ul>
      @foreach ($houses as $house)
        <li>{{ $house->address }} {{ $house->city }}, rating: {{ $house->energy_rating }}</li>
      @endforeach
    </ul>
  </div>
@endsection
