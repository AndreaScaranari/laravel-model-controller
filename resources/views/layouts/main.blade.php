<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>

    @yield('cdns')

    @vite('resources/js/app.js')
</head>

<body>
    @include('includes.header')

    <main class="container py-3">
        @yield('main-content')
    </main>

    @yield('footer')

    @yield('scripts')
</body>

</html>
