<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	public function index()
	{
		$this->template->show('cadastro');
	}

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('CadastroModel');
	}

	public function cadastraUsuario(){
		$usuario = new CadastroModel;
		$usuario->inserir();
		redirect(base_url('listar'));
	}

	public function listarUsuario(){
		$usuario = new CadastroModel;
		$data['data'] = $usuario->listar();
		$this->template->show('listagem',$data);
	}

	public function editarUsuario($id){
		$usuario = $this->db->get_where('tb_pessoa',array('id_pessoa'=> $id))->row();
		$this->template->show('editar',array('usuario'=>$usuario));
	}

	public function alterarUsuario($id){
		$usuario = new CadastroModel;
		$usuario->alterar($id);
		redirect(base_url('listar'));
	}

	public function deletarUsuario($id){
		$this->db->where('id_pessoa',$id);
		$this->db->delete('tb_pessoa');
		redirect(base_url('listar'));
	}
}
