<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GestionEquipoM extends Model
{
	use HasFactory;
	protected $table = 'sgkma_servicio';
	public $primaryKey = 'id';
	protected $fillable = ['dsc_servicio','icono','flg_activo'];

	public static  function mdlTablaGestionEquipo(){
		
		return DB::table('sgkca_equipo as equipo')					
					->join('sgkma_estado as edo','edo.id','=','equipo.cod_estado')
					->join('sgkma_marca as marca','marca.id','=','equipo.cod_marca')
					->join('sgkma_periferico as peri','peri.id','=','equipo.cod_periferico')
					->join('sgkma_modelo as modelo','modelo.id','=','equipo.cod_modelo')
					->join('sgkma_cliente as cliente','cliente.id','=','equipo.cod_cliente')
					->leftJoin('sgkma_asignaciones as asignacion',function($join) {
						$join->on('asignacion.cod_equipo','=','equipo.id')->where('asignacion.usuario_asig','=',1);
					})
					->leftJoin('sgkma_cliente_usuarios as usuario','usuario.id','=','asignacion.cod_cliente_usuario')
					->select('equipo.dsc_equipo','equipo.id','equipo.fch_compra', 'edo.dsc_estado','equipo.serie','modelo.dsc_modelo','marca.dsc_marca','peri.dsc_periferico','usuario.nombres','usuario.apellidos')
					->whereColumn('equipo.cod_cliente','cliente.id')
					->orWhere('cliente.id','=',0)
					->get();
		
	}//mdlTablaGestionEquipo

	public static  function mdlDetalleGestionEquipo($id){
		
		return DB::table('sgkca_equipo as equipo')
					->select('equipo.dsc_equipo','equipo.serie','equipo.fch_compra','equipo.cod_activo','equipo.nro_inventario','equipo.velocidad_procesador','equipo.disco_duro','equipo.memoria','equipo.tamanio','equipo.fch_instalacion','equipo.contrato','equipo.fch_vcmto_mes','equipo.costo_equipo','equipo.cuota_mes','equipo.id','equipo.observaciones','sucursal.dsc_sucursal','ubicacion.dsc_ubicaciones','proces.dsc_procesador','edo.dsc_estado','marca.dsc_marca','peri.dsc_periferico','modelo.dsc_modelo','propiedad.dsc_tipo_propiedad','proveedor.dsc_proveedor','moneda.dsc_abrev')	
					->join('sgkma_sucursal as sucursal','sucursal.id','=','equipo.cod_sucursal')
					->join('sgkma_ubicaciones as ubicacion','ubicacion.id','=','equipo.cod_ubicacion')
					->join('sgkma_procesador as proces','proces.id','=','equipo.procesador')				
					->join('sgkma_estado as edo','edo.id','=','equipo.cod_estado')
					->join('sgkma_marca as marca','marca.id','=','equipo.cod_marca')
					->join('sgkma_periferico as peri','peri.id','=','equipo.cod_periferico')
					->join('sgkma_modelo as modelo','modelo.id','=','equipo.cod_modelo')
					->join('sgkma_tipo_propiedad as propiedad','propiedad.id','=','equipo.tipo_propiedad')
					->join('sgkma_proveedor as proveedor','proveedor.id','=','equipo.proveedor')
					->join('sgkma_moneda as moneda','moneda.id','=','equipo.moneda')
					->where('equipo.id',$id)
					->get();
		
	}//mdlDetalleGestionEquipo

	public static  function mdlAsignacionGestionEquipo($id){

		return DB::table('sgkma_asignaciones as asig')
					->select('asig.fch_inicio','asig.fch_final','asig.obs','asig.usuario_asig','usuario.nombres','usuario.apellidos')
					->leftjoin('sgkma_cliente_usuarios as usuario','usuario.id','=','asig.cod_cliente_usuario')
					->where('asig.cod_equipo',$id)
					->orderBy('asig.fch_inicio', 'desc')
					->get();

	}

}//class mdlAsignacionGestionEquipo
?>

