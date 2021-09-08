<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index()
    {
        return view('contactanos.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $correo = new ContactanosMailable($request->all());
        Mail::to('daprimovaria@gmail.com')->send($correo);

        // return 'Mensaje Enviado';
        return redirect()->route('email.show')->with('sucess', 'Mensaje enviado');
    }
}
