<header class="header">
        <h2 class="header__slogan">We Make Your Feel Comfortable</h2>
        <div class="header__navbar">
            <div class="header__navbar-menu-icon" id="menu-icon">
                <img src="{{ asset('icons/navHambur.png') }}" alt="Menu" id="menu-toggle-icon">
            </div>
            <div class="header__navbar-logo">
                <p class="header__navbar-logo-start">H</p>
                <div class="header__navbar-logo-text">
                    <span class="header__navbar-logo-text-top">HOTEL</span>
                    <span class="header__navbar-logo-text-bottom">MIRANDA</span>
                </div>
            </div>
            <div class="header__navbar-icons">
                <img src="{{ asset('icons/userlog.png') }}" alt="Login" class="header__navbar-icons-icon">
            </div>
            <div class="header__navbar-icons">
                <img src="{{ asset('icons/search.png') }}" alt="Search" class="header__navbar-icons-icon">
            </div>
            <nav class="header__navbar-dropdown" id="dropdown-menu">
                <ul>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('rooms') }}">Rooms</a></li>
                <li><a href="{{ route('offerts') }}">Offers</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>