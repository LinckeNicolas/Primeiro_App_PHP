<?php

include("../controle/controle_cliente.php")?>
<?php $id = $_GET['id']; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulário de Edição</title>
<script type="application/javascript" src="../js/cliente.js"></script>	
</head>
	<?php
	//instanciar classe cliente - Start
	$obj_cliente = new Cliente();
	//instanciar classe cliente - end
	$arrayClientes= $obj_cliente->busca($id);
	
	
/*	echo '<pre>';
	var_dump($arrayClientes);
	echo '</pre>';*/
	?>
	
	
<body>
	<form action="" >
	Nome: <input type="text" name="nome" value="<?php echo $arrayClientes[0]['nomeCliente'] ?>"><br>
		
	Idade: <input type="text" name="idade" value="<?php echo $arrayClientes[0]['idadeCliente'] ?>">
		
	<input type="hidden" value="<?php echo $arrayClientes[0]['idCLiente']?>">

	<input type="button" id="atualizar" value="Alterar"> 
	<input type="hidden" name="acao" value="altera">
	</form>
	<br>
	<input type="button" onclick="telaListar();" value="Tela de Listar Clientes">
	
</body>
</html>
