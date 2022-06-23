<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Field;
use App\Models\Price;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
        $timeNow = Carbon::now();
        $getDate = $timeNow->format('Y-m-d');
        $hourNow = $timeNow->format('H');
        $timePart = [
            "pagi" => "Pagi",
            "sore" => "Sore",
            "malam" => "Malam"
        ];

        $query['booking_date'] = $request->dateNow;
        $query['field_id'] = $request->field;

        $getDataBooking = Booking::where('booking_date', $query['booking_date'])->where('field_id', $query['field_id'])->get();
        $getPrice = Price::all();

        return response()->json([
            'dataHour' => $getDataBooking->pluck('booking_hour'),
            'dataDate' => $getDataBooking->pluck('booking_date'),
            'getDate' => $getDate,
            'hourNow' => $hourNow,
            'timeNow' => $timeNow,
            'timePart' => $timePart,
            'price' => $getPrice,
            'bookingDate' => $query['booking_date'],
            'fieldId' => $query['field_id'],
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
        $request->validate([
            'booking_hour' => ['required'],
        ]);

        $item['booking_date'] = $request->booking_date;
        $item['booking_hour'] = $request->booking_hour;
        $item['total_payment'] = $request->booking_price;
        $item['field_id'] = $request->field_id;
        $item['booking_status'] = 'unpaid';
        $item['booking_code'] = strtolower(date('D') . date('YmdHis'));
        // Booking::create($item);
        $field = Field::where('id', $item['field_id'])->first();
        // dd($field);

        return view('checkout', [
            'booking_date' => $item['booking_date'],
            'field' => $field,
            'booking_hour' => $item['booking_hour'],
            'price' => $item['total_payment']
        ]);
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
