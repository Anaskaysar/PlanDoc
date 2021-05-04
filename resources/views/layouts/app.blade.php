<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('js/feather.min.js') }}"></script>
        <script src="{{ asset('js/particles.js') }}"></script>
        <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
        <script src="{{ asset('js/ckeditor/adapters/jquery.js') }}"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            html, body, th {
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;
            }
            @if(Auth::guard('admin')->check())
            .content-wrapper{
                padding-top: 35px;
            /* Space for fixed navbar */
                padding-left: 200px;
            }
            @else
            .content-wrapper{
                padding-top: 35px;
                /* Space for fixed navbar */
            }
            @endif
            .btn.btn-light{
                background-color: lightgray;
            }
            .btn.btn-light:hover{
                background-color: lightgray;
            }
        </style>
        @yield('styles')
    </head>
    <body>

    <div id="app">
        @include('layouts.navbar')

        @auth


            @if(Auth::guard('admin')->check())
                @include('Admin.admin-sidebar')

            @else
                @if(auth()->user()->is_manager)
                    @include('Manager.sidebar')
                @else
                    @include('User.sidebar')
                @endif


            @endif


        @endauth
        <main class="pt-4">
            <div class="content-wrapper">
                @yield('content')
            </div>
        </main>
    </div>
    </body>

    <script>
        feather.replace();
        Array.from(document.querySelectorAll('svg.feather[title]')).forEach((element) => {
            element.insertAdjacentHTML('afterbegin', `<title>${element.attributes.title.value}</title>`);
        });
    </script>
    <script type="text/javascript">
        $('textarea.editor').ckeditor();
    </script>
    <script type="text/javascript">
        $(function (){
            $("[data-toggle=popover]").popover();
        });
    </script>
    @yield('scripts')
</html>
