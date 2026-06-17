<aside class="navbar navbar-vertical navbar-expand navbar-dark" data-bs-theme="dark" id="adminSideMenu">
    <div class="container-fluid">
        <h1 class="navbar-brand navbar-brand-autodark py-4">
            <a href="/">
                <img src="{{ asset(isset($siteSettings) && isset($siteSettings['logo_big']) ? getImageUrl($siteSettings['logo_big'], 'images/logo.png') : 'images/logo.png') }}"
                    alt="{{ config('app.name') }}" class="navbar-brand-image full-logo">
                <img src="{{ asset(isset($siteSettings) && isset($siteSettings['logo_small']) ? getImageUrl($siteSettings['logo_small'], 'images/logo_small.png') : 'images/logo_small.png') }}"
                    alt="{{ config('app.name') }}" class="navbar-brand-image small-logo">
            </a>
        </h1>
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
