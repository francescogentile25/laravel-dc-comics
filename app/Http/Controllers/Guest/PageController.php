<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        $comics = Comic::all();
        // $data = [
        //     'comics' => $comics
        // ];
        $data = compact('comics');
        return view('comics.index', $data);
    }
}
