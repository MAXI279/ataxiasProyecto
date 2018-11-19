<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsociacionController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function asociacion()
    {
        return view('asociacion');
    }

    public function asociarse()
    {
        return view('asociarse');
    }
}
