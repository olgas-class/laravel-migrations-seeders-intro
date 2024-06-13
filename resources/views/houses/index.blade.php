@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Lista di case</h1>

    <ul>
      @foreach ($houses as $house)
        <li>
          <a href="{{ route('houses.show', ['house' => $house->id]) }}">
            {{ $house->address }} {{ $house->city }}, rating: {{ $house->energy_rating }}
          </a>
        </li>
      @endforeach
    </ul>
  </div>
@endsection
