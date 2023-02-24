<?php

namespace App\Http\Controllers;

use App\Models\Detector;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class DetectorController extends Controller
{

    public function index()
    {
        return view('formulario');
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $ip=$request->ip();
        //$ip_detector=Detector::where('ip_detector',$ip)->first();

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

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function listado()
    {
        return view('monitor.fc2.listado');
    }

    public function datadetector(){
        $detectores=DB::table('detectors')
        ->join('cevems','cevems.id','=','cevem_id','cevem_id')
        ->join('states','state_id','=','states.id')
        ->get();

        $detector=datatables()->collection($detectores)->toJson();

        //return $detectores;
        return $detector;

    }




}
