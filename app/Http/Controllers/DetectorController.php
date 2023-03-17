<?php

namespace App\Http\Controllers;

use App\Models\Detector;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class DetectorController extends Controller
{

    public function index()
    {
        //return view('formulario');
    }

    public function store(Request $request)
    {
        $ip=$request->ip();

        $detectores=Detector::updateOrCreate(
            ['ip_detector'=>$ip],
            [
                'mam_prcnt'=>$request->mam,
                'storage_prcnt'=>$request->storage,
                'opt_prcnt'=>$request->opt,
                'ram'=>$request->ram,
                'cpu'=>$request->cpu,
                'cant_hilos'=>$request->cant_hilos,
                'peticiones'=>$request->peticiones
            ]
        );

        $detectores->save();

        return $request;
    }

    public function datadetector(){
        $detectores=DB::table('detectors')->get();

        // Formatear la columna "cevem_id" de cada detector como una cadena de tres dígitos
        $detectores = $detectores->map(function($detector) {
            $detector->cevem_id = sprintf('%03d', $detector->cevem_id);
            return $detector;
        });

        $detector=datatables()->collection($detectores)->toJson();

        return $detector;

    }

}
