<?php

namespace App\Http\Controllers;

use App\Models\RoomCategory;
use App\Http\Requests\StoreRoomCategoryRequest;
use App\Http\Requests\UpdateRoomCategoryRequest;

class RoomCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomCategories = RoomCategory::all();
        return view('dashboard.room_category.index', compact('roomCategories'));
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
     * @param  \App\Http\Requests\StoreRoomCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoomCategoryRequest $request)
    {
        $formData = $request->validated();

        $roomCategory = RoomCategory::create($formData);

        return redirect()->route('dashboard.roomcategory.index')->with('success', 'Room Category Created Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RoomCategory  $roomCategory
     * @return \Illuminate\Http\Response
     */
    public function show(RoomCategory $roomCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RoomCategory  $roomCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(RoomCategory $roomCategory)
    {
        return view('dashboard.room_category.edit', compact('roomCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoomCategoryRequest  $request
     * @param  \App\Models\RoomCategory  $roomCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoomCategoryRequest $request, RoomCategory $roomCategory)
    {
        $formData = $request->validated();

        $roomCategory->update($formData);

        return redirect()->route('dashboard.roomcategory.index')->with('success', 'Room Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RoomCategory  $roomCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoomCategory $roomCategory)
    {
        $roomCategory->delete();
        return redirect()->route('dashboard.roomcategory.index')->with('error', 'Room Category Deleted Successfully');
    }
}
