@extends('layouts.client.app')

@section('title', 'Detail Photographer')

@section('textPhotographer', 'aktif rounded')

@section('content')

    <div class="py-5">
        <div class="container pt-5 pb-3">
            <div class="card card-primary card-outline">
                <div class="row">
                    <div class="col-md-12 m-3">
                        <a href="{{ route('photographer') }}"><i class="fa fa-arrow-left text-dark"></i></a>
                    </div>
                    @for ($i = 1; $i <= 6; $i++)
                        <div class="col-md-4">
                            @php
                                $imgField = 'img' . $i;
                            @endphp

                            @if ($available->$imgField == null)
                                @if ($i == 1)
                                    <img src="{{ asset('assets/profile/default.png') }}" alt="{{ $available->name }}"
                                        width="300">
                                @endif
                            @else
                                <a href="#" data-toggle="modal"
                                    data-target="#myModal{{ $available->id }}-{{ $i }}">
                                    <img class="img img-fluid rounded"
                                        src="{{ asset('assets/img/' . $available->$imgField) }}"
                                        alt="{{ $available->$imgField }}" width="300" loading="lazy">
                                </a>

                                <!-- Modal -->
                                <div class="modal fade" id="myModal{{ $available->id }}-{{ $i }}"
                                    tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 class="card-title">{{ $available->name }} - Image
                                                            {{ $i }}</h3>
                                                        <div class="card-tools">
                                                            <button type="button" class="btn btn-tool"
                                                                data-card-widget="maximize"><i
                                                                    class="fas fa-expand"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <img class="img img-fluid col-12"
                                                            src="{{ asset('assets/img/' . $available->$imgField) }}"
                                                            alt="{{ $available->$imgField }}">
                                                        <!-- Download Button -->
                                                        <a href="{{ asset('assets/img/' . $available->$imgField) }}"
                                                            download="{{ $available->$imgField }}"
                                                            class="btn btn-success mt-2 col-12">
                                                            Download Image
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>

@endsection
