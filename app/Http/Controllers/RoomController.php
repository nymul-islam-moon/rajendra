<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use App\Models\RoomCategory;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        $roomCategories = RoomCategory::all();
        return view('dashboard.room.index', compact('rooms', 'roomCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRoomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoomRequest $request)
    {


        $formData = $request->validated();

        $filesNameArr = [];

        if (isset($formData['images'])){

            $images = $formData['images'];

            foreach ($images as $key => $file) {
                $fileFullNameWithExtension = trim($file->getClientOriginalName());
                $arr = preg_split('/\./', $fileFullNameWithExtension);
                $extension = array_pop($arr);
                $fullName = implode('.', $arr);
                $fileName = $fullName . '__' . uniqid() . '__' . '.' . $extension;
                $file->move(public_path('uploads/rooms/'), $fileName);
                $filesNameArr[$key] = $fileName;
            }

        }

        $filesJsonName = json_encode($filesNameArr);

        $formData['images'] = $filesJsonName;


        // dd($formData['images']);

        $room = Room::create($formData);

        return redirect()->route('dashboard.room.index')->with('success', 'Room Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        $roomCategories = RoomCategory::all();
        return view('dashboard.room.edit', compact('room', 'roomCategories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoomRequest  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoomRequest $request, Room $room)
    {
        $formData = $request->validated();


        if($request->has('images')){

            // Delete Old Images
            $oldImagesArray = json_decode($room['images']);
            foreach ($oldImagesArray as $key=> $image){

                try {
                    unlink(public_path('uploads/rooms/' . $image));
                } catch (\Exception $e) {

                }
            }

            // Add Images

            $filesNameArr = [];

            if (isset($formData['images'])){

                $images = $formData['images'];

                foreach ($images as $key => $file) {
                    $fileFullNameWithExtension = trim($file->getClientOriginalName());
                    $arr = preg_split('/\./', $fileFullNameWithExtension);
                    $extension = array_pop($arr);
                    $fullName = implode('.', $arr);
                    $fileName = $fullName . '__' . uniqid() . '__' . '.' . $extension;
                    $file->move(public_path('uploads/rooms/'), $fileName);
                    $filesNameArr[$key] = $fileName;
                }

            }

            $filesJsonName = json_encode($filesNameArr);

            $formData['images'] = $filesJsonName;
        }

        $room->update($formData);

        return redirect()->route('dashboard.room.index')->with('success', 'Room Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        if(isset($room['images'])){
            $oldImagesArray = json_decode($room['images']);
            foreach ($oldImagesArray as $key=> $image){

                try {
                    unlink(public_path('uploads/rooms/' . $image));
                } catch (\Exception $e) {

                }
            }
        }

        $room->delete();
        return redirect()->route('dashboard.room.index')->with('error', 'Room Deleted Successfully');
    }
}
