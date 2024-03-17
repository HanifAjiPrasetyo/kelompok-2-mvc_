<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-primary sidebar collapse mt-3 fs-5">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="monitor"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/member*') ? 'active' : '' }}" href="">
                    <span data-feather="file-text" class="text-dark"></span>
                    Member
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/buku*') ? 'active' : '' }}"
                    href="{{ route('book.index') }}">
                    <span data-feather="file-text" class="text-dark"></span>
                    Buku
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/peminjaman*') ? 'active' : '' }}" href="">
                    <span data-feather="file-text" class="text-dark"></span>
                    Peminjaman
                </a>
            </li>
        </ul>

        <ul class="nav flex-column mt-3">
            <li class="nav-item mb-3">
                <a class="nav-link small fw-bold" href="/">
                    <span data-feather="arrow-left" class="text-dark"></span>
                    Back to Home
                </a>
            </li>
        </ul>
    </div>

</nav>
