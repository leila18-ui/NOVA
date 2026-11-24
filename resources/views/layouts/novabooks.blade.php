<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    @yield('styles')


</head>
<body>
    @include('layouts.partials.header')

<main>
    @yield('content')
</main>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', 'NovaBooks')</title>

    <link rel="stylesheet" href="{{ asset('css/header.css') }}">

    @yield('styles')
</head>

<body>

    @include('layouts.partials.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.partials.footer')

</body>
</html>
@include('layouts.partials.footer')
</body>
</html>