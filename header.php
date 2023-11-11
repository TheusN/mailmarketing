<?php

	/*****************************

		MailMarketing

		Projeto Iniciado por Rodrigo Portillo em 2015

		Projeto Terminado por Matheus Nattan em 2021

		Insta @theusnattanMailMarketing
		
		@url https://matheusnattan.com

	******************************/

	session_start();

	

	include_once("libs/config.php");

	if(isset($_SESSION["usuarioNome"])==null){

		header("location:".$caminhoURL."index.php");

	}

	?>

<!DOCTYPE html>

<html lang="pt_br">

	<head>

	    <meta charset="utf-8"> 

		<link rel="stylesheet" href="<?php echo $caminhoURL; ?>css/estilo.css">

        <link rel="stylesheet" href="https://tinymce.cachefly.net/4.2/skins/lightgray/skin.min.css">

		<script src="<?php echo $caminhoURL; ?>js/advanced.js"></script>

		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>	

		<script src="<?php echo $caminhoURL; ?>js/tinymce/tinymce.min.js"></script>

        <script src="<?php echo $caminhoURL; ?>js/jquery.colorbox-min.js"></script>

        

        <title>MailMarketing por Matheus Nattan</title>

        <meta name="description" content="Gerenciador de Mailmarketing">

        <link rel="publisher" href="httpss://matheusnattan.com"/>

        <link rel="author" href="httpss://www.instagram.com/theusnattan"/>

        <meta name="robots" content="no-index" />

        <link rel="icon" type="image/png" href="assets/simbolo.png" />

	</head>

	<body>

		<header class="cabecalho">

			<center>

				<a href="https://matheusnattan.com/" title="Link para o site" target="_blank"><img src="<?php echo $caminhoURL; ?>assets/simbolo.png"/></a>

				<h1><?php echo $nomeEmpresa; ?></h1>

			</center>

			<div class="menu">

			<nav>

				<ul>
					<li><a href="<?php echo $caminhoURL; ?>dashboard.php">DASHBOARD</a></li>

					<li><a href="<?php echo $caminhoURL; ?>email.php">Novo Email</a></li>

					<li><a href="<?php echo $caminhoURL; ?>emails.php">Emails Enviados</a></li>

					<li><a href="<?php echo $caminhoURL; ?>grupos.php">Grupos</a></li>

					<li><a href="<?php echo $caminhoURL; ?>clientes.php">Contatos</a></li>

					<li><a href="<?php echo $caminhoURL; ?>usuarios.php">Usuários</a></li>

					<li><a href="<?php echo $caminhoURL; ?>configuracoes.php">Configurações</a></li>

				</ul>

			</nav>

		</div>

		</header>

		<p class="green"><?php echo $enviados;?></p>

		