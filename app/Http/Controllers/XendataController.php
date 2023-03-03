<?php

namespace App\Http\Controllers;

use App\Models\Xendata;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class XendataController extends Controller
{
    public function index()
    {
        return view('');
    }

    public function store(Request $request)
    {
        $ip=$request->ip();

        $detectores=Xendata::updateOrCreate(
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


    public function dataXD(){
        $xendatas=DB::table('xendata')->get();

        $xendatas=datatables()->collection($xendatas)->toJson();

        //return $xendatas;
        return $xendatas;

    }



    public function show()
    {
        return view('operacion.xd.show');
    }


}
