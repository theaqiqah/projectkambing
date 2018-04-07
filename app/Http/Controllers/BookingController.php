<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function showBookAqiqah(Request $request)
    {
        $kuantiti = $request->input('kuantiti');
        $kawasan = $request->input('kawasan');
        $tarikh = $request->input('tarikh');
        $total = $request->input('total');
        $aqiqah1 = $request->input('aqiqah1');
        $aqiqah2 = $request->input('aqiqah2');
        $berat1 = $request->input('berat1');
        $berat2 = $request->input('berat2');

        return view('booking.aqiqah', [
            'kuantiti' => $kuantiti,
            'kawasan' => $kawasan,
            'tarikh' => $tarikh,
            'total' => $total,
            'aqiqah1' => $aqiqah1,
            'berat1' => $berat1,
            'aqiqah2' => $aqiqah2,
            'berat2' => $berat2
        ]);
    }

    public function showBookLivegrill(Request $request)
    {
        $kuantiti = $request->input('kuantiti');
        $kawasan = $request->input('kawasan');
        $tarikh = $request->input('tarikh');
        $total = $request->input('total');

        return view('booking.livegrill', [
            'kuantiti' => $kuantiti,
            'kawasan' => $kawasan,
            'tarikh' => $tarikh,
            'total' => $total
        ]);
    }

    public function showBookLivestock()
    {
        return view('booking.livestock');
    }
}
