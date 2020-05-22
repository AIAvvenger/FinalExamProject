<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index(){
        $artist = Artist::all();
        return view('home', compact(artists));
    }
    public function create(){
        return view('create');
    }
    
}
