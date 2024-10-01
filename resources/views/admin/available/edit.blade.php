<!-- Tombol untuk membuka modal -->
<button role="button" class="btn btn-sm btn-warning mr-2" data-bs-toggle="modal"
    data-bs-target=".formEdit{{ $available->id }}"><i class="fas fa-edit"></i><span class="d-none d-sm-inline">
        {{ __('Edit') }}</span></button>

<!-- Modal -->
<div class="modal fade formEdit{{ $available->id }}" tabindex="-1" role="dialog" aria-hidden="">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @if (auth()->user()->role == 'admin')
                <form method="POST" action="{{ route('admin.available.update', $available->id) }}"
                    enctype="multipart/form-data">
            @endif
            @csrf
            @method('PUT')
            <div class="modal-header">
                <h5 class="modal-title" id="modalFormLabel">{{ __('Edit Data') }}</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">{{ __('Name') }}</label>
                            <input type="number" class="form-control @error('name') is-invalid @enderror"
                                placeholder="name" name="name" id="name" value="{{ $available->name ?? '-' }}"
                                required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">{{ __('Profile') }}</label>
                        <input id="image-input-0" accept="image/*" type="file"
                            class="form-control @error('img0') is-invalid @enderror" 
                            placeholder="img0" name="img0" id="img0">
                        @error('img0')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Looping input image fields -->
                    @for ($i = 1; $i <= 6; $i++)
                        <div class="mb-3">
                            <label class="form-label">{{ __('Image') }} {{ $i }}</label>
                            <input id="image-input-{{ $i }}" accept="image/*" type="file"
                                class="form-control @error('img{{ $i }}') is-invalid @enderror" 
                                placeholder="img{{ $i }}" name="img{{ $i }}" id="img{{ $i }}">
                            @error('img{{ $i }}')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    @endfor
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Tutup') }}</button>
                <button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
            </div>
            </form>
        </div>
    </div>
</div>
