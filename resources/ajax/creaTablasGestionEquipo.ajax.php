<?php
use App\Models\GestionEquipoM;
use App\Http\GestionEquipo;

class AjaxGestionEquipo{
	public function tablaGestionEquipo(){
		$respuesta = GestionEquipo::ctrTablaGestionEquipo();
	echo json_encode($respuesta);
	}//tablaGestionEquipo
}//class AjaxGestionEquipo

/*=============================================
ACCIONES
=============================================*/
if(isset($_POST["accion"]) && $_POST["accion"] == 'listar'){
	$cliente = new AjaxGestionEquipo();
	$cliente -> tablaGestionEquipo();
}