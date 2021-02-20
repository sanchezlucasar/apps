<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


public function __construct(){
		 


		parent::__construct();
        
        if (!$this->session->userdata("login")) {
	  	redirect(base_url());
	  		  }
	    $this->load->model('User_model');
	
}

public function index(){

	    $data = array( 'users' => $this->User_model->getUsers() );
		
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('user/list',$data);
		$this->load->view('layouts/footer');
	
}

public function edit($id){

		$data = array('users' => $this->User_model->getUser($id),
			          'roles' => $this->User_model->getRoles()
			          );

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('user/edit', $data);
		$this->load->view('layouts/footer');

	}

public function update(){

		$id= $this->input->post("idUse");
		$nombre= $this->input->post("name");
		$apellidos= $this->input->post("lastname");
		$telefono= $this->input->post("telephone");
		$email= $this->input->post("email");
		$username= $this->input->post("username");
		$rol= $this->input->post("rol");
		
		
		 if ($rol ==='---') {
		 $dataUsuario = array(	
			'nombre'=>$nombre,
			'apellidos'=> $apellidos,
			'telefono'=> $telefono,
			'email' => $email,
			'username' => $username,
			
			);
		 }else{
				 $dataUsuario = array(	
				 	'nombre'=>$nombre,
				 	'apellidos'=> $apellidos,
				 	'telefono'=> $telefono,
				 	'email' => $email,
				 	'username' => $username,
				 	'rol_id' => $rol 
				 );
			}
		
		if ( $this->User_model->update($id,$dataUsuario) ){

		   	redirect( base_url()."index.php/user" );
		   }
		   else{
			
          $this->session->set_flashdata("error","no se pudo Editar la informacion");   	
	     	redirect(base_url()."index.php/user/edit/".$id);
		   }             
		
	}

	public function add(){
        $data =   array( 'roles'=> $this->User_model->getRoles() ); 
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('user/add',$data);
		$this->load->view('layouts/footer');

	}

	public function store(){
		$nombre= $this->input->post("name");
		$apellidos= $this->input->post("lastname");
		$telefono= $this->input->post("telefono");
		$email= $this->input->post("email");
		$username= $this->input->post("username");
		$password= sha1($this->input->post("password"));
		$rol_id= $this->input->post("rol");



		$data=array(
			'nombre'=> $nombre,
			'apellidos'=> $apellidos,
			'telefono'=>$telefono,
			'email'=> $email,
			'username' => $username,
			'password' =>$password,
			'rol_id'=>$rol_id,
			'estado'=>'1'
		);



		if($this->User_model->save($data)){
			redirect(base_url()."index.php/user");
		}
		else{
			
            $this->session->set_flashdata("error","no se pudo Guardar la informacion");   	
			redirect(base_url()."index.php/user/add");
		}
	}


	public function registronuevo(){

		$nombre= $this->input->post("name");
		$apellidos= $this->input->post("lastname");
		$telefono= $this->input->post("telefono");
		$email= $this->input->post("email");
		$username= $this->input->post("username");
		$password= sha1($this->input->post("password"));
		$rol_id= $this->input->post("rol");




		$data=array(
			'nombre'=> $nombre,
			'apellidos'=> $apellidos,
			'telefono'=>$telefono,
			'email'=> $email,
			'username' => $username,
			'password' =>$password,
			'rol_id'=>$rol_id,
			'estado'=>'1'
		);
			
		
		print_r($data);
		// if($this->User_model->save($data)){
		
		// 	redirect(base_url());
		// }
		// else{
			
  //           $this->session->set_flashdata("error","no se pudo Guardar la informacion");   	
		// 	redirect(base_url()."index.php/user/add");
		// }

	}

	public function view($id){


		$data = array('user' => $this->User_model->getUser($id)  );


		$this->load->view("user/view", $data);

	}

	public function delete($id){

		$data=array( 'estado' => 0);

		$this->User_model->update($id, $data);

	    echo "index.php/user";

	}




}

?>