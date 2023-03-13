<?php

namespace App\Http\Controllers;

use App\Models\specialOffers;
use App\Http\Requests\StorespecialOffersRequest;
use App\Http\Requests\UpdatespecialOffersRequest;
use Intervention\Image\Facades\Image;

class SpecialOffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialOffers = specialOffers::all();
        return view('dashboard.special_offers.index', compact('specialOffers'));
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
     * @param  \App\Http\Requests\StorespecialOffersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorespecialOffersRequest $request)
    {
        $formData = $request->validated();

       // image start
       if($formData['image'] != null) {
            $image_name = time().'.'.$formData['image']->getClientOriginalExtension();
            $request->image->move(public_path('uploads/special_offers/'), $image_name);
            $formData['image'] = $image_name;
        }

        // image end

        $formData['start_date'] = date('Y-m-d', strtotime($formData['start_date']));
        $formData['end_date'] = date('Y-m-d', strtotime($formData['end_date']));
        $formData['status'] = 1;

        specialOffers::create($formData);

        return redirect()->route('dashboard.specialOffer.index')->with('success', 'Special offers Created Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\specialOffers  $specialOffers
     * @return \Illuminate\Http\Response
     */
    public function show(specialOffers $specialOffers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\specialOffers  $specialOffers
     * @return \Illuminate\Http\Response
     */
    public function edit(specialOffers $specialOffer)
    {
        return view('dashboard.special_offers.edit', compact('specialOffer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatespecialOffersRequest  $request
     * @param  \App\Models\specialOffers  $specialOffers
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatespecialOffersRequest $request, specialOffers $specialOffer)
    {

        $formData = $request->validated();

        // image start
        if($request->has('image')){
            $image_name = time().'.'.$formData['image']->getClientOriginalExtension();
            $request->image->move(public_path('uploads/special_offers/'), $image_name);
            $formData['image'] = $image_name;

            $old_photo = $specialOffer->image;
            unlink(public_path('uploads/special_offers/' . $old_photo));
        }

        // image end

        $formData['start_date'] = date('Y-m-d', strtotime($formData['start_date']));
        $formData['end_date'] = date('Y-m-d', strtotime($formData['end_date']));

        $specialOffer->update($formData);

        return redirect()->route('dashboard.specialOffer.index')->with('success', 'Special offers Updated Successfully');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\specialOffers  $specialOffers
     * @return \Illuminate\Http\Response
     */
    public function destroy(specialOffers $specialOffer)
    {
        $old_photo = $specialOffer->image;
        unlink(public_path('uploads/special_offers/' . $old_photo));
        $specialOffer->delete();
        return redirect()->route('dashboard.specialOffer.index')->with('error', 'Special offers Deleted Successfully');

    }

    public function status(specialOffers $specialOffer)
    {
        $specialOffer->status = $specialOffer->status == 1 ? '0' : '1';

        if ($specialOffer->status == 1){
            $messageKey = 'success';
            $messageValue = 'Offer Accivated';
        }else{
            $messageKey = 'error';
            $messageValue = 'Offer Deactivated';
        }

        $specialOffer->save();

        return redirect()->route('dashboard.specialOffer.index')->with($messageKey, $messageValue);
    }



}
