<?php
include("../../controle/controle_cliente.php");
	
$nomeCliente  = $_POST["nome"];
$idadeCliente = $_POST["idade"];
$idCliente    = $_POST["id"];

$acao         = $_POST["acao"];


$obj_cliente   = new Cliente();

if($acao = "insere"){
	
	$obj_cliente   = new Cliente();
	
	$result = $obj_cliente->insere($nomeCliente, $idadeCliente);
	
	
	if($result === true){
		header("location: ../formCadastro.php");
	}else{
		echo "ERRO:001";
	}
}elseif($acao == "altera"){
	
	$result = $obj_cliente->atualizar($nomeCliente, $idadeCliente, $idCliente);
	header("location: ../listarClientes.php");
	
}elseif($acao == "deletar"){
	
	$result = $obj_cliente->deletar($idCliente);

	//header("location: ../listarClientes.php");
	
}
?>