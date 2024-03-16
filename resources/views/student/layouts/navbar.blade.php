<nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
    <div class="container">
        <div class="navbar-brand-wrapper d-flex w-100">
            <img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid" width="100">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="mdi mdi-menu navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
            <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
                <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
                    <div class="navbar-collapse-logo">
                        <img src="{{ asset('images/Group2.svg') }}" alt="">
                    </div>
                    <button class="navbar-toggler close-button" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
                    </button>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('book*') ? 'active' : '' }}" href="{{ route('book') }}">Book</a>
                </li>
                <li class="nav-item btn-contact-us pl-4 pl-lg-0">
                    @guest
                        @if (Route::has('login'))
                            <a class="btn btn-success" href="{{ route('login') }}">Login</a>
                        @endif
                    @endguest

                    @auth
                        @if (!auth()->user()->is_admin)
                            <button class="btn btn-info mx-1" data-toggle="modal" data-target="#formModal">Register
                                Member</button>
                        @endif
                        @if (auth()->user()->is_admin)
                            <a href="{{ route('dashboard.index') }}" class="btn btn-dark mx-1">Dashboard</a>
                        @endif
                        <a class="btn btn-danger mx-1" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); if (confirm('Anda ingin logout?')) document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <span class="mx-5 font-weight-semibold">
                            Hi, {{ auth()->user()->name }}
                        </span>
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>
