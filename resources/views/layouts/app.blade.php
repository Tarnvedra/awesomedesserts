<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Agnieszka's Awesome Deserts</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
       <link href="css/aad.css" rel="stylesheet">
    </head>
    <body>
        <header>
            @include('include/header')
        </header>

        <main role="main">
            @yield('content')
        </main>
        <footer>
          @include('include/footer')
        </footer>

    </body>
</html>
