@extends('layouts.base')

@section('base_content')
    <div class="page">
        @include('partials.sidebar')

        @include('partials.header')

        {{-- Page content --}}
        <div class="page-wrapper">

            {{-- Breadcrumb --}}
            @yield('page-header')

            @if (View::hasSection('breadcrumb') || View::hasSection('breadcrumb-action'))
                <div class="page-header d-print-none">
                    <div class="container-xl">
                        <div class="row g-2 align-items-center">
                            @yield('breadcrumb')
                            <div class="col-auto col-md-auto ms-auto d-print-none">
                                @yield('breadcrumb-action')
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            {{-- Page body --}}
            <div class="page-body">
                <div class="container-xl">
                    {{-- @include('partials.form-status') --}}
                </div>
                @yield('content')
            </div>

            {{-- Page Footer --}}
            @include('partials.footer')
        </div>
    </div>
    @yield('popup')
@endsection
