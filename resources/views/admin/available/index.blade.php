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
                <th>{{ __('Available') }}</th>
                <th>{{ __('More') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($availables as $available)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $available->available ?? '-' }}</td>
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
                <th>{{ __('Available') }}</th>
                <th>{{ __('More') }}</th>
            </tr>
        </tfoot>
    </table>

    @section('activeAvailable', 'aktif')
</x-admin-table>
