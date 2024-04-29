@extends('layouts.client.app')

@section('title', 'Photographer')

@section('textPhotographer', 'bg-dark rounded')

@section('content')

    <div class="container text-center my-5 py-5">
        <h4 class="text-white font-weight-bold">{{ __('Photographer') }}</h4>
        <div class="text-center d-flex flex-wrap justify-content-center">
            @foreach ($photographers as $photographer)
                <div class="col-sm-4 col-md-3 p-3"><a href="{{ route('photographer.show', $photographer->id) }}"
                        class="btn text-white bg-dark border col-12">{{ $photographer->name }}</a></div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {{ $photographers->links() }}
        </div>
    </div>

@endsection
