<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;
use App\Http\Requests\ReservationRequest;
use App\Http\Resources\Reservation\ReservationResource;
use App\Http\Resources\Reservation\ReservationCollection;
use Symfony\Component\HttpFoundation\Response;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    return ReservationCollection::collection(Reservation::all());
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
    public function store(ReservationRequest $request)
    {
        $reservation = new Reservation;
        $reservation->check_in_date = $request->check_in_date;
        $reservation->check_out_date = $request->check_out_date;
        $reservation->room_id = $request->room_id;
        $reservation->user_id = $request->user_id;
        $reservation->save();
      return response([
          'data' => new ReservationResource($reservation)
      ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        return new ReservationResource($reservation);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        $reservation->update($request->all());
        return response([
            'data' => new ReservationResource($reservation)
        ],Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
