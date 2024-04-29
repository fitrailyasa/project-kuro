@extends('layouts.client.app')

@section('title', 'Detail Studio')

@section('textStudio', 'bg-dark rounded')

@section('content')

    <div class="container text-center my-5 py-5">
        <img src="{{ asset('assets/img/' . $studio->img) }}" alt="">
        <p>{{ $studio->name }}</p>
        <p>{{ $studio->desc }}</p>
    </div>

@endsection
