<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<main>
	<form action="<?=base_url('alterar/'.$usuario->id_pessoa)?>" method="post">
		<div class="row">
			<div class="col-12">
				<h1>Atualização do Cadastro de Pessoa</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label for="">Nome:</label>
					<input type="text" class="form-control" name="nome" value="<?=$usuario->nm_pessoa?>">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label for="">Idade:</label>
					<input type="number" class="form-control" name="idade" value="<?=$usuario->nr_idade?>">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<button type="submit" class="btn btn-success">Salvar Alterações</button>
				</div>
			</div>
		</div>
	</form>
<main>
