<!doctype html>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">
        <meta name="author" content="@yield('author')">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        {{ HTML::style('css/style.css') }}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
    </head>

    <body>
    @include('layouts.menu')
        <div class="container">
            <div class="starter-template">
                @if(Session::has('flash_message'))
                    <?php $flash_message = Session::get('flash_message') ?>
                    <div class="alert alert-success" role="alert">{{ $flash_message }}</div>
                @endif
                @yield('content')
            </div>
        </div><!-- /.container -->
    @yield('script')
    </body>
</html>
