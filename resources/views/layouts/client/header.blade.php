<?php
use Illuminate\Support\Facades\Auth;
use App\Models\Package;

$package = Package::where('type', 'S')->first();
?>

<header class="header px-3 mb-3 fixed-top border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-between">
            <div class="d-flex align-items-center justify-content-center">
                <img class="img-fluid border rounded-circle p-1" width="60" src="{{ asset('assets/img/logo.png') }}"
                    alt="Logo">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 mx-3 justify-content-center mb-md-0">
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
            </div>
            <div class="d-none d-lg-block">
                @if (Auth::check())
                    <div class="dropdown">
                        <button class="btn dropdown-toggle d-flex align-items-center" type="button"
                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"
                            style="color: #0093E9">
                            {{ Auth::user()->name }} <i class="fas fa-user-circle ms-2 fa-2x"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
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
                    </div>
                @else
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="{{ route('login') }}" class="btn aktif btn-outline-light ms-3"><i
                                class="fas fa-sign-in-alt"></i> Login</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
