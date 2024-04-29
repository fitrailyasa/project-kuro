@extends('layouts.client.app')

@section('title', 'Beranda')

@section('textHome', 'bg-dark rounded')

@section('content')

    <div class="text-center py-5 vh-100" style="background-image: url('assets/img/pk (5).jpg'); background-size: cover;">
        <div class="d-flex justify-content-center align-items-center">
            <div class="kartu">
                <h4 class="fw-bold">{{ __('Welcome') }}</h4>
                <p>Foto Graduation Lampung dan Jabodetabek</p>
            </div>
        </div>
    </div>

@endsection
