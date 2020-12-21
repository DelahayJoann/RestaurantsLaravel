@extends('layout.app')

@section('title','My first page')

@section('content')
        <h2>{{ $restaurant->name }} Review: {{ $restaurant->review }}</h2>
        <p>{{ $restaurant->adress }} {{ $restaurant->zipCode }} {{ $restaurant->town }} {{ $restaurant->country }}</p>
        <p>{{ $restaurant->description }}</p> 
@endsection