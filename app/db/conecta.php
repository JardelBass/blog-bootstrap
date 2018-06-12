<?php

try{
	//Conexao ao banco
	$conexao = new PDO("mysql:dbname=post_blog; host=localhost; charset=utf8",'root', '123');
	//recoperando erro quando não com banco
	$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
}catch(PDOException $ex){
	//tratamento de erro de conexao
	throw new Exception("CONEXAO".$ex->getMessage());
	exit();
}

