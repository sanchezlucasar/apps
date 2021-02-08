<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


public function __construct(){
	
		parent::__construct();
		$this->load->model('User_model');

	

	
	}


	

	 function login(){
	 	
	 	

		$username =$this->input->post("username");
		$password =$this->input->post("password");

		

		$res= $this->User_model->login($username, $password);

		if (!$res) {
			// vuelve al login

			$this->session->set_flashdata("error", "El usuario y/o contraseña son incorrectos");

			redirect(base_url());
		
					}else{
						//creamos la variable de sesion 
						switch ($res->rol_id) {
							case 1: $nombre_rol = "Super Admin";
							    break;
							case 2:
								$nombre_rol = "Developer";
								break;
							case 3:
							$nombre_rol = "Cliente";
							break;
						}

			$data = array(
				
				'id' => $res->id,
				
				'nombre' => $res->nombre,
				
				'rol' => $nombre_rol,
				
				'login' => TRUE 
			);

			$this->session->  
				set_userdata($data);
			    redirect(base_url()."index.php/dashboard");
		}

}
   public function register(){
 	  $data =   array( 'roles'=> $this->User_model->getRoles() ); 
     $this->load->view('user/register',$data);

}

	public function index()
	{

		$this->load->view('login_view');
	}

}
