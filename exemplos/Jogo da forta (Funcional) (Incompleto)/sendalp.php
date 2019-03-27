<?php
	require_once "session.php";
	require_once "config.php";

	$query = "SELECT * FROM games WHERE token = '".$_SESSION['id']."'";
	$run = mysqli_query($GLOBALS['conn'],  $query);
	$row = mysqli_fetch_assoc($run);
	
	$msg_sucess = '<center>Parabéns, Você acertou a palavra ' . $row['palavra'] . '.</center>';
	$msg_fail = '<center>A palavra certa era: ' . $row['palavra'] . '. Mas não Desanime... Tente novamente!</center>';

	$str = str_split($row['palavra']);

	$i=0;
	$casas = "";
	while (count($str) > $i) {
		if ($str[$i] == $_POST['letra']) {
			$casas .= $i.',';
		}
		$i++;
	}

	if ($casas == "") {
		
		$erros_total = $row['erros'] + 1;
		
		$erros_acumulados = $row['erros_c'] + 1;
		
		$resposta['status'] = "errado";
		
		$resposta['quant'] = $erros_total;
		
		if ($erros_total == 7) {
		
			$resposta['sub'] = "lose";
		
			$resposta['msg'] = $msg_fail;

		}else{
			
			if ($erros_acumulados == 3) {
				
				$resposta['sub'] = "dica";
				
				$resposta['dica'] = $row['dica'];
			
			}else{
				$resposta['sub'] = "normal";
			}
		
		}
		
		$query = "UPDATE games SET `erros` = '".$erros_total."', erros_c = '".$erros_acumulados."' WHERE `token` = '".$_SESSION['id']."'";
		
		$run = mysqli_query($GLOBALS['conn'], $query);
		
		echo json_encode($resposta);

	}else{

		$resposta['status'] = "correto";
		
		$casas = substr($casas,0,-1);
		
		$casas = explode(",", $casas);
		
		$erros_acumulados = 0;
	
		$resposta['casas'] = $casas;
	
		$acertos = (int)$row['acertadas'] + (int)count($casas);
		
		if ($acertos == count($str)) {
		
			$resposta['sub'] = "fim";
		
			$resposta['msg'] = $msg_sucess;

		}else{
			
			$resposta['sub'] = "normal";
		
		}
		
		$query = "UPDATE games SET `acertadas` = '".$acertos."', erros_c = '".$erros_acumulados."' WHERE `token` = '".$_SESSION['id']."'";
	
		$run = mysqli_query($GLOBALS['conn'], $query);
		
		echo json_encode($resposta);

	}
