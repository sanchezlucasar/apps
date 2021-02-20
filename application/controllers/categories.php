<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {


public function __construct(){
		 


		parent::__construct();
		
		if (!$this->session->userdata("login")) {
	  	redirect(base_url());
	  }
	  	
	  	$this->load->model('Categories_model');
	
	}


	public function index()
	{
		
		$data = array('categories' => $this->Categories_model->getCategories() );
		
		
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('categories/list',$data);
		$this->load->view('layouts/footer');
	}

	public function add(){
        
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('categories/add');
		$this->load->view('layouts/footer');

	}

	public function store(){
		
		$name= $this->input->post("name");
		$description= $this->input->post("description");
		
		$this->form_validation->set_rules("name", "Nombre", "required|is_unique[categories.name]", );
		
		if ($this->form_validation->run()) {
			$data=array(
			'name'=>$name,
			'description'=>$description,
			'cond'=>"1"
		);

		if($this->Categories_model->save($data)){
			redirect(base_url()."index.php/categories");
		}
		else{
			
            $this->session->set_flashdata("error","no se pudo actualizar la informacion");   	
			redirect(base_url()."index.php/categories/add");
		   }
		}else {
			$this->add();
		}

		



	}

	public function edit($id){

		$data = array('categorie' => $this->Categories_model->getCategory($id));
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('categories/edit', $data);
		$this->load->view('layouts/footer');

	}

	public function update(){
		$idCategory= $this->input->post("idCategory");
		$name= $this->input->post("name");
		$description= $this->input->post("description");

		
		$dataCat=array(
			
			'name'=> $name,
			'description' => $description,
			'cond'=>'1'
		);



		if ($this->Categories_model->update($idCategory,$dataCat)){

		 	redirect(base_url()."index.php/categories");
		 }
		 else{
			
             $this->session->set_flashdata("error","no se pudo Editar la informacion");   	
		 	redirect(base_url()."index.php/categories/edit/".$idCategoria);
		 }             
		


	}

	public function view($id){

		$data=array( 'categorie'=> $this->Categories_model->getCategory($id));

		$this->load->view("categories/view", $data);

	}

	public function delete($id){

		$data=array( 'cond' => 0);

		$this->Categories_model->update($id, $data);

	    echo "index.php/categories";

	}


}