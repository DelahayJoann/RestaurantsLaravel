@extends('layout.app')

@section('title','My first page')

@section('content')
    @foreach($restaurants as $restaurant)
        <h2>{{ $restaurant->name }} Review: {{ $restaurant->review }}</h2>
        <p>{{ $restaurant->adress }} {{ $restaurant->zipCode }} {{ $restaurant->town }} {{ $restaurant->country }}</p>
        <p>{{ $restaurant->description }}</p>
    @endforeach
@endsection