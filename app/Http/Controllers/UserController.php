<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function sendPage()
    {

        return view('form_contact');
    }


    public function sendMail(Request $request)
    {
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new SendMail($request));
        /* User::create($request->all()); */

        return back()->with('success', 'messaggio inviato con successo, invia un altro');
    }
}
