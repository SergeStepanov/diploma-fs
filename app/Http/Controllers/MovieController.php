<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use App\Models\Movie;
use Illuminate\Http\Request;
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
    public function show(string $id): Request
    {
        return Movie::findOfFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MovieRequest $request, Movie $movie): bool
    {
        $movie->fill($request->validated());
        return $movie->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie): null
    {
        if ($movie->delete()) {
            response(null, 204);
        }

        return null;
    }
}
