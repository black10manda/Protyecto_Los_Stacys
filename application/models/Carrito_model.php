<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrito_model extends CI_Model {

	public function get_all(){
		$sql=$this->db->get('productos');
		return $sql->result_array();
	}

	public function get_producto($id){
		$this->db->where("id",$id);
		$resultado=$this->db->get('productos');
		return $resultado->row();
	}

	public function login($username, $password){
		$this->db->where("num_documento", $username);
		$this->db->where("pass", $password);
		$resultados = $this->db->get("clientes");
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		}
		else{
			return false;
		}
	}

}
