<?php 
include("../controle/controle_cliente.php")

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Listagem de Clientes</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="application/javascript" src="../js/cliente.js"></script>	
	
	
</head>
<?php 
	//instanciar classe cliente - Start
	
	
	$obj_cliente = new Cliente();
//instanciar classe cliente - end
	$arrayClientes= $obj_cliente->busca();
?> 
<body>
	
	<table border="2">
	
	<tr>
		
		<td>Nome</td>
		<td>Idade</td>
		<td style="text-align: center">Ação</td>
		
	</tr>

	<?php
	
	foreach($arrayClientes as $value){
	?> 	
	<tr>
		<td><?php echo $value ['nomeCliente']?></td>
		<td><?php echo $value ['idadeCliente']?></td>
		
		<td><input type="button" onclick="telaEditar(<?php echo $value['idCliente'] ?>)" value="Editar">
		
		
		<input type="button" onclick="telaDeletar(<?php echo $value['idCliente'] ?>)" value="Deletar"></td>
	</tr>	
	<?php
	}
	?>
	</table>
	<br>
	<input type="button" onclick="telaEditar(<?php echo $value['idCliente']?>)" value="Tela de cadastro">
	
	
</body>
</html>