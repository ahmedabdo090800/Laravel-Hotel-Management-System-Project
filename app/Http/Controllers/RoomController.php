<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoomRequest;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.room');
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

        $data=new Room();
        				
        $data->room_title=$request->title_room;
        $data->description=$request->description;
        $data->room_type=$request->room_type;
        $data->image=$request->image;
        $data->wifi=$request->wifi;
        $data->price=$request->price;
        $image=$request->image;


if($image){
    $newImage=time().'.'.$image->getClientOriginnalExtension();
    $request->image->move('room',$newImage);
    $data->image=$newImage;

}
        $data ->save();
        return back()->with('status-message','The Room is Added Successfully');
        // $data=$request->validated();
        
        // Room::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dara=Room::all();
        return view('admin.view_room');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
