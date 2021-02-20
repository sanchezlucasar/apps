<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {


public function __construct(){
	  
		parent::__construct();

		if (!$this->session->userdata("login")) {
	  	redirect(base_url());
	  	}

	  	$this->load->model('App_model');
	
	
	}

public function index(){

	   


        $data = array( 'apps' => $this->App_model->getApps());
		
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('apps/list',$data);
		$this->load->view('layouts/footer');
	}

	



	public function add(){
        $data =   array( 	'categorias'=> $this->App_model->getCategories() ); 
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('apps/add',$data);
		$this->load->view('layouts/footer');

	}

	private function guardar($cod){
		$mi_imagen = 'assets/upload';
		$config['upload_path'] = "uploads/";
		$config['file_name'] = $this->$cod;
		$config['allowed_types'] = "gif|jpg|jpeg|png";
		$config['max_size'] = "5000";
		$config['max_width'] = "1000";
		$config['max_height'] = "1000";

		$this->load->library('upload', $config);


        if (!$this->upload->do_upload($mi_imagen)) {
        		//*** ocurrio un error
        	echo $this->upload->display_errors();
        	return;
        	}

        var_dump($this->upload->data());

    }


	public function view($id){

		$data=array( 'app'=> $this->App_model->getApp($id));

		$this->load->view("apps/view", $data);

	}

	public function edit($id){
		$data = array('apps' => $this->App_model->getApp($id));
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('apps/edit', $data);
		$this->load->view('layouts/footer');
	}

	
public function store(){
		$nombre= $this->input->post("name");
		$descripcion= $this->input->post("description");
		$precio= $this->input->post("price");
		$categoria= $this->input->post("categoria");
		$id= $this->input->post("id");
		


		$data=array(
			'codigo'=> (( $this->App_model->maxId() + 1 + 10000)),
			'name'=> $nombre,
			'description'=>$descripcion,
			'price'=> $precio,
			'categoria_id' => $categoria,
			'id_usuario' => $id,
			'estado'=>"1"
		);
		

		if($this->App_model->save($data)){
			guardar($data->codigo);
			redirect(base_url()."index.php/app");
		}
		else{
			
            $this->session->set_flashdata("error","no se pudo Guardar la informacion");   	
			redirect(base_url()."index.php/app/add");
		}
	}

	public function update(){

		$id= $this->input->post("id");
		$description= $this->input->post("description");
		$price= $this->input->post("price");
		 
		$data=array(
			'description'=>$description,
			'price'=> $price
			);

		
		if ($this->App_model->update($id,$data)){

			redirect(base_url()."index.php/app");
		}
		else{
			
            $this->session->set_flashdata("error","no se pudo Editar la informacion");   	
			redirect(base_url()."index.php/app/edit/".$id);
		}             
		
	}

	public function delete($id){

		$data=array( 'cond' => 0);

		$this->App_model->update($id, $data);

	    echo "index.php/app";

	}

	public function logout() {

		// Removing session data
		$this->session->sess_destroy();
		echo "<script>alert('Bye!');</script>";
		redirect(base_url()."/index.php/auth", "refresh");
	}

}

