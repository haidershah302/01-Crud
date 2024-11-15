<?php

namespace App\Http\Controllers;

use App\Models\Frame;
use App\Models\Theme;
use App\Http\Requests\StoreThemeRequest;
use App\Http\Requests\UpdateThemeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
        $theme = Theme::create($request->except('background', 'thumbnail', 'seat','seat_ring'));
        $theme->background = $this->handleFileUpload($theme->id, $theme->name, $request->background, 'themes', 'background');
        $theme->thumbnail = $this->handleFileUpload($theme->id, $theme->name, $request->thumbnail, 'themes', 'thumbnail');
        $theme->seat_ring = $this->handleFileUpload($theme->id, $theme->name, $request->seat_ring, 'themes', 'seat_ring');
        $theme->seat = $this->handleFileUpload($theme->id, $theme->name, $request->seat, 'themes', 'seat');

        $theme->save();

        return redirect()->route('admin.room.theme.index')->with('message', ['success' => 'Theme created successfully.']);
    }

    private function handleFileUpload($table_id, $table_name, $item, $folder, $type)
    {
        $destinationPath = 'storage/app_assets/' .$folder. '/' .$table_id. '-' . Str::kebab($table_name) .'/';

        $fileName = $type. '-' . $table_id. '-' . time() . '-' . Str::uuid() . '-' . $item->getClientOriginalName();

        $item->move($destinationPath, $fileName);

        return asset('/') . $destinationPath . $fileName;
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
        return Inertia::render('Admin/Room/Theme/update', ['theme' => $theme]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateThemeRequest $request, Theme $theme)
    {
        $data = $request->except('background', 'thumbnail', 'seat','seat_ring');
        $fields = ['background', 'thumbnail', 'seat_ring', 'seat'];
        foreach ($fields as $field) {
            if ($request->$field != null) {
                $data[$field] = $this->handleFileUpload($theme->id, $theme->name, $request->$field, 'themes', $field);
            }
        }

        $theme->update($data);

        return redirect()->route('admin.room.theme.index')->with('message', ['success' => 'Theme Updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Theme $theme)
    {
        $theme->delete();

        return redirect()->route('admin.room.theme.index')->with('message', ['success' => 'Theme Deleted successfully.']);
    }
}
