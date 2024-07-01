<?php

namespace App\Http\Controllers;

use App\Mail\MailPreventivoRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    //Vista principale
    public function home()
    {
        return view('welcome');
    }
    
    public function preventivo()
    {
        return view('preventivo');
    }

    public function preventivoSubmit(Request $request)
    {
        $request->validate([
            'nome' =>'required',
            'cognome' =>'required',
            'email' =>'required',
            'auto' =>'required',
            'targa' =>'required',
            'numero_telefono' =>'required',
            'corpo' =>'required',
        ]);
        $nome = $request->nome;
        $cognome = $request->cognome;
        $email = $request->email;
        $auto = $request->auto;
        $targa = $request->targa;
        $numero_telefono = $request->numero_telefono;
        $corpo = $request->corpo;
        
        Mail::To('Preventivo@noreply.it')->send(new MailPreventivoRequest($nome, $cognome, $email, $auto, $targa, $numero_telefono, $corpo));
    }
}


