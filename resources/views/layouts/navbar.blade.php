<div class="container">
    <div class="site-navigation">
        <a href="/" class="logo m-0">Tour <span class="text-primary">.</span></a>

        <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
            <li class="{{ Request::is('home') ? 'active' : '' }}"><a href="/home">Home</a></li>

            {{-- <li class="has-children">
                <a href="#">Dropdown</a>
                <ul class="dropdown">
                    <li><a href="elements.html">Elements</a></li>
                    <li><a href="#">Menu One</a></li>
                    <li class="has-children">
                        <a href="#">Menu Two</a>
                        <ul class="dropdown">
                            <li><a href="#">Sub Menu One</a></li>
                            <li><a href="#">Sub Menu Two</a></li>
                            <li><a href="#">Sub Menu Three</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Menu Three</a></li>
                </ul>
            </li>--}}

            <li class="{{ Request::is('service') ? 'active' : '' }}"><a href="/service">Services</a></li>
            <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="/about">About</a></li>
            <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="/contact">Contact Us</a></li>
            <li class="{{ Request::is('login') ? 'active' : '' }}"><a href="/login">Login</a></li>
        </ul>

        <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light"
            data-toggle="collapse" data-target="#main-navbar">
            <span></span>
        </a>
    </div>
</div>
