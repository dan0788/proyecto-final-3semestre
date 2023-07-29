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
        $bienes = Bien::findOrFail($id);
        return $this->successResponse($bienes);
    }

    public function store(Request $request)
    {
        /* $data = $request->validate([
            'Numero_orden' => 'max:255|min:0'
        ]);
        Bien::create($data);  */
        /* $numeroOrden=$request->input('numeroOrden'); */
        /* return view('layouts.create_bienes',compact('rules')); */
        /* $numeroOrden = $request->query('numero_orden');
        $bien = new Bien();
        $bien->Numero_orden = $numeroOrden;
        $bien->save(); */
        return view('layouts.create_bienes');
        /* return redirect()->route('/admin/bienes'); */
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