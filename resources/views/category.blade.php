@extends('layouts.default', ['categories' => $categories])

@section('title')
    {{ $category }}
@endsection

@section('content')
    <div class="w-50">
        <div class="p-1 bg-secondary text-white fs-5">
            {{ $category }}
        </div>
        <div class="container-fluid p-0 mt-2">
            <div class="row">
                @foreach ($books as $b)
                    <div class="col-3">
                        <div class="card">
                            <img src="{{ asset($b->image) }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title fw-normal">{{ $b->title }}</h5>
                                <div class="card-text">
                                    by <br>
                                    {{ $b->author }}
                                </div>
                                <a href="{{ route('bookdetail', [$b->id]) }}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection