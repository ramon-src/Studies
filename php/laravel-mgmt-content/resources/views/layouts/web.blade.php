<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Aerovale</title>

    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body >
<div id="web">
@inject('pageGen', 'App\Services\PageGenService')
@include('layouts/web/navbar')

<div class="header-background">
    <div class="container">
        <div class="page-title">
            <h1><i class="fa fa-{{$pageGen->getInfoFromPage(url()->current())['symbol']}}"></i>{{$pageGen->getInfoFromPage(url()->current())['title']}}</h1>
        </div>
    </div>
</div>

<section class="container">
    @yield('content')
</section>

</div>

<footer class="footer">
    @include('layouts/web/footer')
</footer>
<script src="{{ elixir('js/app.js') }}"></script>
@yield('script')
</body>
</html>
