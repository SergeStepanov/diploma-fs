<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use App\Models\Movie;
use Illuminate\View\View;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): string
    {
        return Movie::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.popups.add_hall');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MovieRequest $request): Movie
    {
        return Movie::create($request->validated());

    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MovieRequest $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
