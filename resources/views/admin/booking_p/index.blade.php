<x-admin-layout>

    <!-- Title -->
    <x-slot name="title">
        Booking Photographer
    </x-slot>

    <div class="col-12 col-sm-12">
        <div class="card card-dark card-tabs">
            <div class="card-header bg-primary p-0 pt-1 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="masuk-tab" data-toggle="pill" href="#masuk" role="tab"
                            aria-controls="masuk" aria-selected="true">Pesanan Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="ongoing-tab" data-toggle="pill" href="#ongoing" role="tab"
                            aria-controls="ongoing" aria-selected="false">Pesanan Ongoing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="selesai-tab" data-toggle="pill" href="#selesai" role="tab"
                            aria-controls="selesai" aria-selected="false">Pesanan Selesai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="batal-tab" data-toggle="pill" href="#batal" role="tab"
                            aria-controls="batal" aria-selected="false">Dibatalkan</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                    <div class="tab-pane fade active show" id="masuk" role="tabpanel" aria-labelledby="masuk-tab">
                        @foreach ($bookings->where('status', 'Menunggu Konfirmasi') as $booking)
                            <a href="{{ route('admin.booking_p.edit', $booking->id) }}"
                                class="card card-warning card-outline py-3 px-4">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <p>{{ $booking->User->name ?? '-' }}</p>
                                        <h3>{{ $booking->Package->name ?? '-' }}</h3>
                                        <div>No. Booking</div>
                                        <div>Waktu Booking</div>
                                    </div>
                                    <div class="col-md-6 mb-3 text-right">
                                        <p><i class="fas fa-info-circle"></i></p>
                                        <h3>Total Pesanan : Rp.{{ $booking->total ?? 0 }}</h3>
                                        <div>{{ $booking->token ?? '-' }}</div>
                                        <div>
                                            {{ date('Y-m-d H:i', strtotime($booking->datetime)) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-3 border-top">Klik untuk melihat detail booking</div>
                                    <div class="col-md-6 pt-3 border-top text-right"><span
                                            class="badge badge-warning">{{ $booking->status ?? '-' }}</span></div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="tab-pane fade" id="ongoing" role="tabpanel" aria-labelledby="ongoing-tab">
                        @foreach ($bookings->where('status', 'Diproses') as $booking)
                            <a href="{{ route('admin.booking_p.edit', $booking->id) }}"
                                class="card card-primary card-outline py-3 px-4">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <p>{{ $booking->User->name ?? '-' }}</p>
                                        <h3>{{ $booking->Package->name ?? '-' }}</h3>
                                        <div>No. Booking</div>
                                        <div>Waktu Booking</div>
                                    </div>
                                    <div class="col-md-6 mb-3 text-right">
                                        <p><i class="fas fa-info-circle"></i></p>
                                        <h3>Total Pesanan : Rp.{{ $booking->total ?? 0 }}</h3>
                                        <div>{{ $booking->token ?? '-' }}</div>
                                        <div>
                                            {{ date('Y-m-d H:i', strtotime($booking->datetime)) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-3 border-top">Klik untuk melihat detail booking</div>
                                    <div class="col-md-6 pt-3 border-top text-right"><span
                                            class="badge badge-primary">{{ $booking->status ?? '-' }}</span></div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="tab-pane fade" id="selesai" role="tabpanel" aria-labelledby="selesai-tab">
                        @foreach ($bookings->where('status', 'Selesai') as $booking)
                            <a href="{{ route('admin.booking_p.edit', $booking->id) }}"
                                class="card card-success card-outline py-3 px-4">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <p>{{ $booking->User->name ?? '-' }}</p>
                                        <h3>{{ $booking->Package->name ?? '-' }}</h3>
                                        <div>No. Booking</div>
                                        <div>Waktu Booking</div>
                                    </div>
                                    <div class="col-md-6 mb-3 text-right">
                                        <p><i class="fas fa-info-circle"></i></p>
                                        <h3>Total Pesanan : Rp.{{ $booking->total ?? 0 }}</h3>
                                        <div>{{ $booking->token ?? '-' }}</div>
                                        <div>
                                            {{ date('Y-m-d H:i', strtotime($booking->datetime)) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-3 border-top">Klik untuk melihat detail booking</div>
                                    <div class="col-md-6 pt-3 border-top text-right"><span
                                            class="badge badge-success">{{ $booking->status ?? '-' }}</span></div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="tab-pane fade" id="batal" role="tabpanel" aria-labelledby="batal-tab">
                        @foreach ($bookings->where('status', 'Dibatalkan') as $booking)
                            <a href="{{ route('admin.booking_p.edit', $booking->id) }}"
                                class="card card-danger card-outline py-3 px-4">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <p>{{ $booking->User->name ?? '-' }}</p>
                                        <h3>{{ $booking->Package->name ?? '-' }}</h3>
                                        <div>No. Booking</div>
                                        <div>Waktu Booking</div>
                                    </div>
                                    <div class="col-md-6 mb-3 text-right">
                                        <p><i class="fas fa-info-circle"></i></p>
                                        <h3>Total Pesanan : Rp.{{ $booking->total ?? 0 }}</h3>
                                        <div>{{ $booking->token ?? '-' }}</div>
                                        <div>
                                            {{ date('Y-m-d H:i', strtotime($booking->datetime)) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-3 border-top">Klik untuk melihat detail booking</div>
                                    <div class="col-md-6 pt-3 border-top text-right"><span
                                            class="badge badge-danger">{{ $booking->status ?? '-' }}</span></div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('menuBooking_p', 'menu-open')
    @section('activeBooking_p', 'aktif')
</x-admin-layout>
