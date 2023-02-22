<?php

	include_once("conexao.php");
	
	// Indicamos o nome do campo que queremos recuperar
	//$dados = $_FILES['arquivo'];
	//var_dump($dados);
	

	if(!empty($_FILES['arquivo']['tmp_name'])){
		// Instanciando a class DomDocument
		$arquivo = new DomDocument();
		//Carrega o arquivo XML
		$arquivo->load($_FILES['arquivo']['tmp_name']);
		//var_dump($arquivo);
		
		$linhas = $arquivo->getElementsByTagName("Row");
		//var_dump($linhas);
		
		$primeira_linha = true;
		
		foreach($linhas as $linha){
			if($primeira_linha == false){
				$nome = $linha->getElementsByTagName("Data")->item(0)->nodeValue;
				echo "Nome: $nome <br>";
				
				$departamento = $linha->getElementsByTagName("Data")->item(1)->nodeValue;
				echo "Departamento: $departamento <br>";

				$locall = $linha->getElementsByTagName("Data")->item(2)->nodeValue;
				echo "locall: $locall <br>";

				$nr_dias_week = $linha->getElementsByTagName("Data")->item(3)->nodeValue;
				echo "dias_trabalhados: $nr_dias_week <br>";

				$valor_pago_week = $linha->getElementsByTagName("Data")->item(4)->nodeValue;
				echo "valor_trabalho: $valor_pago_week <br>";
                
				$nr_dias_weeks = $linha->getElementsByTagName("Data")->item(5)->nodeValue;
				echo "nr_dias_weeks: $nr_dias_weeks <br>";
				
				$valor_pago_weeks = $linha->getElementsByTagName("Data")->item(6)->nodeValue;
				echo "valor_pago_weeks: $valor_pago_weeks <br>";

				$nr_dias_weekend = $linha->getElementsByTagName("Data")->item(7)->nodeValue;
				echo "nr_dias_weekend: $nr_dias_weekend <br>";

				$valor_pago_weekend = $linha->getElementsByTagName("Data")->item(8)->nodeValue;
				echo "valor_pago_weekend: $valor_pago_weekend <br>";

				$nr_dias_weekends = $linha->getElementsByTagName("Data")->item(9)->nodeValue;
				echo "nr_dias_weekends: $nr_dias_weekends <br>";

				$valor_pago_weekends = $linha->getElementsByTagName("Data")->item(10)->nodeValue;
				echo "inss_empresa: $valor_pago_weekends <br>";

				$total_dias = $linha->getElementsByTagName("Data")->item(11)->nodeValue;
				echo "total_dias: $total_dias <br>";

				$sub_transporte = $linha->getElementsByTagName("Data")->item(12)->nodeValue;
				echo "sub_transporte: $sub_transporte <br>";
				
				$sub_team_leader = $linha->getElementsByTagName("Data")->item(13)->nodeValue;
				echo "sub_team_leader: $sub_team_leader <br>";

				$sub_afetacao = $linha->getElementsByTagName("Data")->item(14)->nodeValue;
				echo "sub_afetacao: $sub_afetacao <br>";
				
				echo "<hr>";
				
				//Inserir o usuário no BD
				$result_usuario = "INSERT INTO salarios_oficial (nome, departamento, locall, 	nr_dias_week, valor_pago_week, nr_dias_weeks, 	valor_pago_weeks, nr_dias_weekend, 	valor_pago_weekend, nr_dias_weekends, 	valor_pago_weekends,	total_dias, sub_transporte, sub_team_leader, 	sub_afetacao) VALUES ('$nome', '$departamento', '$locall', '$nr_dias_week', '$valor_pago_week', '$nr_dias_weeks', '$valor_pago_weeks', '$nr_dias_weekend', '$valor_pago_weekend', '$nr_dias_weekends', '$valor_pago_weekends', '$total_dias', '$sub_transporte', '$sub_team_leader', '$sub_afetacao')";
				$resultado_usuario = mysqli_query($conn, $result_usuario);
			}
			$primeira_linha = false;
		}
	}
?>