<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//model
use App\Models\Comic;

use function Laravel\Prompts\alert;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();


        return view('comics.index' , compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validationResult = $request->validate([
            'title' => 'required|max:150|min:0' ,
            'description'=> 'required',
            'thumb'=> 'required|url',  
            'price'=> 'required|numeric',
            'series'=> 'nullable!max:50|min:1',
            'sale_date'=> 'nullable|numeric|date|min:1',
            'type' => 'nullable|max:50|min:1',
        ]);

        

        $comic = Comic::create($validationResult);

        /* $comic = new Comic();
        $comic->title = $comicData['title'];
        $comic->description = $comicData['description'];
        $comic->thumb = $comicData['thumb'];
        $replacePrice = str_replace('$', '', $comicData['price']);
        $comic->price = intval($replacePrice);
        $comic->series = $comicData['series'];
        $comic->sale_date = $comicData['sale_date'];
        $comic->type = $comicData['type'];
        $comic->save(); */
        
        return redirect()->route('comics.show', ['comic' => $comic->id]);
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::findorfail($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit' , compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $comicData = $request->all();

        $comic->update($comicData);
        /* $comic = new Comic();
        $comic->title = $comicData['title'];
        $comic->description = $comicData['description'];
        $comic->thumb = $comicData['thumb'];
        $replacePrice = str_replace('$', '', $comicData['price']);
        $comic->price = intval($replacePrice);
        $comic->series = $comicData['series'];
        $comic->sale_date = $comicData['sale_date'];
        $comic->type = $comicData['type'];
        $comic->save(); */

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        

        $comic->delete();

        return redirect()->route('comics.index');

    }
}
