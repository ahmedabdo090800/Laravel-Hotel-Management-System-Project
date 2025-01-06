<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoomRequest;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



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
    $newImage=time().'.'.$image->getClientOriginalExtension();
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
    public function show()
    {
        $data=Room::all();
        return view('admin.view_room',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $data=Room::find($id);
        return view('admin.room_edit',compact('data'));

        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $data=Room::find($id);
        $data->room_title=$request->title_room;
        $data->description=$request->description;
        $data->room_type=$request->room_type;
        $data->image=$request->image;
        $data->wifi=$request->wifi;
        $data->price=$request->price;
        $image=$request->image;

//         if($request->hasFile('image')){
            
//             Storage::delete("public/room/$request->image");
//             $image=$request->image;
//             $newImageName=time().'-'.$image->getClientOriginalName();
//             $image->storeAs('room',$newImageName,'public');
//             $date['image']=$newImageName;

// }
if($image){
    // Storage::delete("public/room/$image->image");
    $newImage=time().'.'.$image->getClientOriginalExtension();
    $request->image->move('room',$newImage);
    $data->image=$newImage;

}
        $data ->save();
        return redirect()->back()->with('status-update','The Room changes are updated');
        // ('admin.view_room',compact('data'))->with('status-update','The Room changes are updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data=Room::find($id);
        $data->delete();
        return back()->with('delete-message','The Room is Deleted Successfully');

    }
}
