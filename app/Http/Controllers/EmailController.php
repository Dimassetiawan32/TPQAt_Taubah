<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function create()
    {
        return view('email.create');      
    }

    public function store(Request $request)
    {
        $email = $request->email;
        $data = array(
                'name' => $request->name,
                'email_body' => $request->email_body
            );

        // Kirim Email
        Mail::send('email_template', $data, function($mail) use($email) {
            $mail->to($email, 'no-reply')
                    ->subject("Sample Email Laravel");
            $mail->from('dmas0097@gmail.com', 'Testing');
        });

        // Cek kegagalan
        if (Mail::failures()) {
            return "Gagal mengirim Email";
        }
        return "Email berhasil dikirim!";
    }
}
