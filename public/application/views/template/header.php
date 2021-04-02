<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home - Site PW3</title>
	<link rel="stylesheet" href="<?= base_url() ?>assets/reset.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/principal.css">
</head>
<body>
	<div class="container-fluid">
        <header>
            <div class="row">
                <div class="col-12">
                    <div class="jumbotron cont">
                        <h1 class="display-4">Seja bem vindo!</h1>
                        <p class="lead">Vamos Aprender a criar um site php usando framework</p>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= base_url() ?>principal">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>quemsomos">Quem Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>contato">Contato</a>
						</li>
						<li class="nav-item">
                            <a class="nav-link" href="<?= base_url('listar') ?>">Listar</a>
						</li>
						<li class="nav-item">
                            <a class="nav-link" href="<?= base_url('cadastro') ?>">Cadastro</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- final do header -->
