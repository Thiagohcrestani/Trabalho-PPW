<?php
	include('include/config.dba.php');

	$conexao = mysql_pconnect($host,$user,$pass);
	mysql_select_db($base,$conexao);

    $nome =  $_POST['nome'];
	
	$sql = "update usuario set nome_usuario = '{$_POST['nome']}', 
	cpf_usuario = '{$_POST['cpf']}',
	rg_usuario = '{$_POST['rg']}',
	endereco_usuario = '{$_POST['logradouro']}',
	num_usuario = '{$_POST['num']}',
	bairro_usuario = '{$_POST['bairro']}',
	cep_usuario = '{$_POST['cep']}', 
	cidade_usuario = '{$_POST['cidade']}',
	uf_usuario = '{$_POST['estado']}', 
	login_usuario = '{$_POST['login']}',
	nivel_usuario = '{$_POST['nivel']}',
	status_usuario = '{$_POST['status']}'
	where id_usuario = '{$_POST['id']}'";
	$result_sql = mysql_query($sql,$conexao);

	header("location: PesquisaUsuario.php");
?>