@extends('layout.app')

@section('title','My first page')

@section('content')
    <form action="/restaurant/create" method="POST">
        {{ csrf_field() }}
        <label for="name">Name: </label>
        <input type="text" name="name" id="name"">
        <label for="address">Address: </label>
        <input type="text" name="address" id="address"">
        <label for="zipCode">Zip Code: </label>
        <input type="number" name="zipCode" id="zipCode"">
        <label for="name">Town: </label>
        <input type="text" name="town" id="town"">
        <label for="name">Country: </label>
        <input type="text" name="country" id="country"">
        <label for="description">Description: </label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
        <label for="review">Review: </label>
        <input type="number" name="review" id="review"">
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection