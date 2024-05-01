@extends('layouts.client.app')

@section('title', 'Studio')

@section('textStudio', 'bg-dark rounded')

@section('content')

    <div class="container text-center my-5 py-5">
        <h4 class="text-white font-weight-bold">{{ __('Studio') }}</h4>
        <div class="text-center d-flex flex-wrap justify-content-center">
            @foreach ($packages as $package)
                <div class="col-sm-4 col-md-3 p-3"><a href="{{ route('studio.show', $package->id) }}"
                        class="btn text-white bg-dark border col-12">{{ $package->name }}</a></div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {{ $packages->links() }}
        </div>
    </div>

@endsection
