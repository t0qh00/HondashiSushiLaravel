<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <link rel="shortcut icon" type="image/png" href="{{ asset('/img/favicon.png') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>@yield('title', 'HondashiSushi')</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/material-kit.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/Animate.css') }}" rel="stylesheet"/>

	@yield('styles')

</head>

<body class="@yield('body-class')">
	<nav class="navbar navbar-transparent navbar-absolute">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="{{url('/')}}">Inicio</a>
        	</div>

        	<div class="collapse navbar-collapse" id="navigation-example">
        		<ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/sanramon') }}">San Ramón</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/palmares') }}">Palmares</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/menu') }}">Menú</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/menupromos') }}">Menú de ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/galeria') }}">Galería</a>
                    </li>
                @guest
                            {{--@if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                                </li>
                            @endif--}}
                        @else
                            <li class="dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
								<ul class="dropdown-menu" role="menu">
									{{--<li>
										<a href="{{url('/home')}}">Dashboard</a>
									</li>--}}
									@if(auth()->user()->admin)
									{{--<li>
										<a href="{{url('/admin/categories')}}">Gestionar imagenes</a>
									</li>
									<li>
										<a href="{{url('/admin/products')}}">Gestionar productos</a>
									</li>--}}
									@endif

                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
								</ul>
                            </li>
                        @endguest
        		</ul>
        	</div>
    	</div>

    </nav>
	<div class="wrapper custom-main-background">
        @yield('content')
    </div>



</body>
	<!--   Core JS Files   -->
	<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/material.min.js') }}" type="text/javascript"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="{{ asset('js/nouislider.min.js') }}" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="{{ asset('js/bootstrap-datepicker.js') }}" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="{{ asset('js/material-kit.js') }}" type="text/javascript"></script>
	@yield('scripts')
</html>

