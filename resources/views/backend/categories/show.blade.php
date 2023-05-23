@extends('backend.layouts.master')

@section('main_content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                Category Details Informations
            </div>
            <div class="card-body">
                <p>name : {{ $category->name ?? '' }}</p>
                <p>Description : {{ $category->description ?? '' }}</p>
            </div>
            <div class="card-footer m-auto">
                <a class="btn btn-sm btn-primary" href="{{ route('category.index')}}"><i class="bi bi-list"></i></a>
            </div>
        </div>
    </div>


@endsection
