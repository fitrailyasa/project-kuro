@extends('layouts.client.app')

@section('title', 'Photographer')

@section('textPhotographer', 'aktif rounded')

@section('content')

    <div class="py-5" style="background-image: url('{{ asset('assets/img/pk (16).jpg') }}'); background-size: cover;">
        <div class="container pt-5 pb-3">
            <div class="text-center d-flex flex-wrap justify-content-center">
                @foreach ($packages as $package)
                    <div class="col-sm-4 col-md-3 p-3"><a href="{{ route('photographer.show', $package->id) }}"
                            class="btn text-white bg-dark border col-12">{{ $package->name }}</a></div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {{ $packages->links() }}
            </div>
        </div>
    </div>

@endsection
