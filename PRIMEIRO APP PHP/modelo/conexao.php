<?php
	/// modelo - start
	/// conexao banco
	
class conexao{
	
	public function con(){

		$conectar = mysqli_connect("localhost", "root", "") or die(mysqli_error());
	/// seleciona banco
		mysqli_select_db($conectar, "mvc") or die(mysqli_error());
		
			return $conectar;
		

	}
}

	/// modelo - end
/*
	$sql = "SELECT nomeCliente, idadeCliente FROM cliente";


	$resultado = mysqli_query($conectar, $sql);
	
	while($dados = mysqli_fetch_assoc($resultado)){
		
		echo "Nome: ". $dados ['nomeCliente']. '<br>';
		echo "Idade: ". $dados ['idadeCliente']. '<br>';
	}
*/
	

	
?>