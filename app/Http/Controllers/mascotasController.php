<?php

namespace App\Http\Controllers;

use App\mascotas;
use Illuminate\Http\Request;
use DataTables;
class mascotasController extends Controller
{

    public function index()
    {
        $mascotas = mascotas::latest()->get();
        return view('mascotas.index',compact('mascotas'));
    }

    public function list()
    {
        return DataTables()->of(mascotas::query())
            ->addColumn('action', function($row){
            //$btn = "<a href='#viewModal' class='view' data-toggle='modal' onclick='listValuesJson()' data-json='".json_encode($row)."'><i class='material-icons' data-toggle='tooltip' title='Visualizar'>perm_contact_calendar</i></a>";
            $btn= "<a href='#editeModal' class='edit' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Editar' onclick='listValuesJson()' data-json='".json_encode($row)."'>&#xE254;</i></a>";
            $btn.="<a href='#deleteModal' class='delete' data-toggle='modal'><i class='material-icons' onclick='valueDelete(".$row->id.")' data-toggle='tooltip' title='Eliminar'>&#xE872;</i></a>";
            return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
            // ->toJson();
    }



    public function store(Request $request)
    {
        $mascotas = mascotas::create($request->all());
        return response()->json($mascotas, 201);
    }


    public function update(Request $request, $id)
    {
        $mascotas = mascotas::find($id);
        $mascotas->nombre = $request->nombre;
        $mascotas->idtipomascota = $request->idtipomascota;
        $mascotas->raza = $request->raza;
        $mascotas->propietario = $request->propietario;
        $mascotas->tel_propietario = $request->tel_propietario;
        $mascotas->dir_propietario = $request->dir_propietario;
        $mascotas->email_propietario = $request->email_propietario;
        $mascotas->update();
        return response()->json($mascotas, 200);
    }

    public function destroy($id)
    {
        mascotas::find($id)->delete();
        return response()->json(null, 204);
    }
}
