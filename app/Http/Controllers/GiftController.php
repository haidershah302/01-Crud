<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use App\Http\Requests\StoreGiftRequest;
use App\Http\Requests\UpdateGiftRequest;
use Illuminate\Support\Str;
use Inertia\Inertia;

class GiftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Admin/Gifts/index', ['gifts' => Gift::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Admin/Gifts/create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGiftRequest $request)
    {
        $gift = Gift::create($request->except('src_animated', 'src_static'));

        $fields = ['src_static', 'src_animated'];
        foreach ($fields as $field) {
            $gift->$field = $this->handleFileUpload($gift->id, $gift->name, $request->$field, 'gifts', $field);
        }

        $gift->save();

        return redirect()->route('admin.gift.index')->with('message', ['success' => 'Gift created successfully.']);
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
    public function show(Gift $gift)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gift $gift)
    {
        return Inertia::render('Admin/Gifts/update', ['gift' => $gift]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGiftRequest $request, Gift $gift)
    {
        $data = $request->except('src_animated', 'src_static');

        $fields = ['src_static', 'src_animated'];
        foreach ($fields as $field) {
            if ($request->$field != null) {
                $data[$field] = $this->handleFileUpload($gift->id, $gift->name, $request->$field, 'gifts', $field);
            }
        }

        $gift->update($data);

        return redirect()->route('admin.gift.index')->with('message', ['success' => 'Gift Updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gift $gift)
    {
        $gift->delete();

        return redirect()->route('admin.gift.index')->with('message', ['success' => 'Gift deleted successfully.']);
    }
}
