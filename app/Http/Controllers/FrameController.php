<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFrameRequest;
use App\Http\Requests\UpdateFrameRequest;
use App\Models\Frame;
use Inertia\Inertia;

class FrameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Admin/Frames/index', ['frames' => Frame::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Admin/Frames/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFrameRequest $request)
    {
        $frame = Frame::create($request->except('src_animated', 'src_static'));

        $destinationPath = 'storage/app_assets/'.$frame->id.'-'.$frame->name.'/';

        $fileRealNameSrcStatic = $request->src_static->getClientOriginalName();

        $fileRealNameSrcAnimated = $request->src_animated->getClientOriginalName();

        $fileNameSrcStatic = $frame->id. '-' . time() . '-' . $fileRealNameSrcStatic;

        $fileNameSrcAnimated = $frame->id. '-' . time() . '-' . $fileRealNameSrcAnimated;

        $request->src_static->move($destinationPath, $fileNameSrcStatic);

        $request->src_animated->move($destinationPath, $fileNameSrcAnimated);

        $frame->src_static = asset('/') . $destinationPath . '/' . $fileNameSrcStatic;
        $frame->src_animated = asset('/') . $destinationPath . '/' . $fileNameSrcAnimated;

        $frame->save();

        return redirect()->route('admin.frame.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(frame $frame)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(frame $frame)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFrameRequest $request, frame $frame)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(frame $frame)
    {
        //
    }
}
