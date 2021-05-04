<style>
    nav.navbar{
        background-color:  #23272b!important;
        position: fixed;
        width: 100%;
        z-index: 100;
    }
    .navbar-collapse a{
        text-align: right!important;
        color: ;
        font-size: medium!important;
    }
    a.navbar-brand{
        color: deepskyblue!important;
        font-weight: bold!important;
    }
    .navbar .dropdown.show a.notification-button{
        color: dodgerblue!important;
    }
    .notification-icon
    {
        padding: 3px;
    }
    .dropdown-item:hover, a.dropdown-item:hover{
        background: deepskyblue;
    }
    .dropdown-item:active, a.dropdown-item:active{
        background: deepskyblue;
    }
    .search-box{
        background: transparent;
        width: 250px;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        border-right: 0;
    }
    .search-box:focus+.btn-search{
        border-color: dodgerblue;
    }
    .search-box::placeholder{
        color: white;
        opacity: 1;
    }
    .search-box:focus::placeholder{
        color: black;
        opacity: 1;
    }

    .btn-search{
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    

</style>


<nav class="navbar navbar-expand-md navbar-light bg-grey shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                       
                        @guest
                            <li class="nav-item">
                                <a class="navbar-brand" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="navbar-brand" href="{{ route('admin.login') }}">Admin Login</a>
                            </li>
                        @else

                        <div class="nav-item mt-1 mr-3">
                        <form action="#" class="anas d-flex" method="post">
                            @csrf
                            <input class="form-control search-box" type="search" name="string" placeholder="Search Document Here By Doc Name Or User name" aria-label="Search">
                            <button class="btn btn-outline-light btn-search btn-sm" type="submit"><span data-feather="search" class="p-1"></span></button>
                        </form>
                    </div>

                    <!--notification button -->
                    <div class="nav-item dropdown" id="notification">
                        <a class="navbar notification-button" type="button" id="notificationButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                           onclick="#">
                            <span data-feather="bell" class="notification-icon"></span>
                        
                        </a>
                        <div>
                            <div class="dropdown-menu dropdown-menu-right bg-light border-0" aria-labelledby="notificationButton">
                                
                                    <span class="dropdown-item text-light">
                                    
                                    </span>
                                    <hr>
                                
                                <span class="dropdown-item text-light">
                                    <a href="#">see all notifications</a>
                                </span>
                            </div>
                        </div>
                    </div>
                        
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="navbar-brand dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                @auth('admin')
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('admin.profile') }}">
                                    <span data-feather="user" class="p-1"></span>My Account
                                    </a> 
                                   <a class="dropdown-item" href="{{ route('admin.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('admin-logout-form').submit();">
                                                     <span data-feather="power" class="p-1 text-danger"></span>
                                        {{ __('Logout') }}
                                    </a> 

                                    <form id="admin-logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                                @else
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{url('userprofile')}}"> 

                                    <!--<a class="dropdown-item" href="{{ route('admin.profile') }}"> -->
                                    <span data-feather="user" class="p-1"></span>  Profile
                                    </a> 

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <span data-feather="power" class="p-1 text-danger"></span>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                                @endauth
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <script>
    $(document).ready(function(){
        $('#notification').on('hidden.bs.dropdown', function(){
            location.reload();
        });
    });
</script>