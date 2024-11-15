<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFrameRequest;
use App\Http\Requests\UpdateFrameRequest;
use App\Models\Frame;
use Illuminate\Support\Str;
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

        $fields = ['src_static', 'src_animated'];
        foreach ($fields as $field) {
            $frame->$field = $this->handleFileUpload($frame->id, $frame->name, $request->$field, 'frames', $field);
        }

        $frame->save();

        return redirect()->route('admin.frame.index')->with('message', ['success' => 'Frame created successfully.']);
    }

    private function handleFileUpload($table_id, $table_name, $item, $folder, $type)
    {
        $destinationPath = 'storage/app_assets/' . $folder . '/' .$table_id. '-' . Str::kebab($table_name) .'/';

        $fileName = $type. '-' . $table_id. '-' . time() . '-' . Str::uuid() . '-' . $item->getClientOriginalName();

        $item->move($destinationPath, $fileName);

        return asset('/') . $destinationPath . $fileName;
    }

    /**
     * Display the specified resource.
     */
    public function show(Frame $frame)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Frame $frame)
    {
        return Inertia::render('Admin/Frames/update', ['frame' => $frame]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFrameRequest $request, Frame $frame)
    {
        $data = $request->except('src_animated', 'src_static');

        $fields = ['src_static', 'src_animated'];
        foreach ($fields as $field) {
            if ($request->$field != null) {
                $data[$field] = $this->handleFileUpload($frame->id, $frame->name, $request->$field, 'frames', $field);
            }
        }

        $frame->update($data);

        return redirect()->route('admin.frame.index')->with('message', ['success' => 'Frame Updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Frame $frame)
    {
        $frame->delete();

        return redirect()->route('admin.frame.index')->with('message', ['success' => 'Frame deleted successfully.']);
    }
}
