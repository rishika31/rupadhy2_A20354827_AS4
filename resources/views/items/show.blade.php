<!-- resources/views/items/show.blade.php -->

@extends('layouts.items')

@section('content')

<h1>Showing {{ $item->description }}</h1>

<div class="jumbotron text-center">
    <h2>{{ $item->description }}</h2>
    <p>
        <strong>ID:</strong> {{ $item->id }}<br>
        <strong>Description:</strong> {{ $item->description }}<br>
        <strong>Price:</strong> {{ $item->price }}<br>
        <strong>Quantity:</strong> {{ $item->quantity }}
    </p>
</div>

@endsection