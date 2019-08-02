<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model("Productos_model");
		$this->load->library('cart');
		$this->load->model('Carrito_model');
		$this->load->model('Clientes_model');
	}


	public function index()
	{
		
		$data['productos']=$this->Carrito_model->get_all();
		$this->load->view("store/layouts/header");
		$this->load->view("store/layouts/css1");
		$this->load->view("store/layouts/aside");
		$this->load->view("store/welcome_message",$data);
		$this->load->view("store/layouts/footer");
		$this->load->view("store/layouts/js1");
	}

	public function check()
	{
		
		$data['productos']=$this->Carrito_model->get_all();
		$this->load->view("store/layouts/header");
		$this->load->view("store/layouts/css2");
		$this->load->view("store/layouts/aside");
		$this->load->view("store/carrito",$data);
		$this->load->view("store/layouts/footer");
		$this->load->view("store/layouts/js2");
	}
	public function producto($id)
	{
		
		$data  = array(
			'producto' => $this->Carrito_model->get_producto($id), 
		);
		
		$this->load->view("store/layouts/header");
		$this->load->view("store/layouts/css3");
		$this->load->view("store/layouts/aside");
		$this->load->view("store/producto",$data);
		$this->load->view("store/layouts/footer");
		$this->load->view("store/layouts/js3");
	}

	public function store()
	{
		
		$data['productos']=$this->Carrito_model->get_all();
		$this->load->view("store/layouts/header");
		$this->load->view("store/layouts/css4");
		$this->load->view("store/layouts/aside");
		$this->load->view("store/tienda",$data);
		$this->load->view("store/layouts/footer");
		$this->load->view("store/layouts/js4");
	}

	public function login()
	{
		
		$data['productos']=$this->Carrito_model->get_all();


		$this->load->view("store/layouts/header");
		$this->load->view("store/layouts/css4");
		$this->load->view("store/layouts/aside");
		$this->load->view("store/login",$data);
		$this->load->view("store/layouts/footer");
		$this->load->view("store/layouts/js4");
	}



	public function add()
	{

		$insert_data=array(
			'id' => $this->input->post('id'),
			'name'=>$this->input->post('name'),
			'price'=>$this->input->post('price'),
			'img'=>$this->input->post('img'),
			'qty'=>$this->input->post('qty'),
		);
		
		$this->cart->insert($insert_data);
		redirect('home/check');
	}

	public function quitP($rowid)
	{

		
	    $this->cart->remove($rowid);
	    redirect('home/check');
	}


	public function clear()
	{

	    $this->cart->destroy();
	    redirect('home/check');
	}

	public function site(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$res = $this->Carrito_model->login($username, sha1($password));
		if (!$res) {
			$this->session->set_flashdata("err","El usuario y/o contraseña son incorrectos");
			redirect(base_url('Home/login'));
		}
		else{
			$data  = array(
				'id' => $res->id, 
				'nombre' => $res->nombre,
				'telefono'=>$res->telefono,
				'direccion'=>$res->direccion,
				'num_documento'=>$res->num_documento,
				'login' => TRUE
			);
			$this->session->set_userdata($data);
			redirect(base_url());
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

	

}
