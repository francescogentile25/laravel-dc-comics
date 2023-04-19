<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use function PHPSTORM_META\type;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        $page_title = 'Fumetti';
        // $data = [
        //     'comics' => $comics
        // ];

        return view('comics.index', compact('comics', 'page_title'));
    }
    public function show(Comic $comic)
    {
        //$comics = Comic::findOrFail($id); findorFail se nopn trova il valore mi restituisce una paginea 404
        return view('comics.show', compact('comic'));
    }
    public function create()
    {
        return view('comics.create');
    }
    public function store(Request $request)
    {
        // $data = $request->all();
        $data = $request->validate([
            'title' => 'required|max:255|min:3',
            'description' => 'required',
            'thumb' => 'required|max:255|url',
            'price' => 'required|numeric',
            'series' => 'required|string',
            'sale_date' => 'required|date',
            'type' => [
                'required',
                Rule::in(['comic book', 'graphic novel'])
            ]
        ]);
        // $new_comic = new Comic();

        // $new_comic->title = $data['title'];
        // $new_comic->description = $data['description'];
        // $new_comic->thumb = $data['thumb'];
        // $new_comic->price = $data['price'];
        // $new_comic->series = $data['series'];
        // $new_comic->sale_date = $data['sale_date'];
        // $new_comic->type = $data['type'];

        // $new_comic->save();
        $new_comic = Comic::create($data);

        // return redirect()->route('pastas.show', $new_pasta);
        return to_route('comics.show', $new_comic);
    }
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }
    public function update(Request $request, Comic $comic)
    {
        $data = $request->validate([
            'title' => 'required|max:255|min:3',
            'description' => 'required',
            'thumb' => 'required|max:255|url',
            'price' => 'required|numeric',
            'series' => 'required|string',
            'sale_date' => 'required|date',
            'type' => [
                'required',
                Rule::in(['comic book', 'graphic novel'])
            ]
        ]);
        $data = $request->all();
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        $comic->save();
        return to_route('comics.show', $comic);
    }
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index');
    }
}
