<?php
include('include/config.dba.php');
session_start();

function criaSessao($login,$senha,$conexao){
	$sql = "SELECT * from usuario where login_usuario = '$login' and senha_usuario = '$senha'";
	$result_sql = mysql_query($sql,$conexao);


	$_SESSION["calory_id"]=mysql_result($result_sql,0,"id_usuario");
	$_SESSION["calory_usuario"]=mysql_result($result_sql,0,"nome_usuario");
	$_SESSION["calory_senha"]=mysql_result($result_sql,0,"senha_usuario");





}
function validaLogin($login,$senha,$conexao){
	$sql = "SELECT * from usuario where login_usuario = '$login' and senha_usuario = '$senha'";
	$result_sql = mysql_query($sql,$conexao);
	$n_sql = mysql_num_rows($result_sql);	

	if ($n_sql!=0){
		return true;

	}else {
		return false;
	}

}

function verificaSessao(){
	if (isset($_SESSION["calory_id"])) {
		return true;

	}else{
		return false;
	}


}

?>