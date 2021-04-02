<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastroModel extends CI_Model{
	public function inserir(){
		$data = array(
			'nm_pessoa' => $this->input->post('nome'),
			'nr_idade' => $this->input->post('idade')
		);
		return $this->db->insert("tb_pessoa",$data);
	}

	public function listar(){
		$query = $this->db->get("tb_pessoa");
		return $query->result();
	}

	public function alterar($id){
		$data = array(
			'nm_pessoa' => $this->input->post('nome'),
			'nr_idade' => $this->input->post('idade')
		);

		$this->db->where('id_pessoa',$id);
		return $this->db->update("tb_pessoa",$data);
	}
}
