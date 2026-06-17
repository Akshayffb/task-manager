@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <x-application-logo />
            </div>
            <div class="card card-md">
                <div class="card-body">
                    <h2 class="h2 text-center mb-4">Login to your account</h2>
                    <form action="{{ route('login') }}" method="post" autocomplete="on">
                        @csrf
                        <div class="mb-3">
                            <x-input-label for="email" :value="__('Email address')" class="form-label" />
                            <x-text-input id="email" class="form-control" type="email" name="email"
                                :value="old('email')" required autofocus autocomplete="username" placeholder="your@email.com" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="mb-2">
                            <x-input-label for="password" class="form-label">
                                Password
                                <span class="form-label-description">
                                    <a href="{{ route('password.request') }}">I forgot password</a>
                                </span>
                            </x-input-label>
                            <div class="input-group input-group-flat" x-data="{ show: false }">
                                <x-text-input x-bind:type="show ? 'text' : 'password'" id="password" name="password"
                                    required class="form-control" autocomplete="current-password"
                                    placeholder="Your password" />
                                <span class="input-group-text" @click="show = !show" style="cursor: pointer;">
                                    <i :class="show ? 'ti ti-eye-off' : 'ti ti-eye'"></i>
                                </span>
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div class="mb-2">
                            <x-input-label class="form-check" for="remember_me">
                                <x-text-input type="checkbox" class="form-check-input" id="remember_me" name="remember" />
                                <span class="form-check-label">Remember me on this device</span>
                            </x-input-label>
                        </div>
                        <div class="form-footer">
                            <x-primary-button type="submit" class="w-100">
                                Sign in
                            </x-primary-button>
                        </div>
                    </form>
                </div>
                <div class="hr-text">or</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <a href="#" class="btn btn-4 w-100">
                                <i class="ti ti-brand-google me-2"></i>
                                Login with Google </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center text-secondary mt-3">Don't have account yet? <a href="{{ route('register') }}"
                    tabindex="-1">Sign
                    up</a></div>
        </div>
    </div>
@endsection
