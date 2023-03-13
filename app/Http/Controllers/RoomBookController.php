<?php

namespace App\Http\Controllers;

use App\Models\RoomBook;
use App\Http\Requests\StoreRoomBookRequest;
use App\Http\Requests\UpdateRoomBookRequest;

class RoomBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.room_book.index');
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
     * @param  \App\Http\Requests\StoreRoomBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoomBookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RoomBook  $roomBook
     * @return \Illuminate\Http\Response
     */
    public function show(RoomBook $roomBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RoomBook  $roomBook
     * @return \Illuminate\Http\Response
     */
    public function edit(RoomBook $roomBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoomBookRequest  $request
     * @param  \App\Models\RoomBook  $roomBook
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoomBookRequest $request, RoomBook $roomBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RoomBook  $roomBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoomBook $roomBook)
    {
        //
    }
}
