<?php

include("../controle/controle_cliente.php")?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulário de Cadastro</title>
</head>

<body>
<form action="" method="POST">
	Nome: <input type="text" name="nome">
	<input type="button" id="inserir" onClick="Cadastrar()" value="Gravar">
	<br>
	Idade: <input type="text" name="idade">
	<input type="hidden" name="acao" value="insere">
	</form>
<br>
<input type="button" onClick="window.location.href ='listarClientes.php'" value="Tela de Listar Clientes">
</body>
</html>
