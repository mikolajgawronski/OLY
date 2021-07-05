<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <html lang="{{ app()->getLocale() }}">

     {!! SEOMeta::generate() !!}
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{URL::asset('custom.css')}}" rel="stylesheet">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                OLY
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="/posts">{{__('mesages.ads')}}</a></li>
                <li><a href="/o_nas">{{__('mesages.about')}}</a></li>
                <li><a href="/regulamin">{{__('mesages.regulations')}}</a></li>
                <li><a href="/kontakt">{{__('mesages.Contact')}}</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                    <li><a href="{{ url('locale/en') }}" ><i class="fa fa-language"></i> EN </a></li>
                    <li><a href="{{ url('locale/pl') }}" ><i class="fa fa-language"></i> PL </a></li>
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">{{__('mesages.login')}}</a></li>
                    <li><a href="{{ url('/register') }}">{{__('mesages.register')}}</a></li>
                @else
                <li><a href="{{ url('/posts/own') }}">{{__('mesages.myAds')}}</a></li>
                <li><a href="{{ url('/posts/create') }}">{{__('mesages.addAds')}}</a></li>                
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>



                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<!-- wrapper -->
<div class="site-wrappper">

    <!-- .container -->
    <div class="container site-content">
        @yield('content')
    </div><!-- end of .container -->

</div><!-- end of wrapper -->


<!-- Footer -->
<footer class="site-footer">
    <div class="container">
    
        <p>&copy; Krawętek Zym Gawroński</p>

    </div>
</footer>

<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
