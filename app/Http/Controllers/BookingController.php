<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Field;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::all();
        $fields = Field::all();

        $getDate = $bookings->pluck('booking_hour');
        $getFields = $fields->pluck('field_name');
        $timeNow = Carbon::now();
        $hourNow = $timeNow->format('H') . ":00:00";
        $timePart = [
            "pagi" => "Pagi",
            "sore" => "Sore",
            "malam" => "Malam"
        ];
        // dd($getDate);

        return view('booking', [
            'fields' => $fields,
            'getDate' => $getDate,
            'hourNow' => $hourNow,
            'timeNow' => $timeNow,
            'timePart' => $timePart,
            'getFields' => $getFields
        ]);
    }

    public function check(Request $request)
    {
        $bookings = Booking::all();

        $getDate = $bookings->pluck('booking_hour');
        $timeNow = Carbon::now();
        $hourNow = $timeNow->format('H') . ":00:00";
        $timePart = [
            "pagi" => "Pagi",
            "sore" => "Sore",
            "malam" => "Malam"
        ];

        $query['booking_date'] = $request->dateNow;
        $query['field_id'] = $request->field;

        $getDataBooking = DB::table('bookings')->where('booking_date', $query['booking_date'])->where('field_id', $query['field_id'])->get();
        // dd($getDataBooking->pluck('booking_hour'));
        return response()->json([
            'data' => $getDataBooking->pluck('booking_hour'),
            'getDate' => $getDate,
            'hourNow' => $hourNow,
            'timeNow' => $timeNow,
            'timePart' => $timePart,
        ]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
