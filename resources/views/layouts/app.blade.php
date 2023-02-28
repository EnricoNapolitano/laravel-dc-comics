<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <title>{{ env('APP_NAME') }}</title>
    @yield('cdns')
    @vite('resources/js/app.js')
</head>
<body>

    <!-- ***HEADER*** -->
    @include('includes.header')

    <!-- ***JUMBOTRON*** -->
    <section id="main-jumbo">
        <figure>
            <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron">
        </figure>
    </section>

    <!-- ***MAIN*** -->
    <main class="bg-secondary">
        @yield('content')
    </main>

    <!-- ***FOOTER*** -->
    @include('includes.footer')

    @yield('scripts')

</body>
</html>