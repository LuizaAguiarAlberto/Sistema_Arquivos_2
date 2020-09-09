<?php
	include('cabecalho_conexao.php');
	$SQL = "SELECT * FROM pessoas";
	
	$dados_recuperados = mysqli_query($con, $SQL);
	if(mysqli_num_rows($dados_recuperados)>0){
		
		while(($resultado = mysqli_fetch_array($dados_recuperados)) != null){
			echo $resultado['id']."-". $resultado['nome']."-". $resultado['idade']."-". $resultado['endereco'] ."<br>";
		}		
	}
	
	mysqli_close($con);
	
?>