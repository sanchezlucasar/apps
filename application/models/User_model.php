<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_model {

	public function __construct(){

	parent::__construct();
		
		$this->load->database();
		

	}

	 function login($username,$password){


		$this->db->where("username",$username);

		$this->db->where("password",sha1($password));

		$resultados = $this->db->get("users");

		if ($resultados->num_rows()>0){

			return $resultados->row();
		}
			
			else{
				return false; 
			}
		
	}

	public function getUsers(){

        $this->db->select("u.*,r.nombre as rol");
        $this->db-> from("users u");
        $this->db->join("rols r","u.rol_id = r.id");
		$this->db->where("u.estado","1");

		$resultados = $this->db->get();

		return $resultados->result();
					
	}

public function getUser($id){

		$this->db->select("u.*,r.nombre as rols");
        $this->db-> from("users u");
        $this->db->join("rols r","u.rol_id = r.id");


		$this->db->where("u.id",$id);
		$resultado = $this->db->get();

		return $resultado->row();
	}

	

	
	
	public function getRoles(){


		$query ="SELECT * FROM rols"; 

		$resultados = $this->db->query($query);

		if ($resultados->num_rows()>0){

			return $resultados->result();
		}
			
			
		
	}
	
	public function update($id,$data){

		$this->db->where('id', $id);
       
        return $this->db->update('users', $data);

	}

	public function save($data){

		return $this->db->insert("users", $data);

	} 



 
 
}
