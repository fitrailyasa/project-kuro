@extends('layouts.client.app')

@section('title', 'Detail Booking')

@section('textBooking', 'bg-dark rounded')

@section('content')

    <div class="container my-5 py-5">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card-header text-center mb-2">
                                <div class="fw-bold">{{ __('Tentukan Tanggal') }}</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-2">
                                <label class="form-label">{{ __('Package') }}</label>
                                <input type="text" class="form-control" placeholder="package_id" name="package_id"
                                    id="package_id" value="{{ $booking->Package->name }}" disabled>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">{{ __('Nama') }}</label>
                                <input type="text" class="form-control" placeholder="name" name="name" id="name"
                                    value="{{ $booking->name }}" disabled>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">{{ __('Lokasi') }}</label>
                                <input type="text" class="form-control" placeholder="location" name="location"
                                    id="location" value="{{ $booking->location }}" disabled>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">{{ __('No. HP') }}</label>
                                <input type="text" class="form-control" placeholder="no_hp" name="no_hp" id="no_hp"
                                    value="{{ $booking->no_hp }}" disabled>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-2">
                                <label class="form-label">{{ __('Jumlah Wisudawan') }}</label>
                                <input type="text" class="form-control" placeholder="10000" name="price_1" id="price_1"
                                    value="Rp.{{ $booking->price_1 }}" disabled>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">{{ __('Lokasi') }}</label>
                                <input type="text" class="form-control" placeholder="10000" name="price_2" id="price_2"
                                    value="Rp.{{ $booking->price_2 }}" disabled>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">{{ __('Durasi') }}</label>
                                <input type="text" class="form-control" placeholder="10000" name="price_3" id="price_3"
                                    value="Rp.{{ $booking->price_3 }}" disabled>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">{{ __('Foto Edit') }}</label>
                                <input type="text" class="form-control" placeholder="10000" name="price_4" id="price_4"
                                    value="Rp.{{ $booking->price_4 }}" disabled>
                            </div>
                            <div class="mb-2">
                                <input type="checkbox" name="price_5" id="price_5" value="Rp.{{ $booking->price_5 }}">
                                <label class="form-label">{{ __('Video Cinematic') }}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
