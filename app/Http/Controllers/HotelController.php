<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;
use App\Http\Requests\HotelRequest;
use App\Http\Resources\Hotel\HotelResource;
use App\Http\Resources\Hotel\HotelCollection;
use Symfony\Component\HttpFoundation\Response;


class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return HotelCollection::collection(Hotel::all());
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HotelRequest $request)
    {
        $hotel= new Hotel;
        $hotel->review_id = $request->review_id;
        $hotel->name = $request->name;
        $hotel->location = $request->location;
        $hotel->description = $request->description;
        $hotel->email = $request->email;
        $hotel->telephone = $request->telephone;
        $hotel->address = $request->address;
        $hotel->website = $request->website;
        $hotel->save();

       return response([
           'data'=>new HotelResource($hotel),
       ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        return new HotelResource($hotel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        $hotel->update($request->all());
        return response([
            'data'=>new HotelResource($hotel),
        ],Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
