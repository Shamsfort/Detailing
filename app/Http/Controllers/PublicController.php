<?php
namespace App\Http\Controllers;

use Log;
use Exception;
use Illuminate\Http\Request;
use App\Mail\MailPreventivoRequest;
use Illuminate\Log\Logger;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
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
        // dd($request->all());
        $info = [
            'nomec' => $request->input('nomec'),
            'email' => $request->input('email'),
            'telefono' => $request->input('telefono'),
            'targa' => $request->input('targa'),
            'auto' => $request->input('auto'),
            'corpo' => $request->input('corpo'),
        ];

        Mail::to('mail@mail.it')->send(new MailPreventivoRequest($info));
        return redirect('/')->with('message', 'Messaggio inviato con successo');

    }
}