<?php
	include('include/config.dba.php');

	$conexao = mysql_pconnect($host,$user,$pass);
	mysql_select_db($base,$conexao);

    $nome =  $_POST['nome'];
	
	$sql = "insert into usuario (nome_usuario, cpf_usuario, rg_usuario, endereco_usuario, num_usuario, bairro_usuario, cep_usuario, cidade_usuario, uf_usuario, login_usuario, senha_usuario, nivel_usuario, status_usuario) values('{$_POST['nome']}', '{$_POST['cpf']}', '{$_POST['rg']}', '{$_POST['logradouro']}', '{$_POST['num']}', '{$_POST['bairro']}', '{$_POST['cep']}', '{$_POST['cidade']}', '{$_POST['estado']}', '{$_POST['login']}', MD5({$_POST['senha']}), '{$_POST['nivel']}', '{$_POST['status']}')";
	$result_sql = mysql_query($sql,$conexao);
	header("location: Usuario.html");
?>