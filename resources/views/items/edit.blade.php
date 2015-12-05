<!-- resources/views/items/edit.blade.php -->

@extends('layouts.items')

@section('content')

    <h1>Edit {{ $item->description }}</h1>

    {!! Form::model($item, array('route' => array('items.update', $item->id), 'method' => 'PUT')) !!}

    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::text('description', null, array('class' => 'form-control')) !!}
    </div>

    {!! Form::submit('Update', array('class' => 'btn btn-primary')) !!}

    {!! Form::close() !!}
@endsection