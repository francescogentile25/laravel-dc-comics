<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

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
}
