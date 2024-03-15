<header class="navbar navbar-dark bg-dark sticky-top flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-4 fw-bold text-info" href="/">Kelompok2Aly</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control w-100 rounded-0 border-0 bg-transparent" type="text" placeholder="" aria-label="Search" disabled />
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            @auth
                <a href="{{ route('logout') }}" class="btn btn-danger nav-link px-3 border-0 fw-bold pt-3 pb-3 rounded-0" onclick="event.preventDefault(); if (confirm('Anda ingin logout?')) document.getElementById('logout-form').submit();">
                    LOGOUT <span data-feather="log-out"></span></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endauth
        </div>
    </div>
</header>
