<nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ route('home') }}">
            <img src="{{ asset('images/advanced_blog_logo.png') }}" alt="AdvancedBlogLaravelTutorial Logo"
                 width="250" height="28">
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
           data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-10">Learn</a>
            <a href="#" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
            <a href="#" class="navbar-item is-tab is-hidden-mobile">Share</a>
        </div>

        <div class="navbar-end">
            @if(Auth::guest())
                <div class="navbar-item">
                    <div class="buttons">
                        <a href="{{ route('login') }}" class="button is-success">Login</a>
                        <a href="{{ route('register') }}" class="button is-light">Join the Community</a>
                    </div>
                </div>
            @else
                <button class="dropdown navbar-item is-tab is-aligned-right">
                    Hey {{ Auth::user()->name }}
                    <span class="icon"><i class="fa fa-caret-down"></i></span>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">
                                <span class="icon"><i class="fa fa-fw m-r-5 fa-user-circle-o"></i></span>
                                Profile
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon"><i class="fa fa-fw m-r-5 fa-bell"></i></span>
                                Notifications
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('manage.dashboard') }}">
                                <span class="icon"><i class="fa fa-fw m-r-5 fa-cog"></i></span>
                                Manage
                            </a>
                        </li>
                        <li class="separator"></li>
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <span class="icon"><i class="fa fa-fw m-r-5 fa-sign-out"></i></span>
                                Logout
                            </a>
                            @include('_includes.forms.logout')
                        </li>
                    </ul>
                </button>
            @endif
        </div>
    </div>
</nav>