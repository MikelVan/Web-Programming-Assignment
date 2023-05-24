@extends('layouts.default', ['categories' => $categories])

@section('title')
    Publisher
@endsection

@section('content')
    <div class="w-50">
        <div class="p-1 bg-secondary text-white fs-5">
            Publisher List
        </div>
        <div class="container-fluid p-0 mt-2">
            <div class="row">
                @foreach ($publishers as $p)
                    <div class="col-3">
                        <div class="card">
                            <img src="{{ asset($p->image) }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title fw-normal">{{ $p->name }}</h5>
                                <div class="card-text">
                                    {{ $p->address }}
                                </div>
                                <a href="{{ route('publisherdetail', [$p->id]) }}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection