<!DOCTYPE html>
<html lang="pt_br">
	<head>
	    <meta charset="utf-8"> 
		<link rel="stylesheet" href="../css/estilo.css">
        <title>MailMarketing por Matheus Nattan</title>
        <meta name="description" content="Gerenciador de Mailmarketing">
        <link rel="publisher" href="httpss://matheusnattan.com"/>
        <link rel="author" href="httpss://www.instagram.com/theusnattan"/>
        <meta name="robots" content="no-index" />
        <link rel="icon" type="image/png" href="../assets/simbolo.png" />
	</head>
	<body>
		<div class="login instalador">
			<center>
				<img src="../assets/logo_maior.png"/>
			</center>
			<h1>Bem Vindo ao Instalador</h1>
			<h2>Para prosseguir, preencha os dados do Banco.</h2>
			<form action="criar_config.php" method="post">
				<!-- fake fields are a workaround for chrome autofill getting the wrong fields -->
				<input style="display:none" type="text" name="fakeusernameremembered"/>
				<input style="display:none" type="password" name="fakepasswordremembered"/>
				
				<div>
					<p class="mini-info">Na maioria das vezes, o endereço é, simplesmente, <em>localhost</em>. Em caso de dúvida, consulte a hospedagem</p>
					<input type="text" name="host" placeholder="Endereço do Banco" autocomplete="off" required/>
				</div>
				<div>
					<p class="mini-info">Preencha com o nome do Banco de Dados criado para este </p>
					<input type="text" name="dbname" placeholder="Nome do Banco" autocomplete="off" required/>
				</div>
				<div>
					<p class="mini-info">Login do Usuário com acesso ao Banco de Dados</p>
					<input type="text" name="user" placeholder="Usuário do Banco" autocomplete="off" required/>
				</div>
				<div>
					<p class="mini-info">Senha do Usuário com acesso ao Banco de Dados</p>
					<input type="password" name="pswd" placeholder="Senha do Usuário" autocomplete="off" required/>
				</div>
				
				<button type="submit">Próximo Passo</button>
			</form>
			<div class="info">
				Para funcionamento correto do MailMarketing, recomendamos que use, pelo menos, PHP 5.4 ou superior e é necessário que use um banco MySQL.<br/>
				Caso você tenha dificuldades, consulte sua hospedagem para saber como criar um novo banco de dados, usuário e senha.
			</div>
		</div>
		
		<div class="powered" style="position: fixed;right: 5px;bottom: 5px;text-align: right;color:lightgrey; font-size:16px;">
		<em>Feito por</em><a href="https://matheusnattan.com" title="PortilloDesign" itemprop="url" target="_blank"><img style="height: 32px;
			margin-bottom:-10px;width: auto;border-radius:5px;margin-left:5px;margin-right:5px" itemprop="logo" class="logo" src="http://matheusnattan.com/wp-content/uploads/2021/03/logo_maior.png" alt="Logo MatheusNattan" title="Agente de Marketing"></a><span itemprop="name">1.0</span>
		</div>
	</body>
</html>