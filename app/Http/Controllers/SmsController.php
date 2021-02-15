<?php

namespace App\Http\Controllers;

use App\Sms;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function create()
    {
        return view('notifikasi.sms.create');      
    }

    public function store(Request $request)
    {
        $sms = Sms::create([
            'number' => $request->number,
            'message'=> $request->message,
        ]);

        Nexmo::message()->send([
            'to'   => $request->number,
            'from' => 'Dimas Setiawan',
            'text' => $request->message,
        ]);

        return redirect()->back();
    }
}
