<!-- resources/views/items/index.blade.php -->

@extends('layouts.items')

@section('content')
    <h1>List of Items</h1>
    <!-- Display Validation Errors -->
    @include('common.errors')
    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Description</td>
            <td>Price</td>
            <td>Quantity</td>
            <td></td>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->description }}</td>
                <td>{{ $value->price }}</td>
                <td>{{ $value->quantity }}</td>
                <td>
                    <!-- delete the item (uses the destroy method DESTROY /items/{id} -->
                    {!! Form::open(array('url' => 'items/' . $value->id, 'class' => 'pull-right')) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::submit('Delete', array('class' => 'btn btn-warning')) !!}
                    {!! Form::close() !!}

                    <!-- show the item (uses the show method found at GET /items/{id} -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('items/' . $value->id) }}">View</a>

                    <!-- edit this item (uses the edit method found at GET /items/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('items/' . $value->id . '/edit') }}">Edit</a>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection