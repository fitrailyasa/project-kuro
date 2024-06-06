<x-admin-layout>

    <!-- Title -->
    <x-slot name="title">
        Detail Booking
    </x-slot>

    <div class="row">
        <div class="card col-md-9">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-header text-center mb-2">
                            <div class="fw-bold">{{ __('No. Booking') }} : {{ $booking->token ?? '-' }}</div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">{{ __('Package') }}</label>
                            <input type="text" class="form-control" placeholder="package_id" name="package_id"
                                id="package_id" value="{{ $booking->Package->name }}" disabled>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">{{ __('Tanggal') }}</label>
                            <input type="text" class="form-control" placeholder="date" name="date" id="date"
                                value="{{ $booking->datetime }}" disabled>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">{{ __('Nama') }}</label>
                            <input type="text" class="form-control" placeholder="name" name="name" id="name"
                                value="{{ $booking->User->name }}" disabled>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">{{ __('Waktu') }}</label>
                            <input type="text" class="form-control" placeholder="time" name="time" id="time"
                                value="{{ $booking->time }}" disabled>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">{{ __('Lokasi') }}</label>
                            <input type="text" class="form-control" placeholder="location" name="location"
                                id="waktu" value="{{ $booking->location }}" disabled>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">{{ __('No. HP') }}</label>
                            <input type="text" class="form-control" placeholder="no_hp" name="no_hp" id="no_hp"
                                value="{{ $booking->no_hp }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-header text-center mb-2">
                            <div class="fw-bold">{{ __('Waktu Booking') }} :
                                {{ date('Y-m-d H:i', strtotime($booking->datetime)) }}
                                {{ $booking->time ?? '-' }}</div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">{{ __('Jumlah Wisudawan') }}</label>
                            <input type="text" class="form-control" placeholder="price_1" name="price_1"
                                id="price_1" value="Rp.{{ $booking->price_1 }}" disabled>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">{{ __('Lokasi') }}</label>
                            <input type="text" class="form-control" placeholder="price_2" name="price_2"
                                id="price_2" value="Rp.{{ $booking->price_2 }}" disabled>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">{{ __('Durasi') }}</label>
                            <input type="text" class="form-control" placeholder="price_3" name="price_3"
                                id="price_3" value="Rp.{{ $booking->price_3 }}" disabled>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">{{ __('Foto Edit') }}</label>
                            <input type="text" class="form-control" placeholder="price_4" name="price_4"
                                id="price_4" value="Rp.{{ $booking->price_4 }}" disabled>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">{{ __('Video Cinematic') }}</label>
                            <input type="text" class="form-control" placeholder="price_5" name="price_5"
                                id="price_5" value="Rp.{{ $booking->price_5 }}" disabled>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">{{ __('Status') }}</label>
                            <input type="text" class="form-control" placeholder="status" name="status"
                                id="status" value="{{ $booking->status }}" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if ($booking->status == 'Menunggu Konfirmasi')
            <div class="card col-md-3">
                @if (auth()->user()->role == 'admin')
                    <form class=" p-2" method="POST" action="{{ route('admin.booking_s.update', $booking->id) }}"
                        enctype="multipart/form-data">
                @endif
                @csrf
                @method('PUT')
                <div class="card-header">
                    <input type="hidden" name="status" id="status" value="Diproses">
                    <h4 class="text-center">Total : Rp.{{ $booking->total }}</h4>
                </div>
                <button type="submit" class="btn btn-block btn-primary">Konfirmasi Pesanan</button>
                <a href="https://wa.me/+62{{ $booking->no_hp }}" class="btn btn-block btn-success"><i
                        class="fa fa-whatsapp"></i> Chat Penyewa</a>
                </form>
                @if (auth()->user()->role == 'admin')
                    <form class=" px-2 pb-3" method="POST"
                        action="{{ route('admin.booking_s.update', $booking->id) }}" enctype="multipart/form-data">
                @endif
                @csrf
                @method('PUT')
                <input type="hidden" name="status" id="status" value="Dibatalkan">
                <button type="submit" class="btn btn-block btn-danger">Batalkan Pesanan</button>
                </form>
            </div>
        @elseif ($booking->status == 'Diproses')
            <div class="card col-md-3">
                @if (auth()->user()->role == 'admin')
                    <form class=" p-2" method="POST" action="{{ route('admin.booking_s.update', $booking->id) }}"
                        enctype="multipart/form-data">
                @endif
                @csrf
                @method('PUT')
                <div class="card-header">
                    <input type="hidden" name="status" id="status" value="Selesai">
                    <h4 class="text-center">Total : Rp.{{ $booking->total }}</h4>
                </div>
                <button type="submit" class="btn btn-block btn-primary">Pesanan Selesai</button>
                <a href="https://wa.me/+62{{ $booking->no_hp }}" class="btn btn-block btn-success"><i
                        class="fa fa-whatsapp"></i> Chat
                    Penyewa</a>
                </form>
                @if (auth()->user()->role == 'admin')
                    <form class=" px-2 pb-3" method="POST"
                        action="{{ route('admin.booking_s.update', $booking->id) }}" enctype="multipart/form-data">
                @endif
                @csrf
                @method('PUT')
                <input type="hidden" name="status" id="status" value="Dibatalkan">
                <button type="submit" class="btn btn-block btn-danger">Batalkan Pesanan</button>
                </form>
            </div>
        @elseif ($booking->status == 'Selesai')
            <div class="card col-md-3">
                <a href="https://wa.me/+62{{ $booking->no_hp }}" class="btn btn-block btn-success mt-3"><i
                        class="fa fa-whatsapp"></i> Chat
                    Penyewa</a>
            </div>
        @endif
    </div>

    @section('menuBooking_s', 'menu-open')
    @section('activeBooking_s', 'aktif')
</x-admin-layout>
