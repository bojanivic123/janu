<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showCreateMovie()
    {
        return view("pages.createmovie"); 
    }

    public function index()
    {
        $movies = Movie::all();
        $latestMovies = Movie::latest()->take(5)->get();
        return view("pages.movies", compact("movies", "latestMovies")); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required|string|min:3|max:30",
            "genre" => "required|string|min:6|max:30",
            "director" => "string|min:6|max:30",
            "year_of_realize" => "integer|min:1900|max:2024",
            "story" => "string|max:1000" 
        ]);

        $newMovie = Movie::create($request->all());
        return redirect("/add")->with("status", "Movie successfully created"); 
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::find($id);
        return view("pages.movie", compact("movie")); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
