@extends('layouts.app')

@section('page-title', 'singolfilm')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card" style="width: 18rem;">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="card-text">{{ $comic->description }}</p>
                <a href="/" class="btn btn-primary">torna nella home</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection