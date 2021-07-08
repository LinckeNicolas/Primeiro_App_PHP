function telaListar(){	
	
	window.location.href = 'listarClientes.php';
	
}
function telacadastrar(){
		
$.ajax({
		
		type:"POST",
		url:"controle/controle_cliente.php",
		data:{acao:"deletar", id:valor},	
})
	
function cadastrar(){
	
		$.ajax({	
			type:"POST",
			url:"",
			data:{acao:insere, id:valor},
			success: function(data){
			
			alert('Cadastrado');	
			window.location.href = 'listarClientes.php?';

			}
		})	
}
	
	
	
function telaEditar(valor){
	
	window.location.href = 'formEditarCadastro.php?id='+valor;
}
function deletar(valor){
		
	$.ajax({
		
		type:"POST",
		url:"controle/controle_cliente.php",
		data:{acao:"deletar", id:valor},
		
		success: function(data){
			
			alert("Cliente Deletado!");
			window.location.href = 'listarClientes.php?';
		}	
		
	});
}