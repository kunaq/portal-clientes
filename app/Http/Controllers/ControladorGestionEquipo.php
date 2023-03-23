<?php

namespace App\Http\Controllers;

use App\Models\GestionEquipoM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DateTime;

class ControladorGestionEquipo extends Controller{

	// public function __construct() {
    //     $this->middleware('admin');
    // }

	static public function ctrTablaGestionEquipo(){
		$respuesta = GestionEquipoM::mdlTablaGestionEquipo();
		// return view('gestion_equipos')->with('lista', $respuesta)->with('ver','1');
		return view('gestion_equipos',['lista'=>$respuesta]);
	}//ctrTablaGestionEquipo

	static public function ctrDetalleGestionEquipo(Request $request){
		$respuesta = GestionEquipoM::mdlDetalleGestionEquipo($request->id_equipo);
		return $respuesta;
	}//ctrdetalleGestionEquipo

	static public function ctrAsignacionGestionEquipo(Request $request){
		$respuesta = GestionEquipoM::mdlAsignacionGestionEquipo($request->id_equipo);
		return $respuesta;
	}//ctrAsignacionGestionEquipo

}//class ControladorGestionEquipo
?>