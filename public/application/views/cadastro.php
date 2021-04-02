<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<main>
	<form action="<?= base_url('inserir') ?>" method="post">
		<div class="row">
			<div class="col-12">
				<h1>Cadastro de Pessoa</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label for="">Nome:</label>
					<input type="text" class="form-control" name="nome">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label for="">Idade:</label>
					<input type="number" class="form-control" name="idade">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<button type="submit" class="btn btn-success">Enviar</button>
				</div>
			</div>
		</div>
	</form>
<main>
