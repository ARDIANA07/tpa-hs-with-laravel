@extends('layout.master')
@section('title', 'Galery')

@section('content')
    <div class="div main-content">
        <section class="section text-center">
            <div class="section-header">
                <h2>{{ $title }}</h2>
            </div>
            <div class="card-images text-center">
                <img src="{{ asset('assets/img/tpa.JPG') }}" class="img-fluid" alt="Responsive image">
            </div>
        </section>
    </div>
@endsection
