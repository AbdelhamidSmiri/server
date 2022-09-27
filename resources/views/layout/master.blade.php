<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','unkonw')</title>
</head>
<body>
    @include('layout.navbar')
    {{-- finma tchof section(content) jib lia dakchi li fiha hna  --}}
    @yield('content')

    @include('layout.sidbar')


</body>
</html>