<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RoomController extends Controller
{

    public function myRoom()
    {
        if (!auth()->user()->room()->exists()){
            return Inertia::render('Room/create');
        } else {
            return Inertia::render('Room/myRoom');
        }
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['room_name' => 'required', 'string', 'max:255']);

        auth()->user()->room()->firstOrCreate([
            'room_name' => $request->room_name,
            'user_id' => auth()->user()->id,
        ]);

        return Inertia::render('Room/myRoom');
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoomRequest $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        //
    }
}
