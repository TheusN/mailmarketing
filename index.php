<?php

	/*****************************

		MailMarketing

		Projeto Iniciado por Rodrigo Portillo em 2015

		Projeto Terminado por Matheus Nattan em 2021

		Insta @theusnattanMailMarketing
		
		@url https://matheusnattan.com

	******************************/

	session_start();

	include("libs/seguranca.php");



if(isset($_REQUEST["nome"]) && isset($_REQUEST["senha"])){

	//include "functions.php";

	$nome = $_REQUEST["nome"];

	$senha = $_REQUEST["senha"];

	//Verificar Usuário

	$validado = validaUsuario($nome, $senha);

	if(!$validado):

		$msg = '<div class="alert">Nome de Usuário o Senha Inválido</div>';

	else:

		header("location:dashboard.php");

	endif;

}

?>

<!DOCTYPE>

<html lang="pt_br">

	<header>

		<meta charset="utf-8"/>

		<title>Enviar Email em Lote</title>

		<link rel="stylesheet" href="css/estilo.css">

	</header>

	<body>

		<div class="login">

			<center>

				<img src="<?php echo $caminhoURL; ?>assets/logo_maior.png"/>

			</center>

			<h1>Entre Para Enviar Emails</h1>

			<form action="#" method="post">

				<input type="text" name="nome" placeholder="Nome de Usuário / email"/>

				<input type="password" name="senha" placeholder="Senha"/>

				<button type="submit">Entrar</button>

			</form>

			<?php echo $msg; ?>

		</div>

		

		<div class="powered" style="position: fixed;right: 5px;bottom: 5px;text-align: right;color:lightgrey; font-size:16px;">

		<em>Feito por</em><a href="https://matheusnattan.com" title="Logo Matheus Nattan" itemprop="url" target="_blank"><img style="height: 32px;

			margin-bottom:-10px;width: auto;border-radius:5px;margin-left:5px;margin-right:5px" itemprop="logo" class="logo" src="http://matheusnattan.com/wp-content/uploads/2021/03/logo_maior.png" alt="Logo MatheusNattan" title="Agente de Marketing"></a><span itemprop="name">1.0</span>
		</div>

	</body>

</html>