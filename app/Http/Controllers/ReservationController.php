<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReservationCollection;
use App\Models\Reservation;
use App\Models\ServiceReservation;
use Carbon\Carbon;
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
        $reservation = Reservation::create([
            'date_reservation' => $request->date_reservation,
            'hour_reservation' => $request->hour_reservation,
            'user_id' => $request->user_id // Cambiar codigo al usuario que se autenticara
            //'user_id' => Auth::user()->id
        ]);

        // Obtener el id de la cita que se esta creando
        $id = $reservation->id;

        // Obtener los servicios de la peticion
        $services = $request->services;

        $reservation_service = [];

        foreach($services as $service) {
            $reservation_service[] = [
                'reservation_id' => $id,
                'service_id' => $service['id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ];
        }

        ServiceReservation::insert($reservation_service);

        return [
            'message' => 'Agendando cita ' . $id,
            'services' => $request->services
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
