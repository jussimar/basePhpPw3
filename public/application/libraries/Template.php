<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template{
	function show($view, $data=array()){
		$CI = & get_instance();
		//carrega o conteudo da header
		$CI->load->view("template/header",$data);
		//carrega o conteudo da pagina no nosso caso o main
		$CI->load->view($view,$data);
		//carrega o rodapé a tag footer
		$CI->load->view("template/footer",$data);
		//carrega os scripts e fecha a pagina
		$CI->load->view("template/scripts",$data);
	}
}
