<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App_model extends CI_model {

	public function __construct(){

	parent::__construct();
		$this->load->database();
		

	}

	public function getApps(){


        $this->db->select("p.*,c.name as categorie, u.nombre as users");
        $this->db-> from("products p");
        $this->db->join("categories c","p.categoria_id = c.id" );
        $this->db->join("users u","p.id_usuario = u.id");
		$this->db->where("p.cond","1");

		$resultados = $this->db->get();

	
		return $resultados->result();
			
			
		
	}  

	
	public function maxId(){
		
		$query = "SELECT MAX(id) AS id FROM products";

		$q = $this->db->query($query) ;

	 	if( ($q -> num_rows() ) > 0 ) {
			
	 		foreach ($q->result() as $key) {

	 			return $key->id;
	 		}

	 	} else {return false;}

	}

	public function getCategories(){


		$this->db->where("cond","1");

		$resultados = $this->db->get("categories");

		if ($resultados->num_rows()>0){

			return $resultados->result();
		}
		
		
	}  



	public function getApp($id){

		$this->db->select("p.*,c.name as categorie");
        $this->db-> from("products p");
        $this->db->join("categories c","p.categoria_id = c.id");


		$this->db->where("p.id",$id);
		$resultado = $this->db->get();

		return $resultado->row();
	}

	public function save($data){

		return $this->db->insert("products", $data);

	} 

	public function update($id,$data){

		$this->db->where("id",$id);
		
		return $this->db->update("products",$data);
	}

}