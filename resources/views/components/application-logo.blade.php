<a href="{{ route('home') }}" {{ $attributes->merge(['class' => 'navbar-brand navbar-brand-autodark']) }}>
    <img
        src="{{ asset($siteSettings['logo'] ?? 'images/logo.png') }}"
        alt="{{ $siteSettings['title'] ?? config('app.name') }}"
        class="logo"
    >
</a>