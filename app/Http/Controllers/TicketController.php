<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    // welcome page load
    public function welcome()
    {
        return view('welcome');
    }
    public function check(Request $request)
    {
        $temp = 0;
        $date = $request->date;
        $seat = $request->seat;
        $form = $request->form;
        $to = $request->to;

        // date by total seat
        $dateBySeat = Booking::where('date', $date)
            ->sum('seat');
        // check seat avaiability
        $totalSeat = $dateBySeat + $seat;

        if ($totalSeat > 36) {
            return redirect()->back()->with('status', 'Seat not available. Try another date.');
        } else {
            return view('book', ['date' => $date, 'seat' => $seat, 'form' => $form, 'to' => "Cox's Bazaar", 'status' => 'Seat available ! Book Now']);
        }
    }
    // booking show
    /* public function booking(Request $request)
    {
        // Retrieve the date and seat from the request
        $date = $request->input('date');
        $seat = $request->input('seat');

        // Use $date and $seat in your logic

        return view('book', ['date' => $date, 'seat' => $seat]);
    } */
}