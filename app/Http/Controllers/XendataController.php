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

        $xendatas=Xendata::updateOrCreate(
            ['ip_xd'=>$ip],
            [
                'OS'=>$request->OS,
                'Manufacturer'=>$request->Manufacturer,
                'Hostname'=>$request->Hostname,
                'ultimo_Archivo'=>$request->ultimo_Archivo,
                'Model'=>$request->Model,
                'BlankC'=>$request->BlankC,
                'Cinta'=>$request->Cinta,
                'versionSC'=>$request->versionSC,
                'X_Libre'=>$request->X_Libre,
                'CintasFC'=>$request->CintasFC,
                'C_Libre'=>$request->C_Libre,
                'Last'=>$request->Last,
                'fechaConsulta'=>$request->fechaConsulta,
                'tipo'=>$request->tipo,
                'C_LibreP'=>$request->C_LibreP,
                'C_Total'=>$request->C_Total,
                'Serial'=>$request->Serial,
                'CPU'=>$request->CPU,
                'X_LibreP'=>$request->X_LibreP,
                'X_Total'=>$request->X_Total,
                'RAM'=>$request->RAM,
            ]
        );

        $xendatas->save();

        return $request;
    }

    public function dataxendata(){
        $xendatas=DB::table('xendata')
                    ->join('cevems', 'cevems.id', '=', 'cevem_id')
                    ->join('states', 'state_id', '=', 'states.id')
                    ->select('xendata.id','id_exp','state','cevem','ip_xd','Hostname','Cinta','CintasFC','BlankC',
                    'C_Libre','C_LibreP','C_Total','X_Libre','X_LibreP','X_Total','ultimo_Archivo',
                    'Last_Reboot','fechaConsulta','Serial')
                    ->get();
        $xendata=datatables()->collection($xendatas)->toJson();

        return $xendata;

    }

}
