<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OperacionController extends Controller
{
    public function index()
    {
        return view('operacion.index');
    }

    public function listadocvm()
    {

        $operativo = DB::table('fingerslinks')
            ->select('state_id', 'cevem_id', 'cevem', 'state', 'name', 'url')
            ->join('cevems', 'cevems.id', '=', 'cevem_id')
            ->join('states', 'state_id', '=', 'states.id')
            ->join('users', 'users.id', '=', 'users_id')
            ->get();

        foreach ($operativo as $filaxd) {
            $xendatas = DB::table('xdlinks')
                ->select('cevem_id','ip_xd','AS','EM','ip_libreria')
                ->where('cevem_id', $filaxd->cevem_id)->get();

            $filaxd->xendatas = $xendatas;
        }

        foreach ($operativo as $filaw) {
            $wellavs = DB::table('wellawlinks')
                ->select('cevem_id','ip_wellav')
                ->where('cevem_id', $filaw->cevem_id)->get();

            $filaw->wellavs = $wellavs;
        }

        foreach ($operativo as $filakvm) {
            $kvms = DB::table('kvmlinks')
                ->select('cevem_id','ip_kvm')
                ->where('cevem_id', $filakvm->cevem_id)->get();

            $filakvm->kvms = $kvms;
        }

        foreach ($operativo as $filaxc) {
            $xclaritys = DB::table('xclaritylinks')
                ->select('cevem_id','ip_xclarity')
                ->where('cevem_id', $filaxc->cevem_id)->get();
            $filaxc->xclaritys = $xclaritys;
        }

        foreach ($operativo as $filatx) {
            $atx = DB::table('atxlinks')
                ->select('cevem_id','ip_atx')
                ->where('cevem_id', $filatx->cevem_id)->get();
            $filatx->atx = $atx;
        }

        foreach ($operativo as $filadmp) {
            $dmps = DB::table('dmplinks')
                ->select('cevem_id','ip_dmp')
                ->where('cevem_id', $filadmp->cevem_id)->get();
            $filadmp->dmps = $dmps;
        }

        return $operativo;
    }
}
