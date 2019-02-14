<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome to HackerPair</title>
    {!! HTML::style('css/app.css') !!}
</head>
<body>
    <div>
        @yield('content')
    </div>
    <div>
        @section('advertisement')
            <p>
                Score some HackerPair swag in our store!
            </p>
        @show
    </div>
</body>
</html>