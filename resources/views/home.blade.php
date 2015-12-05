@extends('layouts.master')

@section('title', 'Wedding Registry')

@section('sidebar')
    @parent
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Wedding Registry</a>
            </div>
            <div class="nav navbar-nav navbar-right">
                <li><a href="home">Home</a></li>
                <li><a href="items">Items</a></li>
                <li><a href="auth/logout">Logout</a></li>
            </div>
        </div>
    </nav>
@endsection

@section('content')
    <div style="font-family: Lato; font-size: 18px; margin: 0; padding:0; width:100%; display: table; font-weight: 100">Welcome to your Wedding Registry</div>

@stop