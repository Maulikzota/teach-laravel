<!DOCTYPE html>
<html>
<head>
    <title>Laravel Blogger - @yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
    <ul class="nav nav-pills">
        <li role="presentation" class="active"><a href="/">Home</a></li>
        <li role="presentation"><a href="{{ action('ArticlesController@index') }}">Articles</a></li>
        <li role="presentation"><a href="{{ action('PagesController@about') }}">About</a></li>
        <li role="presentation"><a href="{{ action('PagesController@contact') }}">Contact</a></li>
    </ul>
    </div>
</nav>
<hr/>

<div class="container">

    @yield('content')

</div>


</body>
</html>