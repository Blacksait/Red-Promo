<!doctype html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <title>Hireo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/colors/blue.css') }}" rel="stylesheet">
</head>
<body>
<!-- Wrapper -->
<div id="wrapper">
    <!-- Header Container
    ================================================== -->
    <header id="header-container" class="fullwidth">
        <!-- Header -->
        <div id="header">
            <div class="container">
                <!-- Left Side Content -->
                <div class="left-side">
                    <!-- Logo -->
                    <div id="logo">

                        <a href="/"><img src="{{ asset('images/logo.png') }}" alt=""></a>
                    </div>
                    <!-- Main Navigation -->
                    <nav id="navigation">
                        <ul id="responsive">
                            <li><a href="/">Рекомендуемые Новости</a></li>
                            <li><a href="/articles">Все Новости</a></li>
                        </ul>
                    </nav>
                    <div class="clearfix"></div>
                    <!-- Main Navigation / End -->
                </div>
                <!-- Left Side Content / End -->
                <!-- Right Side Content / End -->
                <div class="right-side">
                    <!-- User Menu -->
                    <div class="header-widget">
                        <div class="header-notifications user-menu">
                            <!-- Authentication Links -->
                            @guest
                                <ul class="navbar-nav ml-auto" style="list-style: none">
                                    <li class="nav-item">
                                        <a class="alink" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="alink" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                </ul>
                            @endif
                            @else
                                <div class="header-notifications-trigger">
                                    <a href="/home">{{ Auth::user()->name }}</a>
                                </div>
                                <!-- Dropdown -->
                                <div class="header-notifications-dropdown">
                                    <!-- User Status -->
                                    <ul class="user-menu-small-nav">
                                        <li><a href="/home"><i class="icon-material-outline-dashboard"></i>Избранные новости</a></li>
                                        <li>
                                            <a class="dropdown-item"  href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                                <i class="icon-material-outline-power-settings-new"></i>
                                                Выйти
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>

                                    </ul>
                                </div>
                            @endguest
                        </div>
                    </div>
                    <!-- User Menu / End -->
                </div>
                <!-- Right Side Content / End -->
            </div>
        </div>
        <!-- Header / End -->

    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->

    @yield('content')

    <!-- Footer
    ================================================== -->
    <div id="footer">
        <!-- Footer Top Section -->
        <div class="footer-top-section">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- Footer Rows Container -->
                        <div class="footer-rows-container">
                            <!-- Left Side -->
                            <div class="footer-rows-left">
                                <div class="footer-row">
                                    <div class="footer-row-inner footer-logo">
                                        <img src="{{ asset('images/logo2.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Footer Rows Container / End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer / End -->

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script src="{{ asset('js/jquery-3.4.1.min.js') }}" defer></script>
<script src="{{ asset('js/jquery-migrate-3.1.0.min.js') }}" defer></script>
<script src="{{ asset('js/mmenu.min.js') }}" defer></script>
<script src="{{ asset('js/tippy.all.min.js') }}" defer></script>
<script src="{{ asset('js/simplebar.min.js') }}" defer></script>
<script src="{{ asset('js/bootstrap-slider.min.js') }}" defer></script>
<script src="{{ asset('js/bootstrap-select.min.js') }}" defer></script>
<script src="{{ asset('js/snackbar.js') }}" defer></script>
<script src="{{ asset('js/clipboard.min.js') }}" defer></script>
<script src="{{ asset('js/counterup.min.js') }}" defer></script>
<script src="{{ asset('js/magnific-popup.min.js') }}" defer></script>
<script src="{{ asset('js/slick.min.js') }}" defer></script>
<script src="{{ asset('js/custom.js') }}" defer></script>
<script src="{{ asset('js/snackbar-user-status.js') }}" defer></script>
<script src="{{ asset('js/google-autocomplete.js') }}" defer></script>

<script>
    // Snackbar for user status switcher
    $('#snackbar-user-status label').click(function() {
        Snackbar.show({
            text: 'Your status has been changed!',
            pos: 'bottom-center',
            showAction: false,
            actionText: "Dismiss",
            duration: 3000,
            textColor: '#fff',
            backgroundColor: '#383838'
        });
    });
</script>




<!-- Google API -->
<script src="{{ asset('https://maps.googleapis.com/maps/api/js?key=&libraries=places&callback=initAutocomplete') }}" defer></script>

</body>
</html>
