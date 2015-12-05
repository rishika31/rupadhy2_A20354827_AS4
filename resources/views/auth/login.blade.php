<!-- resources/views/auth/login.blade.php -->

@extends('layouts.master')

@section('title', 'Login')

@section('sidebar')
    @parent
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Login</a>
            </div>
        </div>
    </nav>
@endsection

@section('content')
<!-- Display Validation Errors -->
@include('common.errors')
<form class="form-horizontal" role="form" method="POST" action="login">
    {!! csrf_field() !!}

    <div class="form-group">
        <label class="col-md-4 control-label">Email</label>
        <div class="col-md-6">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">Password</label>
        <div class="col-md-6">
            <input type="password" class="form-control" name="password" id="password">
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <input type="checkbox" name="remember"> Remember Me
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </div>
</form>

@stop