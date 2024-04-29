@extends('layouts.client.app')

@section('title', 'Studio')

@section('textStudio', 'bg-dark rounded')

@section('content')

    <div class="container text-center my-5 py-5">
        <h4 class="text-white font-weight-bold">{{ __('Studio') }}</h4>
        <div class="text-center d-flex flex-wrap justify-content-center">
            @foreach ($studios as $studio)
                <div class="col-sm-4 col-md-3 p-3"><a href="{{ route('studio.show', $studio->id) }}"
                        class="btn text-white bg-dark border col-12">{{ $studio->name }}</a></div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {{ $studios->links() }}
        </div>
    </div>

@endsection
