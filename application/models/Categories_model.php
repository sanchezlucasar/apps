<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories_model extends CI_model {

	public function __construct(){

	parent::__construct();
	
		$this->load->database();
		

	}

	 public function getCategories(){


		$this->db->where("estado","1");

		$resultados = $this->db->get("categorias");

		if ($resultados->num_rows()>0){

			return $resultados->result();
		}
			
			
		
	}  


	public function save($data){

		return $this->db->insert("categorias", $data);

	} 

	public function getCategory($id){
		$this->db->where("id",$id);
		$resultado = $this->db->get("categorias");

		return $resultado->row();
	}

	public function update($id,$data){

		$this->db->where("id",$id);
		return $this->db->update("categorias",$data);
	
	}

	public function delete($id){
		$this->db->where ("id",$id);
		return $this->db->update("estado","2");


	}

 
 
}
?>