<?php
	
	include_once 'conexao.php';

	try {
		
		$sql = "INSERT INTO endereco(CEP, LOGRADOURO, NUMERO, COMPLEMENTO, BAIRRO, CIDADE, ESTADO) 
		VALUES (:cep, :logradouro, :numero, :complemento, :bairro, :cidade, :estado)";
	                                          
		$stmt = $pdo->prepare($sql);

		$cep = $_POST['cep'];
		$logradouro = $_POST['logradouro'];
		$numero = $_POST['numero'];
		$complemento = $_POST['complemento'];
		$bairro = $_POST['bairro'];
		$cidade = $_POST['cidade'];
		$estado = $_POST['estado'];

		$stmt->bindParam(':cep', $cep, PDO::PARAM_STR);
		$stmt->bindParam(':logradouro', $logradouro, PDO::PARAM_STR);
		$stmt->bindParam(':numero', $numero, PDO::PARAM_STR);
		$stmt->bindParam(':complemento', $complemento, PDO::PARAM_STR);
		$stmt->bindParam(':bairro', $bairro, PDO::PARAM_STR);
		$stmt->bindParam(':cidade', $cidade, PDO::PARAM_STR);
		$stmt->bindParam(':estado', $estado, PDO::PARAM_STR);

		$stmt->execute();

		$redirect = "http://localhost/enderecos/enderecos.php?cad=success";

		header("location:$redirect");
		
	} catch (Exception $e) {
		echo "Error ao cadastrar: " . $e->getMessage();
	}