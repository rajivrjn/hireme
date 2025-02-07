<nav class="navigation">
    <div class="logo">
        <a href="{{ route('home') }}">
            HireMe.mu
        </a>
    </div>
    <div class="navigation-container">
        <ul class="nav-item">
            <li class="nav-list">
                <a href="{{ route('home') }}" class="nav-link @if (Route::currentRouteName() == 'home') selected @endif">Home</a>
            </li>
            <li class="nav-list">
                <a href="{{ route('vacancies') }}"
                    class="nav-link @if (Route::currentRouteName() == 'vacancies') selected @endif">Jobs</a>
            </li>
            <li class="nav-list">
                <a href="{{ route('advice') }}"
                    class="nav-link @if (Route::currentRouteName() == 'advice') selected @endif">Career Advice</a>
            </li>
            <li class="nav-list">
                <a href="{{ route('faq') }}" class="nav-link @if (Route::currentRouteName() == 'faq') selected @endif">FAQ</a>
            </li>
            <li class="nav-list">
                <a href="{{ route('about') }}" class="nav-link @if (Route::currentRouteName() == 'about') selected @endif">About
                    Us</a>
            </li>
            <li class="nav-list">
                <a href="{{ route('contact') }}"
                    class="nav-link @if (Route::currentRouteName() == 'contact') selected @endif">Contact</a>
            </li>
        </ul>
        <div class="auth">
            @if (Auth::check() && Auth::user()->role === 'user')
                <div class="user-login">
                    <div class="user-menu">
                        <img src="{{ Vite::asset('resources/images/user.png') }}" alt="User">
                    </div>
                    <ul class="user-list-menu">
                        <li>
                            <a href="">Dashboard</a>
                        </li>
                        <li>
                            <a href="">Profile</a>
                        </li>
                        <li>
                            <a href="">My Applications</a>
                        </li>
                        <li>
                            <a href="">Logout</a>
                        </li>
                    </ul>
                </div>
            @else
                <a href="" class="nav-link">LOGIN</a>
            @endif
        </div>
    </div>

    <div class="mobile-menu" id="main_menu">
        <svg class="bars" viewBox="0 0 100 100">
            <path class="line top"
                d="m 30,33 h 40 c 13.100415,0 14.380204,31.80258 6.899646,33.421777 -24.612039,5.327373 9.016154,-52.337577 -12.75751,-30.563913 l -28.284272,28.284272">
            </path>
            <path class="line middle"
                d="m 70,50 c 0,0 -32.213436,0 -40,0 -7.786564,0 -6.428571,-4.640244 -6.428571,-8.571429 0,-5.895471 6.073743,-11.783399 12.286435,-5.570707 6.212692,6.212692 28.284272,28.284272 28.284272,28.284272">
            </path>
            <path class="line bottom"
                d="m 69.575405,67.073826 h -40 c -13.100415,0 -14.380204,-31.80258 -6.899646,-33.421777 24.612039,-5.327373 -9.016154,52.337577 12.75751,30.563913 l 28.284272,-28.284272">
            </path>
        </svg>
    </div>
</nav>
