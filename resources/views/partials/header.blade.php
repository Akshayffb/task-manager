<header class="navbar navbar-light d-print-none py-2">
    <div class="container-fluid">
        <x-application-name />
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
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">Update Profile</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')" class="dropdown-item text-danger"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            Logout
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
