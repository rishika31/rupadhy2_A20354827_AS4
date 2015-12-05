<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
    @section('sidebar')
        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ URL::to('home') }}">Home</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('items') }}">Items</a></li>
                <li><a href="{{ URL::to('items/create') }}">New Item</a></li>
                <li><a href="auth/logout">Logout</a></li>
            </ul>
        </nav>
    @show
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
