<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Plan Doc') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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