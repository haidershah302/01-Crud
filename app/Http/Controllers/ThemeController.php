<?php

namespace App\Http\Controllers;

use App\Models\Frame;
use App\Models\Theme;
use App\Http\Requests\StoreThemeRequest;
use App\Http\Requests\UpdateThemeRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Admin/Room/Theme/index', ['themes' => Theme::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Admin/Room/Theme/create', ['frames' => Frame::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreThemeRequest $request)
    {
        $theme = Theme::create($request->except('frame', 'background', 'thumbnail'));

        $frame = Frame::find($request->frame)->update(['theme_id' => $theme->id]);

        dd($theme->frame, $frame);
    }

    /**
     * Display the specified resource.
     */
    public function show(Theme $theme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Theme $theme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateThemeRequest $request, Theme $theme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Theme $theme)
    {
        //
    }
}
