<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App_model extends CI_model {

	public function __construct(){

	parent::__construct();
		$this->load->database();
		

	}

	public function getApps(){


        $this->db->select("p.*,c.nombre as categoria, u.nombre as usuarios");
        $this->db-> from("productos p");
        $this->db->join("categorias c","p.categoria_id = c.id" );
        $this->db->join("usuarios u","p.id_usuario = u.id");
		$this->db->where("p.estado","1");

		$resultados = $this->db->get();

	
		return $resultados->result();
			
			
		
	}  

	
	public function maxId(){
		
		$query = "SELECT MAX(id) AS id FROM productos";

		$q = $this->db->query($query) ;

	 	if( ($q -> num_rows() ) > 0 ) {
			
	 		foreach ($q->result() as $key) {

	 			return $key->id;
	 		}

	 	} else {return false;}

	}

	public function getCategories(){


		$this->db->where("estado","1");

		$resultados = $this->db->get("categorias");

		if ($resultados->num_rows()>0){

			return $resultados->result();
		}
		
		
	}  



	public function getApp($id){

		$this->db->select("p.*,c.nombre as categoria");
        $this->db-> from("productos p");
        $this->db->join("categorias c","p.categoria_id = c.id");


		$this->db->where("p.id",$id);
		$resultado = $this->db->get();

		return $resultado->row();
	}

	public function save($data){

		return $this->db->insert("productos", $data);

	} 

	public function update($id,$data){

		$this->db->where("id",$id);
		
		return $this->db->update("productos",$data);
	}

}