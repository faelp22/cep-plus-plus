<?php

	$user = 'root';
	$passwd = '';
	$options = array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'); 
	$dsn = 'mysql:host=localhost;dbname=endereco';

	try {
		$pdo = new \PDO($dsn, $user, $passwd, $options);
	} catch (\Exception $e) {
		echo "Erro na conexao: " . $e->getMessage();
	}

	