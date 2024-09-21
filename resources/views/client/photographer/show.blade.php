@extends('layouts.client.app')

@section('title', 'Detail Photographer')

@section('textPhotographer', 'aktif rounded')

@section('content')

    <div class="py-5">
        <div class="container pt-5 pb-3">
            <div class="card card-primary card-outline">
                <div class="row p-3">
                    <div class="col-md-1">
                        <a href="{{ route('photographer') }}"><i class="fa fa-arrow-left text-dark"></i></a>
                    </div>
                    <div class="col-md-6 rounded text-center">
                        <img class="img img-fluid" width="500" src="{{ asset('assets/img/' . $package->img) }}"
                            alt="">
                    </div>
                    <div class="col-md-5 text-justify p-3">
                        <h2>{{ $package->name }}</h2>
                        <p>{{ $package->desc }}</p>
                        <div class="text-center">
                            <a class="btn aktif btn-block" href="{{ route('photographer.order', $package->id) }}"><i
                                    class="fa fa-shopping-cart"></i>
                                {{ __('BOOKING NOW') }}</a>
                                @if (session('alert'))
                                    <div class="alert alert-warning" role="alert">
                                        {{ session('alert') }}
                                    </div>
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
