<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    //Vista principale
    public function home()
    {
        return view('welcome');
    }
}
