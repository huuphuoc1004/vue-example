<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <example-component></example-component><hr>
        <conditional-rendering></conditional-rendering><hr>
        <list-rendering></list-rendering><hr>
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
