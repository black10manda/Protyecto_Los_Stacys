<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model("Productos_model");
		$this->load->library('cart');
		$this->load->model('Carrito_model');
		$this->load->model('Contacto_model');
		$this->load->model('Clientes_model');
		$this->load->model("Ventas_model");
	}


	public function nosotros()
	{
		
		$data['productos']=$this->Carrito_model->get_all();
		$this->load->view("store/layouts/header");
		$this->load->view("store/layouts/css4");
		$this->load->view("store/layouts/aside");
		$this->load->view("store/contacto",$data);
		$this->load->view("store/layouts/footer");
		$this->load->view("store/layouts/js5");
	}

	public function registro()
	{
		
		$data['productos']=$this->Carrito_model->get_all();
		$this->load->view("store/layouts/header");
		$this->load->view("store/layouts/css4");
		$this->load->view("store/layouts/aside");
		$this->load->view("store/registro",$data);
		$this->load->view("store/layouts/footer");
		$this->load->view("store/layouts/js5");
	}

	public function info()
	{
		
		$data['productos']=$this->Carrito_model->get_all();
		$this->load->view("store/layouts/header");
		$this->load->view("store/layouts/css4");
		$this->load->view("store/layouts/aside");
		$this->load->view("store/info",$data);
		$this->load->view("store/layouts/footer");
		$this->load->view("store/layouts/js5");
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
		
		$id=$this->session->userdata("id");
		$data['productos']=$this->Carrito_model->get_all();
		$data['cliente']=$this->Clientes_model->getCliente($id);


		$this->load->view("store/layouts/header");
		$this->load->view("store/layouts/css4");
		$this->load->view("store/layouts/aside");
		$this->load->view("store/login",$data);
		$this->load->view("store/layouts/footer");
		$this->load->view("store/layouts/js4");
	}

	public function checkout()
	{
		
		$id=$this->session->userdata("id");
		$data['productos']=$this->Carrito_model->get_all();
		$data['cliente']=$this->Clientes_model->getCliente($id);


		$this->load->view("store/layouts/header");
		$this->load->view("store/layouts/css4");
		$this->load->view("store/layouts/aside");
		$this->load->view("store/checkout",$data);
		$this->load->view("store/layouts/footer");
		$this->load->view("store/layouts/js4");
	}



	public function adduser()
	{

		$data=array(
			'id' => $this->input->post('idcliente'),
			'nombre'=>$this->input->post('nombre'),
			'telefono'=>$this->input->post('telefono'),
			'direccion'=>$this->input->post('direccion'),
			'tipo_cliente_id'=>3,
			'tipo_documento_id'=>2,
			'num_documento'=>$this->input->post('num_documento'),
			'pass'=>sha1($this->input->post('pass')),

		);
		
		if ($this->Clientes_model->save($data)) {
				redirect(base_url());
			}
			else{
				$this->session->set_flashdata("err","No se pudo guardar la informacion");
				redirect(base_url('Home/adduser'));
			}
		
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

	public function envioC(){
		$nombre = $this->input->post("nombre");
		$correo = $this->input->post("correo");
		$asunto = $this->input->post("asunto");
		$mensaje = $this->input->post("mensaje");
		
		
			$data  = array(
				'id'=>0,
				'nombre' => $nombre,
				'correo'=>$correo,
				'asunto'=>$asunto,
				'mensaje'=>$mensaje
			);
		if ($this->Contacto_model->save($data)) {
			redirect(base_url('Home/nosotros'));
		}else{
			echo "salio mal";
		}
	
	}


public function compra(){
	$now = time();
	$num = date("w");
	$WeekMon  = mktime(0, 0, 0, date("m", $now)  , date("d", $now), date("Y", $now));    //monday week begin calculation
	$todayh = getdate($WeekMon); //monday week begin reconvert

	$d = $todayh[mday];
	$m = $todayh[mon];
	$y = $todayh[year];
		$fecha = $y."/".$m."/".$d ;
		$subtotal = $cart=$this->cart->total();
		$igv = 0;
		$descuento = 0;
		$total = $cart=$this->cart->total();;
		$idcomprobante = 1;
		$idcliente = $this->session->userdata("id");;

		$idusuario = 1;

		$numero =$this->session->userdata("num_documento");
		$serie = 1;

		$idproductos = $this->cart->contents('id');

		$data = array(
			'fecha' => $fecha,
			'subtotal' => $subtotal,
			'igv' => $igv,
			'descuento' => $descuento,
			'total' => $total,
			'tipo_comprobante_id' => $idcomprobante,
			'cliente_id' => $idcliente,
			'usuario_id' => $idusuario,
			'num_documento' => $numero,
			'serie' => $serie,
		);

		if ($this->Ventas_model->save($data)) {
			$this->cart->destroy();
			redirect(base_url());


		}else{
			echo "salio mal";
		}
	}
	

	

}
