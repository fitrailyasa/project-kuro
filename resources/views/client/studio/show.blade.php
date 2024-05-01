@extends('layouts.client.app')

@section('title', 'Detail Studio')

@section('textStudio', 'aktif rounded')

@section('content')

    <div class="py-5" style="background-image: url('{{ asset('assets/img/pk (16).jpg') }}'); background-size: cover;">
        <div class="container pt-5 pb-3">
            <div class="card card-primary card-outline">
                <div class="row p-3">
                    <div class="col-md-1">
                        <a href="{{ route('studio') }}"><i class="fa fa-arrow-left text-dark"></i></a>
                    </div>
                    <div class="col-md-6 rounded text-center">
                        <img src="{{ asset('assets/img/' . $package->img) }}" alt="">
                    </div>
                    <div class="col-md-5 text-justify p-3">
                        <h2>{{ $package->name }}</h2>
                        <p>{{ $package->desc }}</p>
                        <div class="text-center">
                            <a class="btn aktif btn-block" href="{{ route('studio.order', $package->id) }}"><i
                                    class="fa fa-shopping-cart"></i>
                                {{ __('BOOKING NOW') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
