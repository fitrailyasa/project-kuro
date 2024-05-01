@extends('layouts.client.app')

@section('title', 'Detail Photographer')

@section('textPhotographer', 'bg-dark rounded')

@section('content')

    <div class="container text-center my-5 py-5">
        <img src="{{ asset('assets/img/' . $package->img) }}" alt="">
        <p>{{ $package->name }}</p>
        <p>{{ $package->desc }}</p>
    </div>

@endsection
