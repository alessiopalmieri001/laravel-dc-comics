@extends('layouts.app')

@section('page-title', 'comics_index')

@section('main-content')
<div class="row">
    <div class="col">
        <div class="mb-4">
            <a href="{{ route('comics.create') }}" class="btn btn-primary"">
                aggiungi
            </a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">price</th>
                    <th scope="col">series</th>
                    <th scope="col">sale date</th>
                    <th scope="col">type</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{ $comic->id}}</th>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->description }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>
                        <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary">
                            Vai al film!
                        </a>
                        <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-warning">
                            Modifica!
                        </a>
                        <form onsubmit="return confirm('sei sicuro?');" action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                            
                            @csrf
                            @method('DELETE')
                            <button type='submit' class="btn btn-danger">
                                elimina
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>

@endsection