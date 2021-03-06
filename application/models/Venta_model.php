
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Venta_model extends CI_model {

	public function __construct(){

	parent::__construct();
		$this->load->database();
	
	}

	

	public function getProductos($valor){
        
        $this->db->select('id, codigo, name as label, description, price');
        $this->db->from("products",$valor);
        $this->db->like("name",$valor);
        $resultados = $this->db->get();
        return $resultados->result_array();


	}

	public function save($data){

		return $this->db->insert("sales", $data);

	} 

	public function getVentas($idusuario){

		if ($this->session->userdata('rol')=='1') {
		
		 $this->db->where("id",$idusuario);
		}


		$this->db->where("usuario_id",$idusuario);

		$resultados = $this->db->get("sales");

		if ($resultados->num_rows()>0){

			return $resultados->result();
		}
			
			
		
	}  


}