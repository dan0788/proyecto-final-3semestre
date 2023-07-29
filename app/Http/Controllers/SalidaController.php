<?php

namespace App\Http\Controllers;

use App\Models\SalidaAlmacen;
use Illuminate\Http\Request;

class SalidaController extends Controller
{
    public function index()
    {
        $salidas = SalidaAlmacen::all();
        /* return view('layouts.bienes',['bienes'=>$bienes]); */
        return view('layouts.salidas',compact('salidas'));
        /* return response()->json(['bienes' => $bienes]); */
    }

    public function store(Request $request)
    {
        return view('layouts.create_salidas');
    }
}
