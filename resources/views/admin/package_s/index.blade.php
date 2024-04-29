<x-admin-table>

    <!-- Title -->
    <x-slot name="title">
        Package Studio
    </x-slot>

    <!-- Button Form Create -->
    <x-slot name="formCreate">
        @include('admin.package_s.create')
    </x-slot>

    <!-- Table -->
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>{{ __('No') }}</th>
                <th>{{ __('Category') }}</th>
                <th>{{ __('Name') }}</th>
                <th class="d-none d-lg-table-cell">{{ __('Desc') }}</th>
                <th class="d-none d-lg-table-cell">{{ __('Images') }}</th>
                <th>{{ __('More') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($packages as $package)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $package->Category->name ?? '-' }}</td>
                    <td>{{ $package->name ?? '-' }}</td>
                    <td class="d-none d-lg-table-cell">{{ $package->desc ?? '-' }}</td>
                    <td class="d-none d-lg-table-cell">
                        @if ($package->img == null)
                            <img src="{{ asset('assets/profile/default.png') }}" alt="{{ $package->name }}"
                                width="100">
                        @else
                            <a href="#" data-toggle="modal" data-target="#myModal{{ $package->id }}">
                                <img class="img img-fluid rounded" src="{{ asset('assets/img/' . $package->img) }}"
                                    alt="{{ $package->img }}" width="100" loading="lazy">
                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="myModal{{ $package->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">{{ $package->name }}</h3>
                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool"
                                                            data-card-widget="maximize"><i
                                                                class="fas fa-expand"></i></button>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <img class="img img-fluid col-12"
                                                        src="{{ asset('assets/img/' . $package->img) }}"
                                                        alt="{{ $package->img }}">
                                                    <!-- Tombol Download -->
                                                    <a href="{{ asset('assets/img/' . $package->img) }}"
                                                        download="{{ $package->img }}"
                                                        class="btn btn-success mt-2 col-12">Download
                                                        Gambar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </td>
                    <td class="manage-row">
                        @if (auth()->user()->role == 'admin')
                            @include('admin.package_s.edit')
                            @include('admin.package_s.delete')
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>{{ __('No') }}</th>
                <th>{{ __('Category') }}</th>
                <th>{{ __('Name') }}</th>
                <th class="d-none d-lg-table-cell">{{ __('Desc') }}</th>
                <th class="d-none d-lg-table-cell">{{ __('Images') }}</th>
                <th>{{ __('More') }}</th>
            </tr>
        </tfoot>
    </table>

    @section('menuPackage_s', 'menu-open')
    @section('activePackage_s', 'active')
</x-admin-table>
