
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Venta_model extends CI_model {

	public function __construct(){

	parent::__construct();
		$this->load->database();
	
	}

	

	public function getProductos($valor){
        
        $this->db->select('id, codigo, nombre as label, descripcion, precio');
        $this->db->from("productos",$valor);
        $this->db->like("nombre",$valor);
        $resultados = $this->db->get();
        return $resultados->result_array();


	}

	public function save($data){

		return $this->db->insert("ventas", $data);

	} 

	public function getVentas($idusuario){


		$this->db->where("usuario_id",$idusuario);

		$resultados = $this->db->get("ventas");

		if ($resultados->num_rows()>0){

			return $resultados->result();
		}
			
			
		
	}  


}