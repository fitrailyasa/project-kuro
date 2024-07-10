@extends(auth()->user()->role == 'admin' ? 'layouts.admin.app' : 'layouts.client.app')

@section('title', 'Profile')

@section('textProfile', 'aktif rounded')

@section('content')
    <h3 class="text-center font-weight-bold">EDIT PROFILE</h3>
    <div class="d-flex justify-content-center align-items-center {{ auth()->user()->role == 'admin' ? '' : 'mt-5' }}">
        <div class="card d-flex justify-content-center align-items-center mt-3 pb-2" style="width: 550px;">
            <div class="">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
            <div class="d-flex justify-content-center align-items-center mt-3 mx-3">
                <form action="{{ route('profile.update') }}" method="POST" class="row">
                    @csrf
                    @method('PUT')
                    <div class="form-group col-md-6 px-3">
                        <label for="name">Name</label>
                        <input class="form-control @error('name') is-invalid @enderror" name="name" required autofocus
                            type="text" name="name" id="name" value="{{ $user->name }}" placeholder="Name...">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 px-3">
                        <label for="no_hp">Phone</label>
                        <input class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" required
                            type="text" name="no_hp" id="no_hp" value="{{ $user->no_hp }}" placeholder="Phone">
                        @error('no_hp')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 px-3">
                        <label for="alamat">Adrress</label>
                        <input class="form-control @error('alamat') is-invalid @enderror" name="alamat" required
                            type="text" name="alamat" id="alamat" value="{{ $user->alamat }}"
                            placeholder="Lampung...">
                        @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 px-3">
                        <label for="email">Email</label>
                        <input class="form-control @error('email') is-invalid @enderror" name="email" required autofocus
                            type="text" name="email" id="email" value="{{ $user->email }}"
                            placeholder="name@gmail.com">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 px-3">
                        <label for="password">Password</label>
                        <input class="form-control @error('password') is-invalid @enderror" name="password" type="password"
                            id="password" placeholder="password">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 px-3">
                        <label for="password_confirmation">Password Confirmation</label>
                        <input class="form-control @error('password_confirmation') is-invalid @enderror"
                            name="password_confirmation" type="password" id="password_confirmation"
                            placeholder="password confirmation">
                        @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-block aktif mt-3">Save</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
@endsection
