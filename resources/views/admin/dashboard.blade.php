<x-admin-layout>

    <!-- Title -->
    <x-slot name="title">
        Dashboard
    </x-slot>

    <!-- Content -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $user }}</h3>

                    <p>{{ __('Pengguna') }}</p>
                </div>
                <a href="{{ route('admin.user.index') }}" class="small-box-footer">Kelola Data <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $available->available ?? '-' }}</h3>

                    <p>{{ __('Available') }}</p>
                </div>
                <a href="{{ route('admin.available.index') }}" class="small-box-footer">Kelola Data <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $inventory }}</h3>

                    <p>{{ __('Inventaris') }}</p>
                </div>
                <a href="{{ route('admin.inventory.index') }}" class="small-box-footer">Kelola Data <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $category }}</h3>

                    <p>{{ __('Category') }}</p>
                </div>
                <a href="{{ route('admin.category.index') }}" class="small-box-footer">Kelola Data <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- Content -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $booking_s }}</h3>

                    <p>{{ __('Booking Studio') }}</p>
                </div>
                <a href="{{ route('admin.booking_s.index') }}" class="small-box-footer">Kelola Data <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $package_s }}</h3>

                    <p>{{ __('Package Studio') }}</p>
                </div>
                <a href="{{ route('admin.package_s.index') }}" class="small-box-footer">Kelola Data <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $booking_p }}</h3>

                    <p>{{ __('Booking Photographer') }}</p>
                </div>
                <a href="{{ route('admin.booking_p.index') }}" class="small-box-footer">Kelola Data <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $package_s }}</h3>

                    <p>{{ __('Package Photographer') }}</p>
                </div>
                <a href="{{ route('admin.package_p.index') }}" class="small-box-footer">Kelola Data <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>

    @section('activeDashboard', 'aktif')
</x-admin-layout>
