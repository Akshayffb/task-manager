<a href="{{ route('home') }}"
   {{ $attributes->merge(['class' => 'navbar-brand fw-bold']) }}>
    {{ $siteSettings['title'] ?? config('app.name') }}
</a>