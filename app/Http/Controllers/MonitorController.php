<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonitorController extends Controller
{

    public function index()
    {
        return view('monitoreo.index');
    }

    public function xendata(){
        return view();
    }


    public function vistaDetector()
    {
        return view('monitoreo.fc2.listadoDT');
    }

    public function vistaXendata()
    {
        return view('monitoreo.fc2.listadoXD');
    }



}
