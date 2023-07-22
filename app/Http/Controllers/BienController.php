<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BienController extends Controller
{
    public function __construct()
    {

    }
    public function index()
    {
        $bienes = Bien::all();
        /* return view('layouts.bienes',['bienes'=>$bienes]); */
        return view('layouts.bienes',compact('bienes'));
        /* return response()->json(['bienes' => $bienes]); */
    }

    public function show($id)
    {
        $bien = Bien::findOrFail($id);
        return $this->successResponse($bien);
    }

    public function store(Request $request)
    {
        /* $rules = [
            'Numero_orden' => 'max:255|min:0'
        ]; */
        /* $this->validate($request, $rules);
        $bien = Bien::create($request->all()); */
        return view('layouts.create_bienes');
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'max:255|min:0',
            'updated_by' => 'required|integer'
        ];
        $this->validate($request, $rules);
        $bien = Bien::findOrFail($id);
        $bien->fill($request->all());
        if ($bien->isClean()) {
            return $this->errorResponse('Al least one value must be changed', Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $bien->save();
        return $this->successResponse($bien);
    }

    public function destroy(Request $request, $id)
    {
        $rules = [
            'deleted_by' => 'required|integer'
        ];
        $this->validate($request, $rules);
        $bien = Bien::findOrFail($id);
        $bien->deleted_by = $request->deleted_by;
        $bien->save();
        $bien->delete();
        return $this->successResponse($id);
    }
}