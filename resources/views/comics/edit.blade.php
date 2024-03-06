@extends('layouts.app')

@section('page-title', $comic->title. 'edit')

@section('main-content')
<h1>
    {{ $comic->title }} edit
</h1>

<div class="row">
    <div class="col">
        <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">titolo</label>
                <input
                    value="{{ $comic->title }}"
                    type="text" class="form-control" name="title" id="title" placeholder="inserisci il titolo.." minlength="0" maxlength="150">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <input
                    value="{{ $comic->description }}"
                    type="text" class="form-control" name="description" id="description" placeholder="inserisci la src...." minlength="0">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">thumb</label>
                <input
                    value="{{ $comic->thumb}}"
                    type="text" class="form-control" name="thumb" id="thumb" placeholder="inserisci il tipo.." minlength="0">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">prezzo</label>
                <input 
                    value="{{ $comic->price }}"
                    type="number" min="1" max="40" "form-control" name="price" id="price" placeholder="inserisci il tipo.." minlength="0">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">series</label>
                <input 
                    value="{{ $comic->series }}"
                    type="text" class="form-control" name="series" id="series" placeholder="inserisci il tipo.." minlength="1" maxlength="50">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">sale_date</label>
                <input 
                    value="{{ $comic->sale_date }}"
                    type="date" class="form-control" name="sale_date" id="sale_date" placeholder="inserisci il tipo..">
            </div>
            
            <div class="mb-3">
                <label for="type" class="form-label">tipo</label>
                <input
                    value="{{ $comic->type }}"
                    type="text" class="form-control" name="type" id="type" placeholder="inserisci il tipo.." minlength="1" maxlength="50">
            </div>
            <div>
                <button type="submit" class="btn btn-warning   w-100">
                    Modifica
                </button>
            </div>
        </form>
    </div>
</div>
@endsection