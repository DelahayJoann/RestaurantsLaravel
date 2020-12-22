@extends('layout.app')

@section('title','My first page')

@section('content')
        <h2>{{ $restaurant->name }} Review: {{ $restaurant->review }}</h2>
        <p>{{ $restaurant->adress }} {{ $restaurant->zipCode }} {{ $restaurant->town }} {{ $restaurant->country }}</p>
        <p>{{ $restaurant->description }}</p>
        <p><a href="/" class="btn btn-primary">Retour</a></p>
        <p><a href="/restaurant/edit/{{ $restaurant->id }}" class="btn btn-primary">Edit</a></p>
        <p><form action="/restaurant/destroy/{{ $restaurant->id }}" method="POST"> {{ method_field('DELETE') }} {{ csrf_field()}}<button type="submit" class="btn btn-primary">Delete</button></form></p>
@endsection