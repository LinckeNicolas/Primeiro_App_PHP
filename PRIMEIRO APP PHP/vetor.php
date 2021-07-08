<?php
///Exercicio vetor 
///Crie um vetor com 10 keys onde
///cada key possui um valor
///apos mostre na tela qual é PAR e
///qual é IMPAR.

///    SAIDA 

/// vetor[i]:: 15 - IMPAR
/// vetor[i]:: 2  - PAR


///Autor: Nairo A. J. Sanches
///Data 2021-06-09

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Vetor</title>
</head>
	<?php
	/// Entrada 
	$arrayNumeros[0] = 1;
	$arrayNumeros[1] = 2;
	$arrayNumeros[2] = 3;
	$arrayNumeros[3] = 4;
	$arrayNumeros[4] = 5;
	$arrayNumeros[5] = 6;
	$arrayNumeros[6] = 7;
	$arrayNumeros[7] = 8;
	$arrayNumeros[8] = 9;
	$arrayNumeros[9] = 10;
	$Resultado;
	/// Processamento
	?>

<body>
	<?php
	
	foreach($arrayNumeros as $key =>$concat){
		
		
		if($concat %2 == 0){
			
			$acao = 'PAR';
			
		}else{
			$acao = 'IMPAR';
			
		}
		
		
		echo 'vetor ['.$key.']::'.$concat.' - '.$acao.' <br>';
	
		
		
		
		
	}
	
	?>
</body>
</html>