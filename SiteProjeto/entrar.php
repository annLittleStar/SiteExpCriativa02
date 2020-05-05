<?php
session_start()
?>
<html>
<head>
	<link rel="icon" type="image/x-icon" href="imagens/Logo.ico">
	<link rel="stylesheet" type="text/css" href="css/estiloLogin.css">

	<title></title>
</head>
<body>
	<div>
		<form action="login.php" method="POST">
			<div >
				<table align="center">
			<tr>
				<td><img src="imagens/Sea+.png" class="img"></td>
			</tr>
			<tr>
				<td><h3>Realize o Login para acessar o sistema</h3></td>
			</tr>
			<?php
			if(isset($_SESSION['naoaut'])):
				?>
			<tr>
				<td><h3 class="erro">Erro: Login e/ou Senha incorretos.</h3></td>
			</tr>
			<?php
			unset($_SESSION['naoaut']);
			endif;
			?>
			<tr>
				<td><input class="textoLogin" id="usuario" type="text"name="usuario" placeholder="Usuario"></td>
			</tr>
			<tr>
				<td><input class="textoLogin" id="senha" type="password" name="senha" placeholder="Senha"></td>
			</tr>
			<tr>
				<td><button type="submit" class="confirma">Confirmar</button></td>
			</tr>
			<tr>
				<td><t class="aviso" id="aviso"></t></td>
			</tr>
		</table>
				
			</div>
		</form>
	</div>

</body>
</html>