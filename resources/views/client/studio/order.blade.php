@extends('layouts.client.app')

@section('title', 'Detail Booking')

@section('textStudio', 'aktif rounded')

@section('content')

    <div class="py-5">
        <div class="container pt-5 pb-3">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('studio.checkout') }}" method="POST" class="row">
                            @csrf
                            <h3 class="text-center mb-3">{{ $package->name }}</h3>
                            <input type="hidden" name="package_id" id="package_id" value="{{ $package->id }}">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <img class="img img-fluid" src="{{ asset('assets/img/' . $package->img) }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">{{ __('Nama') }}</label>
                                    <input type="text" class="form-control" placeholder="name" name="name"
                                        id="name" value="{{ auth()->user()->name }}" disabled>
                                    <input type="text" class="form-control" name="user_id" id="user_id"
                                        value="{{ auth()->user()->id }}" hidden>
                                </div>
                                <input type="hidden" class="form-control" placeholder="0812345678" name="no_hp"
                                    value="{{ auth()->user()->no_hp }}" id="no_hp">
                                <div class="form-group">
                                    <label class="form-label">{{ __('Tentukan Tanggal') }}</label>
                                    <input type="datetime-local" id="datetime" name="datetime" class="form-control"
                                        required>
                                    <p class="text-sm">(<span class="text-danger">*</span>Minimal pemesanan 7 hari ke depan,
                                        waktu pemesanan antara jam 10:00 hingga 20:00)</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">{{ __('Tambah Orang | Rp250.000/Orang') }}</label>
                                    <div class="input-group">
                                        <button type="button" class="btn btn-outline-secondary"
                                            onclick="decrement('price_1')">-</button>
                                        <input type="number" class="form-control" placeholder="Jumlah Orang" name="price_1"
                                            value="0" id="price_1" min="0" onchange="calculateTotal()">
                                        <button type="button" class="btn btn-outline-secondary"
                                            onclick="increment('price_1')">+</button>
                                    </div>
                                    <input type="hidden" name="price_per_Orang" value="250000">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">{{ __('Tambah Durasi | Rp150.000/Jam') }}</label>
                                    <div class="input-group">
                                        <button type="button" class="btn btn-outline-secondary"
                                            onclick="decrement('price_3')">-</button>
                                        <input type="number" class="form-control" placeholder="Durasi (Jam)" name="price_3"
                                            value="0" id="price_3" min="0" onchange="calculateTotal()">
                                        <button type="button" class="btn btn-outline-secondary"
                                            onclick="increment('price_3')">+</button>
                                    </div>
                                    <input type="hidden" name="price_per_hour" value="150000">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">{{ __('Tambah Foto | Rp50.000/10 Foto') }}</label>
                                    <div class="input-group">
                                        <button type="button" class="btn btn-outline-secondary"
                                            onclick="decrement('price_4')">-</button>
                                        <input type="number" class="form-control" placeholder="Jumlah Tambahan Foto"
                                            name="price_4" value="0" id="price_4" min="0"
                                            onchange="calculateTotal()">
                                        <button type="button" class="btn btn-outline-secondary"
                                            onclick="increment('price_4')">+</button>
                                    </div>
                                    <input type="hidden" name="price_per_10_photos" value="5000">
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="price_5" id="price_5" value="550000"
                                        onchange="calculateTotal()">
                                    <label class="form-label">{{ __('Video Cinematic Max 1 Minute | Rp500.000') }}</label>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">{{ __('Harga Package') }}</label>
                                    <div id="price_package" class="form-control">Rp 0</div>
                                    <div id="total_cost" class="form-control">+Rp 0</div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">{{ __('Total') }}</label>
                                    <div id="total" class="form-control fw-bold">Rp
                                        {{ number_format($package->price, 0, ',', '.') }}</div>
                                </div>
                            </div>
                            <button class="btn aktif" type="submit">Checkout</button>
                            @if (session('alert'))
                                <div class="alert alert-warning" role="alert">
                                    {{ session('alert') }}
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function increment(id) {
            let input = document.getElementById(id);
            input.value = parseInt(input.value) + 1;
            calculateTotal();
        }

        function decrement(id) {
            let input = document.getElementById(id);
            if (input.value > 0) {
                input.value = parseInt(input.value) - 1;
            }
            calculateTotal();
        }

        function toggleLocationInput() {
            const locationInput = document.getElementById('price_2');
            locationInput.disabled = !locationInput.disabled;
            calculateTotal();
        }

        var packagePrice = <?php echo json_encode($package->price); ?>;

        function calculateTotal() {
            const quantityOrang = document.getElementById('price_1').value;
            const pricePerOrang = document.querySelector('input[name="price_per_Orang"]').value;

            const durationHours = document.getElementById('price_3').value;
            const pricePerHour = document.querySelector('input[name="price_per_hour"]').value;

            const additionalPhotos = document.getElementById('price_4').value;
            const pricePer10Photos = document.querySelector('input[name="price_per_10_photos"]').value;

            const isCinematicVideo = document.getElementById('price_5').checked;
            const priceCinematicVideo = isCinematicVideo ? document.getElementById('price_5').value : 0;

            const isLocationChecked = document.getElementById('location_checkbox').checked;
            const priceLocation = isLocationChecked ? document.querySelector('input[name="price_location"]').value : 0;

            let add = (quantityOrang * pricePerOrang) + (durationHours * pricePerHour) +
                (additionalPhotos * pricePer10Photos) + parseInt(priceCinematicVideo) + parseInt(priceLocation);

            document.getElementById('total_cost').textContent = '+Rp ' + add.toLocaleString();

            let total = packagePrice + add;

            document.getElementById('total').textContent = 'Rp ' + total.toLocaleString();
        }
        document.getElementById('price_package').textContent = 'Rp ' + packagePrice.toLocaleString();

        function increment(id) {
            let input = document.getElementById(id);
            input.value = parseInt(input.value) + 1;
            calculateTotal();
        }

        function decrement(id) {
            let input = document.getElementById(id);
            if (input.value > 0) {
                input.value = parseInt(input.value) - 1;
            }
            calculateTotal();
        }

        function toggleLocationInput() {
            const locationInput = document.getElementById('price_2');
            locationInput.disabled = !locationInput.disabled;
            calculateTotal();
        }

        var packagePrice = <?php echo json_encode($package->price); ?>;

        function calculateTotal() {
            const quantityOrang = document.getElementById('price_1').value;
            const pricePerOrang = document.querySelector('input[name="price_per_Orang"]').value;

            const durationHours = document.getElementById('price_3').value;
            const pricePerHour = document.querySelector('input[name="price_per_hour"]').value;

            const additionalPhotos = document.getElementById('price_4').value;
            const pricePer10Photos = document.querySelector('input[name="price_per_10_photos"]').value;

            const isCinematicVideo = document.getElementById('price_5').checked;
            const priceCinematicVideo = isCinematicVideo ? document.getElementById('price_5').value : 0;

            const isLocationChecked = document.getElementById('location_checkbox').checked;
            const priceLocation = isLocationChecked ? document.querySelector('input[name="price_location"]').value : 0;

            let add = (quantityOrang * pricePerOrang) + (durationHours * pricePerHour) +
                (additionalPhotos * pricePer10Photos) + parseInt(priceCinematicVideo) + parseInt(priceLocation);

            document.getElementById('total_cost').textContent = '+Rp ' + add.toLocaleString();

            let total = packagePrice + add;

            document.getElementById('total').textContent = 'Rp ' + total.toLocaleString();
        }
        document.getElementById('price_package').textContent = 'Rp ' + packagePrice.toLocaleString();

        function setMinDateTime() {
            var today = new Date();
            // Set minimum date to 7 days from today
            today.setDate(today.getDate() + 7);

            var year = today.getFullYear();
            var month = ('0' + (today.getMonth() + 1)).slice(-2);
            var day = ('0' + today.getDate()).slice(-2);

            // Combine date and time (time set to 10:00 AM as a minimum example)
            var minDateTime = year + '-' + month + '-' + day + 'T10:00';

            // Set the min attribute for the datetime input
            document.getElementById('datetime').setAttribute('min', minDateTime);
        }

        function validateBookingTime(event) {
            const datetimeInput = document.getElementById('datetime');
            const selectedDateTime = new Date(datetimeInput.value);

            const selectedHours = selectedDateTime.getHours();
            const selectedMinutes = selectedDateTime.getMinutes();

            // Allow time only between 10:00 and 20:00
            if (selectedHours < 10 || (selectedHours === 20 && selectedMinutes > 0) || selectedHours > 20) {
                alert('Pemesanan hanya diperbolehkan antara jam 10:00 hingga 20:00.');
                event.preventDefault(); // Prevent form submission
                return false;
            }

            return true; // Allow form submission if time is valid
        }

        window.onload = function() {
            setMinDateTime();

            // Attach the form submission handler to validate time
            const form = document.querySelector('form');
            form.addEventListener('submit', validateBookingTime);
        };
    </script>

@endsection
