<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReservationCollection;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new ReservationCollection(Reservation::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* $reservation = new Reservation;
        $reservation->date_reservation = $request->date_reservation;
        $reservation->hour_reservation = $request->hour_reservation;
        // $reservation->user_id = Auth::user()->id;
        $reservation->user_id = $request->user_id;
        $reservation->save(); */

        $reservation = Reservation::create([
            'date_reservation' => $request->date_reservation,
            'hour_reservation' => $request->hour_reservation,
            // 'user_id' => $request->user_id // Cambiar codigo al usuario que se autenticara
            'user_id' => Auth::user()->id
        ]);

        return [
            'reservation' => $reservation
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
