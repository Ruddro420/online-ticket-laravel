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
        $to = "Cox's Bazaar";
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
    public function storeBooking(Request $request)
    {
        $booking = new Booking();
        $booking->date = $request->date;
        $booking->seat = $request->seat;
        $booking->from = $request->form;
        $booking->to = $request->to;
        $booking->user_id = $request->phn;
        $booking->save();
        return redirect()->route('welcome')->with('status', "Booking Successfully.");
    }
    // ticket check
    public function checkTicket()
    {
        return view('ticktCheck');
    }
    public function searchTicket(Request $request)
    {
        $data = Booking::where('user_id', '=', $request->phn)->get();
        return view('ticktCheck', compact('data'));

    }
}