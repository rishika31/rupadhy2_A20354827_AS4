@extends('layouts.master')

@section('title', 'Welcome')

@section('sidebar')
    @parent
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Wedding Registry</a>
            </div>
            <div class="nav navbar-nav navbar-right">
                <li><a href="auth/login">Login</a></li>
                <li><a href="auth/register">Register</a></li>
            </div>
        </div>
    </nav>
@endsection

@section('content')
    <div style="font-family: Lato; font-size: 96px; margin: 0; padding:0; width:100%; display: table; font-weight: 100">Welcome!</div>
@stop
