<aside class="navbar navbar-vertical navbar-expand navbar-dark d-none d-md-block" data-bs-theme="dark" id="adminSideMenu">
    <div class="container-fluid">
        <x-application-logo />
        {{-- <hr class="m-0 white"> --}}
        <div class="collapse navbar-collapse" id="navbar-menu-vertical">
            <ul class="navbar-nav pt-lg-3">
                <li class="nav-item {{ isActiveRoute('home') }}">
                    <a class="nav-link" href="{{ route('home') }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-home i19 nav-link-icon"></i>
                        </span>
                        <span class="nav-link-title">
                            Home
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>
