@extends('layouts.client.app')

@section('title', 'Photographer')

@section('textPhotographer', 'aktif rounded')

@section('content')

    <div class="text-center py-5">
        <div class="container my-5">
            <h3 class="text-center py-1 px-3 fw-bold" style="color: #0093E9;">
                PHOTOGRAPHER
            </h3>
            <div class="row kartu-img pt-2 d-flex justify-content-center">
                @foreach ($availables as $available)
                    <div class="col-sm-2 col-md-2 px-3 mx-2">
                        <div class="card border rounded p-3">
                            <img class="img img-fluid col-12" loading="fuzy"
                                src="{{ asset('assets/img/' . $available->img0) }}" alt="">
                            <p>{{ $available->name }}</p>
                            <a href="{{ route('photographer.detail', $available->id) }}"
                                class="btn text-white aktif border col-12">Detail
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container pb-3">
            <h3 class="text-center py-1 px-3 fw-bold" style="color: #0093E9;">
                GRADUATION PERSONAL
            </h3>
            <div class="row">
                @foreach ($packages as $package)
                    @if ($package->Category && $package->Category->name == 'Graduation Personal')
                        <div class="2 col-md-4 p-3">
                            <div class="card border rounded p-3">
                                <img class="img img-fluid col-12" loading="fuzy"
                                    src="{{ asset('assets/img/' . $package->img) }}" alt="">
                                <h4>{{ $package->name }}</h4>
                                <p>
                                <ol class="text-justify">
                                    @if (is_array($package->list) || is_object($package->list))
                                        @foreach ($package->list as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    @else
                                        <li>No items available</li>
                                    @endif
                                </ol>
                                </p>
                                <h3><b>Rp{{ number_format($package->price, 0, ',', '.') }}</b></h3>
                                <a href="{{ route('photographer.show', $package->id) }}"
                                    class="btn text-white aktif border col-12">Booking Now
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {{ $packages->links() }}
            </div>
        </div>

        <div class="container pb-3">
            <h3 class="text-center py-1 px-3 fw-bold" style="color: #0093E9;">
                GRADUATION GROUP
            </h3>
            <div class="row">
                @foreach ($packages as $package)
                    @if ($package->Category && $package->Category->name == 'Graduation Group')
                        <div class="col-sm-4 col-md-4 p-3">
                            <div class="card border rounded p-3">
                                <img class="img img-fluid col-12" loading="fuzy"
                                    src="{{ asset('assets/img/' . $package->img) }}" alt="">
                                <h4>{{ $package->name }}</h4>
                                <p>
                                <ol class="text-justify">
                                    @if (is_array($package->list) || is_object($package->list))
                                        @foreach ($package->list as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    @else
                                        <li>No items available</li>
                                    @endif
                                </ol>
                                </p>
                                <h3><b>Rp{{ number_format($package->price, 0, ',', '.') }}</b></h3>
                                <a href="{{ route('photographer.show', $package->id) }}"
                                    class="btn text-white aktif border col-12">Booking Now
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {{ $packages->links() }}
            </div>
        </div>

        <div class="container pb-3">
            <h3 class="text-center py-1 px-3 fw-bold" style="color: #0093E9;">
                OTHER EVENTS
            </h3>
            <div class="row">
                @foreach ($packages as $package)
                    @if ($package->Category && $package->Category->name == 'Other Events')
                        <div class="col-sm-4 col-md-4 p-3">
                            <div class="card border rounded p-3">
                                <img class="img img-fluid col-12" loading="fuzy"
                                    src="{{ asset('assets/img/' . $package->img) }}" alt="">
                                <h4>{{ $package->name }}</h4>
                                <p>
                                <ol class="text-justify">
                                    @if (is_array($package->list) || is_object($package->list))
                                        @foreach ($package->list as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    @else
                                        <li>No items available</li>
                                    @endif
                                </ol>
                                </p>
                                <h3><b>Rp{{ number_format($package->price, 0, ',', '.') }}</b></h3>
                                <a href="{{ route('photographer.show', $package->id) }}"
                                    class="btn text-white aktif border col-12">Booking Now
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {{ $packages->links() }}
            </div>
        </div>
    </div>

@endsection
