@extends('layout.app')

@section('title','My first page')

@section('content')
    <form action="/restaurant/edit/{{$restaurant->id}}" method="POST">
        {{ csrf_field()}}
        {{ method_field('PATCH') }}
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" value="{{ $restaurant->name }}">
        @if($errors->has('name'))
            <small class="error">{{ $errors->first('name') }}</small>
        @endif

        <label for="address">Address: </label>
        <input type="text" name="address" id="address" value="{{ $restaurant->address }}">
        @if($errors->has('address'))
            <small class="error">{{ $errors->first('address') }}</small>
        @endif

        <label for="zipCode">Zip Code: </label>
        <input type="number" name="zipCode" id="zipCode" value="{{ $restaurant->zipCode }}">
        @if($errors->has('zipCode'))
            <small class="error">{{ $errors->first('zipCode') }}</small>
        @endif

        <label for="name">Town: </label>
        <input type="text" name="town" id="town" value="{{ $restaurant->town }}">
        @if($errors->has('town'))
            <small class="error">{{ $errors->first('town') }}</small>
        @endif

        <label for="name">Country: </label>
        <input type="text" name="country" id="country" value="{{ $restaurant->country }}">
        @if($errors->has('country'))
            <small class="error">{{ $errors->first('country') }}</small>
        @endif

        <label for="description">Description: </label>
        <textarea name="description" id="description" cols="30" rows="10">{{ $restaurant->description }}</textarea>
        @if($errors->has('description'))
            <small class="error">{{ $errors->first('description') }}</small>
        @endif

        <label for="review">Review: </label>
        <input type="number" name="review" id="review" value="{{ $restaurant->review }}">
        @if($errors->has('review'))
            <small class="error">{{ $errors->first('review') }}</small>
        @endif
        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection