<?php

namespace App\Http\Controllers;

use App\Models\RoomTheme;
use App\Http\Requests\StoreRoomThemeRequest;
use App\Http\Requests\UpdateRoomThemeRequest;
use Inertia\Inertia;

class RoomThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Admin/Room/Theme/index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Admin/Room/Theme/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoomThemeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RoomTheme $roomTheme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RoomTheme $roomTheme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoomThemeRequest $request, RoomTheme $roomTheme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RoomTheme $roomTheme)
    {
        //
    }
}
