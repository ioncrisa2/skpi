<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login SKPI</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" crossorigin="anonymous">
    </script>
    <style>
        .auth-body {
            background-image: url("{{ asset('background.jpg') }}");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-color: #f0f0f0;
        }
    </style>
</head>

<body class="auth-body">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                @yield('content')
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="footer-admin mt-auto footer-dark">
                <div class="container-xl px-4">
                    <div class="row">
                        <div class="col-md-6 small">SMK Methodist 2 Palembang &copy; {{ date('Y') }}</div>
                        <div class="col-md-6 text-md-end small">
                            <a href="https://github.com/ioncrisa2/skpi"><i class="fa-brands fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
