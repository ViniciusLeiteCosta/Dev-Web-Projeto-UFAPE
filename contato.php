<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- ícone ufape no título -->
	<link rel="icon" href="imagens/logo_titulo.png" type="logofaculdade">

	<link rel="stylesheet" type="text/css" href=contato.css>

	<title>UFAPE | CONTATO</title>

</head>


<body bgcolor="#C2C2FF">

	<header>
		<div id="contato">

			<div class="menu-container" align="center">
				
			<a href="principal.html">
					<img align="center" src="imagens/logo.png" width="150" height="150" align="center" logo.png>
				</a>

				<h2 class="nome_universidade">UNIVERSIDADE FEDERAL DO AGRESTE DE PERNAMBUCO</h2>

				<ul>
					<li class="opcaomenu">
						<a class="opcaomenu" href="principal.html">HOME</a>
					</li>

					<li class="opcaomenu">
						<a class="opcaomenu" href="contato.html">CONTATO</a>
					</li>

					<li class="opcaomenu">
						<a class="opcaomenu" href="cursos.html">CURSOS</a>
					</li>

					<li class="opcaomenu">
						<a class="opcaomenu" href="fotos.html">FOTOS</a>
					</li>

					<li class="opcaomenu">
						<a class="opcaomenu" href="areadiscente.html">ÁREA DO DISCENTE</a>
					</li>
				</ul>
			</div>
		</div>
	</header>

	<?php
		// Conexão com o banco de dados
		$host = "localhost";
		$username = "usuario";
		$password = "senha";
		$database = "meu_banco_de_dados";

		$conn = mysqli_connect($host, $username, $password, $database);

		// Verifica se a conexão com o banco de dados foi bem-sucedida
		if (!$conn) {
			die("Não foi possível conectar ao banco de dados: " . mysqli_connect_error());
		}

		// Verifica se o formulário foi submetido
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Obtém os dados do formulário
			$nome = $_POST["nome"];
			$email = $_POST["email"];
			$mensagem = $_POST["mensagem"];

			// Insere os dados no banco de dados
			$sql = "INSERT INTO contatos (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

			if (mysqli_query($conn, $sql)) {
				echo "Mensagem enviada com sucesso!";
			} else {
				echo "Erro ao enviar mensagem: " . mysqli_error($conn);
			}
		}
	?>


	<div class="divisao">
		<form id="formulario">
			<br>
			<h2 class="cabecalho">Entre em contato:</h2>
			<label for="email">
				<strong>EMAIL:</strong>
				<br><input class="inputs" type="text" id="email" placeholder="Digite seu email.">
			</label>

			<br>
			<label for="usuario">
				<br><strong>NOME COMPLETO:</strong>
				<br><input class="inputs" type="usuario" id="usuario" placeholder="Digite sua senha.">
			</label>

			<br>
			<label for="texto">
				<br><strong>INFORMAÇÕES:</strong>
				<br><textarea class="info" type="text" id="texto" placeholder="Digite aqui o motivo do seu contato."></textarea><br>
			</label>

			<br><input class="botao" type="submit" name="" value="Enviar">
	</div>

	<footer class="rodape">

		<strong>
			<br>UNIVERSIDADE FEDERAL DO AGRESTE DE PERNAMBUCO
		</strong>
		<br>AVENIDA BOM PASTOR, S/N.º
		<br>BOA VISTA - GARANHUNS/PE
		<br>CEP: 55292-278

	</footer>
	</form>
</body>

</html>