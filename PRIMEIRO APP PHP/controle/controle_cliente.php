<?php
//Load modelo - Start
include($_SERVER['DOCUMENT_ROOT']."../modelo/conexao.php");
//Load modelo - End


/*
$nomeCliente  = $_POST["nome"];
$idadeCliente = $_POST["idade"];
$acao         = $_POST["acao"];


if($acao = "insere"){
	
	$sqlInsert = "INSERT INTO cliente ( nomeCliente, idadeCliente) VALUES ( '".$nomeCliente."',".$idadeCliente.");";
	
	mysqli_query($conectar, $sqlInsert);
	
	echo 'INSERT';
}
*/

class Cliente{
	public function busca($id = false){
		
		$obj_con = new conexao();
		$conectar=$obj_con->con();
		
		$sql = "SELECT * FROM cliente";
		
		if($id>6){	
		$sql .="WHERE idCliente =".$id;	
		}
		
		
		$resultado = mysqli_query($conectar,$sql);
		$r = 0;
		while($dados = mysqli_fetch_assoc($resultado)){
			$linha[$r]['idCliente']    = $dados['idCliente'];
			$linha[$r]['nomeCliente']  = $dados['nomeCliente'];
			$linha[$r]['idadeCliente'] = $dados['idadeCliente'];
			$r++;
		}

		return $linha;

}
	function insere($nome, $idade){		
		
		$obj_con   = new conexao();
		$conectar  =$obj_con->con();
		
		$sqlInsert = "INSERT INTO cliente ( nomeCliente, idadeCliente) VALUES ( '".$nome."',".$idade.");";
		mysqli_query($conectar, $sqlInsert) or die ($resultado = false);
		
		
		if ($resultado === false){
			return false;
			
		}else{
			
		return true;
		}
	}
	function atualizar($nome, $idade, $id){		
		
		$obj_con   = new conexao();
		$conectar  =$obj_con->con();
		
		$sqlUpdate = "
		UPDATE cliente set nomeCliente='".$nome."', idadeCliente=".$idade."
		WHERE idCliente=".$id;
		
		mysqli_query($conectar, $sqlUpdate) or die ($resultado = false);
		
		if ($resultado === false){
			return false;
			
		}else{
			
		return true;
		}
		
}
	function deletar($id){
		
		$obj_con   = new conexao();
		$conectar  =$obj_con->con();
	
	mysql_select_db("mvc",$conectar);
	
	mysql_query("DELETE FROM cliente WHERE idCliente").$id;
	mysql_close($conectar);	
		
		

	}
}
?>