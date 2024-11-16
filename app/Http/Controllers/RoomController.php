<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use App\Models\Room;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;

class RoomController extends Controller
{

    public function myRoom()
    {
        if (auth()->user()->room === null){
            return Inertia::render('Room/create');
        } else {
            $owner = auth()->user();
            $theme = $owner->room->themes()->wherePivot('status', true)->first();
            return Inertia::render('Room/myRoom', [
                'owner' => $owner,
                'room' => $owner->room,
                'theme' => $theme
            ]);
        }
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::all();
        return Inertia::render('Admin/Room/index', ['rooms' => $rooms]);
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
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:rooms'],
            'greetings' => ['required', 'string', 'max:255'],
            'image' => ['required', 'image', 'mimes:jpeg,jpg,png,svg,webp', 'max:3000'],
        ]);

        $authUser = auth()->user();

        $authUser->room()->create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'greetings' => $request->greetings,
        ]);
        auth()->user()->room->themes()->attach(1, ['status' => true]);

        $authUser->room->image = $this->handleFileUpload($authUser->room->id, $authUser->room->name, $request->image, 'room', 'image');

        $authUser->room->save();

        return redirect()->route('myRoom');
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
    public function show($room)
    {
        $roomWithUser = Room::where('ulid', $room)->with('user')->firstOrFail();
        $theme = $roomWithUser->themes()->wherePivot('status', true)->firstOrFail();
        $gifts = Gift::all()->groupBy('type');
        return Inertia::render('Room/myRoom', [
            'owner' => $roomWithUser->user,
            'room' => $roomWithUser,
            'theme' => $theme,
            'gifts' => $gifts,
        ]);
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
