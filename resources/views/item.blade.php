<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body class="antialiased">
    <ul>
        <li><a href="{{route('index')}}">HOME</a></li>
        <li><a href="{{route('item')}}">ITEM</a></li>
        <li><a href="{{route('customer')}}">CUSTOMER</a></li>
        <li><a href="{{route('order')}}">ORDER</a></li>
        <li><a href="{{route('orderDetails')}}">ORDER DETAILS</a></li>
    </ul>

    item number <input type="text" value="<?php echo $item_no ?>"><br>
    name <input type="text" value="<?php echo $name ?>"><br>
    price <input type="text" value="<?php echo $price ?>"><br>
</body>

</html>