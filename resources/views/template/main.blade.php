<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Aplikasi SKPI - Dashboard</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
        <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" crossorigin="anonymous"></script>
        <style>
            .nav-link{
                border: none;
                background: none;
                font-size: inherit;
                font-family: inherit;
                cursor: pointer;
            }
        </style>
    </head>
    <body class="nav-fixed">
        @include('template.partials.header')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include('template.partials.sidebar')
            </div>
            <div id="layoutSidenav_content">
                <main>
                    @yield('content')
                </main>

                @include('template.partials.footer')

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>
