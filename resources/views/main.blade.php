<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>HOMEPAGE</title>
    <link rel="stylesheet" href="/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="gnb-header">
    <ul>
        <li class="<?php echo $url=='home' ? 'active' : ''?>">
            <a href="{{ route('home') }}">Home</a>
        </li>
        <li class="<?php echo $url=='todo' ? 'active' : ''?>">
            <a href="">TO-DO</a>
        </li>
        <li class="<?php echo $url=='lol' ? 'active' : ''?>">
            <a href="">LOL</a>
        </li>
    </ul>
</div>

    @yield('content')

</body>
</html>
