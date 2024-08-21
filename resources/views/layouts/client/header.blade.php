<?php
use Illuminate\Support\Facades\Auth;
use App\Models\Package;

$package = Package::where('type', 'S')->first();
?>

<header class="header px-3 mb-3 fixed-top border-bottom">
    <div class="container">
        <nav class="navbar navbar-expand-lg py-0">
            <a class="navbar-brand" href="#">
                <img class="img img-fluid me-3" width="60" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
            </a>
            <button class="navbar-toggler aktif" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon""></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li><a href="{{ route('beranda') }}"
                            class="nav-link py-3 px-3 fw-bold fs-5 @yield('textHome')">{{ __('Home') }}</a>
                    </li>
                    <li><a href="{{ route('studio.show', $package->id) }}"
                            class="nav-link py-3 px-3 fw-bold fs-5 @yield('textStudio')">{{ __('Studio') }}</a>
                    </li>
                    <li><a href="{{ route('photographer') }}"
                            class="nav-link py-3 px-3 fw-bold fs-5 @yield('textPhotographer')">{{ __('Photographer') }}</a>
                    </li>
                    <li><a href="{{ route('booking') }}"
                            class="nav-link py-3 px-3 fw-bold fs-5 @yield('textBooking')">{{ __('My Booking') }}</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    @if (Auth::check())
                        <li class="nav-item dropdown @yield('textProfile')">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                                style="color: #0093E9">
                                {{ Str::limit(auth()->user()->name, 15) }} <i
                                    class="fas fa-user-circle ms-2 fa-2x"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li>
                                    <a href="{{ route('profile.edit') }}" class="dropdown-item">Profile</a>
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="btn btn-primary aktif ms-3">Login</a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
