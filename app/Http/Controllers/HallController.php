<?php

namespace App\Http\Controllers;

use App\Http\Requests\HallRequest;
use App\Models\Hall;
use Illuminate\Http\Request;

class HallController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): string
    {
        return Hall::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HallRequest $request): bool
    {
        return Hall::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Request
    {
        return Hall::findOfFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HallRequest $request, Hall $hall): bool
    {
        $hall->fill($request->validated());
        return $hall->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hall $hall): null
    {
        if ($hall->delete()) {
            return response(null, 204);
        }
        return null;
    }
}
