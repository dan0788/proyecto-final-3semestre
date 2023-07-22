<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    public function index()
    {
        $solicitudes = Solicitud::all();
        /* return view('layouts.bienes',['bienes'=>$bienes]); */
        return view('layouts.solicitudes',compact('solicitudes'));
        /* return response()->json(['bienes' => $bienes]); */
    }
}
