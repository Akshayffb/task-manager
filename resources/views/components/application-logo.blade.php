<a href="{{ route('home') }}" class="navbar-brand navbar-brand-autodark" {{ $attributes }}>
    <img src="{{ asset($siteSettings['logo'] ?? 'images/logo.png') }}"
        alt="{{ $siteSettings['title'] ?? config('app.name') }}" class="logo"></a>
