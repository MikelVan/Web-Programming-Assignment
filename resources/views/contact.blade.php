@extends('layouts.default', ['categories' => $categories])

@section('title')
    Contact
@endsection

@section('content')
    <div class="w-50">
        <div class="p-1 bg-secondary text-white fs-5">
            Contact
        </div>
        <div class="mt-3">
            <h3 class="fw-normal">Store Address :</h3>
            <p>Jalan Pembangunan Baru Raya,</p>
            <p>Kompleks Pertokoan Emerald Blok III/12</p>
            <p>Bintaro, Tangerang Selatan</p>
            <p>Indonesia</p>

            <h3 class="fw-normal">Open Daily:</h3>
            <p>08.00 - 20.00</p>

            <h3 class="fw-normal">Contact :</h3>
            <p>Phone : 021-08899776655</p>
            <p>Email : happybookstore@happy.com</p>
        </div>
    </div>
@endsection