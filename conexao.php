<?php
try {
	//code...
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "sgs_db";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
} catch (\Throwable $th) {
	//throw $th;
	echo"Erro com Base de dados ".$th->getMessage();
}


?>