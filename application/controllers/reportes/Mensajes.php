<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mensajes extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Contacto_model");
	}

	public function index(){
		
		$data  = array(
			
			'mensajes' => $this->Contacto_model->getContactos(), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/reportes/mensajes",$data);
		$this->load->view("layouts/footer");
	}
}