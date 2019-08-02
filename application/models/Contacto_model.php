<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto_model extends CI_Model {

	public function getContactos(){
		$this->db->where("estado","1");
		$resultados = $this->db->get("contacto");
		return $resultados->result();
	}

	public function save($data){
		return $this->db->insert("contacto",$data);
	}
	public function getContacto($id){
		$this->db->where("id",$id);
		$resultado = $this->db->get("contacto");
		return $resultado->row();

	}

	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("contacto",$data);
	}
}