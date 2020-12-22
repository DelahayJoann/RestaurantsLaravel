@extends('layout.app')

@section('title','My first page')

@section('content')
    @foreach($restaurants as $restaurant)
        <h2><a href="/restaurant/show/ {{ $restaurant->id }}">{{ $restaurant->name }} Review: {{ $restaurant->review }}</a></h2>
        <p>{{ $restaurant->adress }} {{ $restaurant->zipCode }} {{ $restaurant->town }} {{ $restaurant->country }}</p>
        <p>{{ $restaurant->description }}</p>
    @endforeach
@endsection