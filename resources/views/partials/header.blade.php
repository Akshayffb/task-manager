<header class="navbar  navbar-light  d-print-none">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="side-menu" data-bs-target="#adminSideMenu">
            <span class="navbar-toggler-icon"></span>
        </button>


        {{--        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3 py-0 me-3"> --}}
        {{--            <a href="/home"> --}}
        {{--                <img src="{{asset('images/logo_black.png')}}" width="100" alt="{{config("app.name")}}" --}}
        {{--                     class="navbar-brand-image-horizontal"> --}}
        {{--            </a> --}}
        {{--        </h1> --}}

        <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item dropdown action-dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                    aria-label="Open user menu">
                    <img class="avatar avatar-sm avatar-rounded"
                        src="{{ Auth::user()->avatar ? asset(Auth::user()->avatar) : asset('images/default_avatar.png') }}"
                        alt="User Image" />
                    <div class="d-none d-sm-block ps-2">
                        <div>{{ getFullName() }} </div>
                        {{-- <div class="mt-1 small text-muted">{{ Auth::user()->roles[0]->name }}</div> --}}
                    </div>
                    <i class="fas fa-caret-down ms-2 profile-down-indicator "></i>

                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    {{-- <a href="{{ route('profile.detail') }}" class="dropdown-item">Update Profile</a> --}}
                    <a href="#" class="dropdown-item text-danger"
                        onclick="event.preventDefault();
                                document.getElementById('header-logout-form').submit();">Logout</a>
                    <form id="header-logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
