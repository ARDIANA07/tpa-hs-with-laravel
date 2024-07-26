@extends('layout.master')
@section('title', 'Dashboard')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ $title }}</h1>
            </div>
        </section>
        <section class="section-body">
            <marquee behavior="left" direction="">
                <h3>Selamat Datang di Sistem Manajemen Data TPA Hidayatus Shibyan Karangkunti Yogyakarta</h3>
            </marquee>
            <div class="text-center">
                <img src="{{ asset('assets/img/logo-tpa.jpg') }}" alt="logo-tpa" width="30%">
            </div>
        </section>
    </div>
@endsection
