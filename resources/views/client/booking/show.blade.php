@extends('layouts.client.app')

@section('title', 'Detail Booking')

@section('textBooking', 'aktif rounded')

@section('content')

    <div class="py-5">
        <div class="container pt-5 pb-3">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('booking') }}"><i class="fa fa-arrow-left text-dark mb-2"></i></a>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-2">
                                    <label class="form-label">{{ __('Package') }}</label>
                                    <input type="text" class="form-control" placeholder="package_id" name="package_id"
                                        id="package_id" value="{{ $booking->Package->name ?? '-' }}" disabled>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">{{ __('Nama') }}</label>
                                    <input type="text" class="form-control" placeholder="name" name="name"
                                        id="name" value="{{ $booking->User->name ?? '-' }}" disabled>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">{{ __('Lokasi') }}</label>
                                    <input type="text" class="form-control" placeholder="location" name="location"
                                        id="location" value="{{ $booking->location ?? '-' }}" disabled>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">{{ __('No. HP') }}</label>
                                    <input type="text" class="form-control" placeholder="no_hp" name="no_hp"
                                        id="no_hp" value="{{ $booking->User->no_hp ?? '-' }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-2">
                                    <label class="form-label">{{ __('Jumlah Orang') }}</label>
                                    <input type="text" class="form-control" placeholder="1" name="price_1" id="price_1"
                                        value="{{ $booking->price_1 ?? '-' }} orang" disabled>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">{{ __('Lokasi Tambahan') }}</label>
                                    <input type="text" class="form-control" placeholder="Jl. Jalan" name="price_2"
                                        id="price_2"
                                        value="{{ $booking->price_2 == 100000 ? 'Bandar Lampung' : ($booking->price_2 == 300000 ? 'Jabodetabek' : '-') }}"
                                        disabled>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">{{ __('Durasi') }}</label>
                                    <input type="text" class="form-control" placeholder="1" name="price_3" id="price_3"
                                        value="{{ $booking->price_3 ?? '-' }} jam" disabled>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">{{ __('Foto Edit') }}</label>
                                    <input type="text" class="form-control" placeholder="1" name="price_4" id="price_4"
                                        value="{{ $booking->price_4 ?? '-' }} foto" disabled>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" name="price_5" id="price_5"
                                        {{ $booking->price_5 ?? '-' ? 'checked' : '' }}>
                                    <label class="form-label">{{ __('Video Cinematic') }}</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card p-3">
                                    <h4>Metode Pembayaran</h4>
                                    <a class="row text-success" href="https://wa.me/+6287889165766" class="text-success">
                                        <div class="col-md-6">
                                            <p>Whatsapp <br>
                                                087889165766
                                            </p>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <i class="fa fa-whatsapp fa-2x pt-3"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="card p-3">
                                    <h5>Total:</h5>
                                    <h3 class="fw-bold mb-4">Rp{{ number_format($booking->total ?? 0, 0, ',', '.') }}</h3>
                                    <a href="https://wa.me/+6287889165766" class="btn btn-success">Go to Whatsapp</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
