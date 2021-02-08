<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas extends CI_Controller {


public function __construct(){

      parent::__construct();
      if (!$this->session->userdata("login")) {
	  	redirect(base_url());
	  }

	  $this->load->model('Venta_model');

	
}

public function index(){

        $data = array( 'ventas' => $this->Venta_model->getVentas($this->session->userdata('id')) );


		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('ventas/list',$data);
		$this->load->view('layouts/footer');
}


	public function add(){
       //$data =   array('comprobante'=> $this->Venta_model->getComprobantes()); 
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('ventas/add');
		$this->load->view('layouts/footer');

	}

	public function getproductos(){

		$valor = $this->input->post("valor");

	    $clientes = $this->Venta_model->getProductos($valor);

		echo json_encode($clientes);

	}

	public function store(){
		

		$fecha= date("Y-m-d H:i:s");
		$id_cliente= $this->input->post("idcliente");
		$total= $this->input->post("total");



		$data=array(
				
			'fecha'=>$fecha,
			'total'=>$total,
			'usuario_id'=>$id_cliente,
			
		);



		if($this->Venta_model->save($data)){
			redirect(base_url()."index.php/ventas");
		}
		else{
			
            $this->session->set_flashdata("error","no se pudo Guardar la informacion");   	
			redirect(base_url()."index.php/user/add");
		}
	}


}