@extends('layouts.app')

@section('page-title', 'create')

@section('main-content')
<h1>
    comics create
</h1>

<div class="row">
    <div class="col">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">titolo</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="inserisci il titolo.." minlength="0" maxlength="150">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="inserisci la src...." minlength="0">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">thumb</label>
                <input type="text" class="form-control" name="thumb" id="thumb" placeholder="inserisci il tipo.." minlength="0">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">prezzo</label>
                <input type="number" min="1" max="40" "form-control" name="price" id="price" placeholder="inserisci il tipo.." minlength="0">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">series</label>
                <input type="text" class="form-control" name="series" id="series" placeholder="inserisci il tipo.." minlength="1" maxlength="50">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">sale_date</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" placeholder="inserisci il tipo..">
            </div>
            
            <div class="mb-3">
                <label for="type" class="form-label">tipo</label>
                <input type="text" class="form-control" name="type" id="type" placeholder="inserisci il tipo.." minlength="1" maxlength="50">
            </div>
            <div>
                <button type="submit" class="btn btn-success w-100">
                    + aggiungi
                </button>
            </div>
        </form>
    </div>
</div>
@endsection