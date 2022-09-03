<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>User Management System</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/uikit.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/style.css') }}" />
    </head>
    <body>
        <nav class="uk-navbar-container navbar" uk-navbar>
            <div class="uk-navbar-left">
                <a class="uk-navbar-item uk-logo" href="{{ route('index') }}">UMS</a>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <li>
                        <a href="{{ route('index') }}">Users</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="uk-padding-small">
            @include('includes.messages')
        </div>
        <main>
            @yield('content')
        </main>
        <script src="{{ asset('public/js/uikit.min.js') }}"></script>
        <script src="{{ asset('public/js/uikit-icons.min.js') }}"></script>
    </body>
</html>