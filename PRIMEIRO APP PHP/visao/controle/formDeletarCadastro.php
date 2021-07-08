<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<script type="application/javascript" src="../js/cliente.js"></script>	
</head>

<body>
	<?php
	$conectar = mysqli_connect("localhost", "root", "") or die(mysqli_error());
	
	mysql_select_db("mvc",$conectar);
	
	mysql_query("DELETE FROM cliente WHERE idCliente");
	mysql_close($conectar);	
	?>
	
	
	
</body>
</html>