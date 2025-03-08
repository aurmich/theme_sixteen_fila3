<<<<<<< HEAD
@section('title', 'Sign in to your account')

<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="{{ route('home') }}">
            {{--
            <x-logo class="w-auto h-16 mx-auto text-indigo-600" />
            --}}
            LOGO
        </a>

        <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900 leading-9">
            Sign in to your account
        </h2>
        @if (Route::has('register'))
            <p class="mt-2 text-sm text-center text-gray-600 leading-5 max-w">
                Or
                <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                    create a new account
                </a>
            </p>
        @endif
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            <form wire:submit.prevent="authenticate">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                        Email address
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="email" id="email" name="email" type="email" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 leading-5">
                        Password
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="password" id="password" type="password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center">
                        <input wire:model.lazy="remember" id="remember" type="checkbox" class="form-checkbox w-4 h-4 text-indigo-600 transition duration-150 ease-in-out" />
                        <label for="remember" class="block ml-2 text-sm text-gray-900 leading-5">
                            Remember
                        </label>
                    </div>

                    <div class="text-sm leading-5">
                        <a href="{{ route('password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                            Forgot your password?
                        </a>
                    </div>
                </div>

                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            Sign in
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
=======
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <div class="it-hero-wrapper it-dark it-overlay">
                <!-- Image -->
                <div class="img-responsive-wrapper">
                    <div class="img-responsive">
                        <div class="img-wrapper">
                            <img src="{{ Theme::asset('pub_theme::img/city-login.jpg') }}" alt="Login banner">
                        </div>
                    </div>
                </div>
                <!-- Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="it-hero-text-wrapper bg-dark px-4 py-5">
                                <h1 class="text-center mb-4">
                                    Accedi a FixCity
                                </h1>
                                <form wire:submit.prevent="authenticate" class="needs-validation" novalidate>
                                    <div class="form-group mb-4">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="it-mail"></i>
                                                </div>
                                            </div>
                                            <input type="email" 
                                                class="form-control @error('email') is-invalid @enderror" 
                                                wire:model.defer="email"
                                                placeholder="Email"
                                                required>
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="it-password"></i>
                                                </div>
                                            </div>
                                            <input type="password" 
                                                class="form-control @error('password') is-invalid @enderror" 
                                                wire:model.defer="password"
                                                placeholder="Password"
                                                required>
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-check mb-4">
                                        <input class="form-check-input" 
                                            type="checkbox" 
                                            wire:model.defer="remember"
                                            id="remember">
                                        <label class="form-check-label" for="remember">
                                            Ricordami
                                        </label>
                                    </div>

                                    @if (session()->has('error'))
                                        <div class="alert alert-danger mb-4">
                                            {{ session('error') }}
                                        </div>
                                    @endif

                                    <div class="d-grid gap-2">
                                        <button type="submit" 
                                            class="btn btn-primary btn-lg"
                                            wire:loading.attr="disabled">
                                            <span wire:loading.remove>Accedi</span>
                                            <span wire:loading>
                                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                Accesso in corso...
                                            </span>
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="btn btn-outline-primary">
                                                Password dimenticata?
                                            </a>
                                        @endif
                                    </div>

                                    <div class="text-center mt-4">
                                        <p class="mb-0">Non hai un account?</p>
                                        <a href="{{ route('register') }}" class="btn btn-link">
                                            Registrati
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
.it-hero-wrapper {
    border-radius: 1rem;
    overflow: hidden;
}

.it-hero-text-wrapper {
    border-radius: 0 0 1rem 1rem;
}

.input-group-text {
    background-color: transparent;
    border-right: 0;
}

.form-control {
    border-left: 0;
}

.input-group:focus-within {
    box-shadow: 0 0 0 0.2rem rgba(var(--primary-rgb), 0.25);
}

.btn-primary {
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 0.5px;
}
</style>
@endpush 
>>>>>>> 50bf5e8f5f (Squashed 'laravel/Modules/Fixcity/' content from commit 11c5f6a3e0)
