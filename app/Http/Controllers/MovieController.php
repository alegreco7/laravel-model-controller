<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class MovieController extends Controller
{
    // Metodo per visualizzare l'elenco completo dei film
    public function index()
    {
        // Recupera tutti i film dal database
        $movies = Movie::all();
        // Passa l'elenco dei film alla vista 'home'
        return view('home', compact('movies'));
    }

    // Metodo per visualizzare i dettagli di un film specifico
    public function showFunction($param)
    {
        // Recupera tutti i film dal database
        $movies = Movie::all();
        // Trova il film corrispondente al parametro fornito
        $movie = $movies->find($param);
        // Passa i dettagli del film alla vista 'show'
        return view('show', compact('movie'));
    }
};
