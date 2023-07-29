<?php

namespace App\Http\Controllers;

use App\Models\OrdenContractual;
use Illuminate\Http\Request;

class OrdenController extends Controller
{
    public function __construct()
    {

    }
    public function index()
    {
        $ordenes = OrdenContractual::all();
        /* return view('layouts.bienes',['bienes'=>$bienes]); */
        return view('layouts.ordenes', compact('ordenes'));
        /* return response()->json(['bienes' => $bienes]); */
    }

    public function store(Request $request)
    {
        return view('layouts.create_ordenes');
    }
}