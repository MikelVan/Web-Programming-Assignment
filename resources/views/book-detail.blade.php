@extends('layouts.default', ['categories' => $categories])

@section('title')
    Book Detail
@endsection

@section('content')
    <div class="w-50">
        <div class="p-1 bg-secondary text-white fs-5">
            Book Detail
        </div>
        <div class="container-fluid p-0 mt-2">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <img src="{{ asset($book->image) }}" class="card-img-top">
                        <div class="card-body">
                            <div class="card-text">
                                <p>Title: {{ $book->title }}</p>
                                <p>Author: {{ $book->author }}</p>
                                <p>Publisher: {{ $book->publisher->name }}</p>
                                <p>Year: {{ $book->year }}</p>
                                <p>Synopsis: </p>
                                <p>{{ $book->synopsis }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection