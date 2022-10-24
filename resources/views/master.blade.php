<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/website/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/website/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('/website/css/style.css') }}">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">Logo</a>
        <ul class="navbar-nav">
            <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
            <li><a href="{{ route('blog.add') }}" class="nav-link">Add blog</a></li>
            <li><a href="{{ route('blog.manage') }}" class="nav-link">Manage blog</a></li>
        </ul>
    </div>
</nav>


@yield('body')

<script src="{{ asset('/website/js/bootstrap.bundle.js') }}"></script>
</body>
</html>
