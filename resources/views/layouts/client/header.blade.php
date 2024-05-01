<header class="header px-3 bg-dark text-white mb-3 fixed-top">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-between">
            <div class="d-flex align-items-center justify-content-center">
                <img class="img-fluid bg-white rounded-circle p-1" width="60" src="{{ asset('assets/img/logo.png') }}"
                    alt="Logo">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 mx-3 justify-content-center mb-md-0">
                    <li><a href="{{ route('beranda') }}"
                            class="nav-link py-3 px-3 text-white fw-bold fs-5 @yield('textHome')">{{ __('Home') }}</a>
                    </li>
                    <li><a href="{{ route('studio') }}"
                            class="nav-link py-3 px-3 text-white fw-bold fs-5 @yield('textStudio')">{{ __('Studio') }}</a>
                    </li>
                    <li><a href="{{ route('photographer') }}"
                            class="nav-link py-3 px-3 text-white fw-bold fs-5 @yield('textPhotographer')">{{ __('Photographer') }}</a>
                    </li>
                    <li><a href="{{ route('booking') }}"
                            class="nav-link py-3 px-3 text-white fw-bold fs-5 @yield('textBooking')">{{ __('My Booking') }}</a>
                    </li>
                </ul>
            </div>
            <div class="d-none d-lg-block">
                <form action="#" method="GET">
                    <div class="d-flex justify-content-center align-items-center">
                        {{-- <div class="col-md-12 input-group">
                            <input type="text" class="form-control" name="query" placeholder="Cari disini..."
                                value="">
                            <button class="btn w-25 btn-outline-light b" type="submit">Cari</button>
                        </div> --}}
                        <a href="{{ route('login') }}" class="btn tombol ms-3"><i class="fas fa-sign-in-alt"></i>
                            Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>
