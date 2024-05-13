<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $popular = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIwYWU5MTM3MWU5MDUyNmQzNzM4YTVhMjc2ZDllOTI5NCIsInN1YiI6IjY0YjE5YTYxMGJiMDc2MDEwYzUwMzIyNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.GSiXuuEthTDd1jfYVaxW4KONmil4QDs6eMUcPJgmF9M')
        ->get('https://api.themoviedb.org/3/movie/popular')
        ->json('results');
        
        $genreArray = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIwYWU5MTM3MWU5MDUyNmQzNzM4YTVhMjc2ZDllOTI5NCIsInN1YiI6IjY0YjE5YTYxMGJiMDc2MDEwYzUwMzIyNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.GSiXuuEthTDd1jfYVaxW4KONmil4QDs6eMUcPJgmF9M')
        ->get('https://api.themoviedb.org/3/genre/movie/list')
        ->json('genres');
        $nowPlaying = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIwYWU5MTM3MWU5MDUyNmQzNzM4YTVhMjc2ZDllOTI5NCIsInN1YiI6IjY0YjE5YTYxMGJiMDc2MDEwYzUwMzIyNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.GSiXuuEthTDd1jfYVaxW4KONmil4QDs6eMUcPJgmF9M')
        ->get('https://api.themoviedb.org/3/movie/now_playing')
        ->json('results');
        $genres = collect($genreArray)->mapWithKeys(function($genre){
            return [$genre['id'] => $genre['name']];
        });
        // dump($nowPlaying);
        return view('index',compact('popular','genres','nowPlaying'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIwYWU5MTM3MWU5MDUyNmQzNzM4YTVhMjc2ZDllOTI5NCIsInN1YiI6IjY0YjE5YTYxMGJiMDc2MDEwYzUwMzIyNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.GSiXuuEthTDd1jfYVaxW4KONmil4QDs6eMUcPJgmF9M')
        ->get('https://api.themoviedb.org/3/movie/'.$id.'?append_to_response=credits,videos,images')
        ->json();
        return view('show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
