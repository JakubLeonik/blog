<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ url('css/style.css') }}">
    </head>
    <body class="min-vh-100 d-flex flex-column justify-content-between">
        @include('layouts.navbar')
        <main class="col-12 w-100 h-100 d-flex justify-content-center align-items-top">
            <div class="content conteiner-fluid col-10 h-100 mx-auto my-2 p-5">
                @include('layouts.errors')
                @yield('content')
            </div>
        </main>
        <footer class="text-center w-100 p-4">
            &copy 2022 Jakub Leonik
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>