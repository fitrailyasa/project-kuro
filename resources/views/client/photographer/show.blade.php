@extends('layouts.client.app')

@section('title', 'Detail Photographer')

@section('textPhotographer', 'bg-dark rounded')

@section('content')

    <div class="container text-center my-5 py-5">
        <img src="{{ asset('assets/img/' . $photographer->img) }}" alt="">
        <p>{{ $photographer->name }}</p>
        <p>{{ $photographer->desc }}</p>
    </div>

@endsection
