<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Clientes_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

public function crear($nombre, $telefono, $direccion, $localidad, $tipo_cliente,$mail_cliente){
//sanitizacion
$nombre=htmlentities($nombre);
$telefono=htmlentities($telefono);
$direccion=htmlentities($direccion);
$localidad=intval($localidad);
$tipo_cliente=htmlentities($tipo_cliente);
$mail_cliente=htmlentities($mail_cliente);

  $data = array(
    'nombre_cliente'=>$nombre,
    'telefono'=>$telefono,
		'direccion'=>$direccion,
    'id_localidad'=>$localidad,
    'tipo_cliente'=>$tipo_cliente,
		'mail_cliente'=>$mail_cliente,
	);

  $this->db->insert('clientes', $data);
}

public function leer($id){
$id=intval($id);
$this->db->where('id_cliente',$id);
$this->db->join('localidades', 'localidades.id_localidad = clientes.id_localidad');
return $this->db->get("clientes")->row_array();
}

public function actualizar( $id, $nombre, $telefono, $direccion, $id_localidad, $tipo_cliente, $mail_cliente) {
// Sanitizar entrada de datos
$id = intval( $id );
$nombre = htmlentities( $nombre );
$telefono = htmlentities( $telefono );
$direccion = htmlentities( $direccion);
$id_localidad = intval( $id_localidad );
$tipo_cliente = htmlentities( $tipo_cliente );
$mail_cliente = htmlentities( $mail_cliente);
// Arreglo de datos
$data = [
'nombre_cliente' => $nombre,
'telefono' => $telefono,
'direccion'=> $direccion,
'id_localidad' => $id_localidad,
'tipo_cliente' => $tipo_cliente,
'mail_cliente' => $mail_cliente,
];

// Ejecutar consulta
$this->db->where( 'id_cliente', $id );
$this->db->update( 'clientes', $data );
return boolval( $this->db->affected_rows() );
}


public function lista(){
	$this->db->join('localidades','localidades.id_localidad = clientes.id_localidad');
  return $this->db->get('clientes')->result_array();

}


public function eliminar($id){
  $id=intval($id);

$this->db->where('id',$id);
$this->db->delete('clientes');
return boolval( $this->db->affected_rows() );



}

public function buscar($campo, $valor){
	$campo=htmlentities($campo);
	$valor=intval($valor);

	if ($campo == 'id_localidad' or $campo='nombre_cliente' and $valor>0){
		$this->db->where($campo,$valor);
		}
		return $this->db->get('clientes')->result_array();

}

}
