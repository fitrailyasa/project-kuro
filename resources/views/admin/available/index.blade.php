<x-admin-table>

    <!-- Title -->
    <x-slot name="title">
        Available Photographer
    </x-slot>

    <!-- Table -->
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>{{ __('No') }}</th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Profile') }}</th>
                <th>{{ __('Image 1') }}</th>
                <th>{{ __('Image 2') }}</th>
                <th>{{ __('Image 3') }}</th>
                <th>{{ __('Image 4') }}</th>
                <th>{{ __('Image 5') }}</th>
                <th>{{ __('Image 6') }}</th>
                <th>{{ __('More') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($availables as $available)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $available->name ?? '-' }}</td>
                    @for ($i = 0; $i <= 6; $i++)
                        <td class="d-none d-lg-table-cell">
                            @php
                                $imgField = 'img' . $i;
                            @endphp

                            @if ($available->$imgField == null)
                                @if ($i == 1)
                                    <img src="{{ asset('assets/profile/default.png') }}" alt="{{ $available->name }}"
                                        width="100">
                                @endif
                            @else
                                <a href="#" data-toggle="modal"
                                    data-target="#myModal{{ $available->id }}-{{ $i }}">
                                    <img class="img img-fluid rounded"
                                        src="{{ asset('assets/img/' . $available->$imgField) }}"
                                        alt="{{ $available->$imgField }}" width="100" loading="lazy">
                                </a>

                                <!-- Modal -->
                                <div class="modal fade" id="myModal{{ $available->id }}-{{ $i }}"
                                    tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 class="card-title">{{ $available->name }} - Image
                                                            {{ $i }}</h3>
                                                        <div class="card-tools">
                                                            <button type="button" class="btn btn-tool"
                                                                data-card-widget="maximize"><i
                                                                    class="fas fa-expand"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <img class="img img-fluid col-12"
                                                            src="{{ asset('assets/img/' . $available->$imgField) }}"
                                                            alt="{{ $available->$imgField }}">
                                                        <!-- Download Button -->
                                                        <a href="{{ asset('assets/img/' . $available->$imgField) }}"
                                                            download="{{ $available->$imgField }}"
                                                            class="btn btn-success mt-2 col-12">
                                                            Download Image
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </td>
                    @endfor
                    <td class="manage-row">
                        @if (auth()->user()->role == 'admin')
                            @include('admin.available.edit')
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>{{ __('No') }}</th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Profile') }}</th>
                <th>{{ __('Image 1') }}</th>
                <th>{{ __('Image 2') }}</th>
                <th>{{ __('Image 3') }}</th>
                <th>{{ __('Image 4') }}</th>
                <th>{{ __('Image 5') }}</th>
                <th>{{ __('Image 6') }}</th>
                <th>{{ __('More') }}</th>
            </tr>
        </tfoot>
    </table>

    @section('activeAvailable', 'aktif')
</x-admin-table>
