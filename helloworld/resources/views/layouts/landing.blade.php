<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>
        @yield('title')
    </title>
</head>

<body>
    @include('layouts._partials.menu')
    @yield('content')
    @yield('scripts')
</body>

</html>
