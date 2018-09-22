<?php
include('include/config.dba.php');

$conexao = mysql_pconnect($host,$user,$pass);
mysql_select_db($base,$conexao);


$login = $_POST["login"]; 
$senha =  md5($_POST["senha"]); 

$sql = "SELECT * from usuario where login_usuario = '$login' and senha_usuario = '$senha'";
$result_sql = mysql_query($sql,$conexao);
$n_sql = mysql_num_rows($result_sql);

if($n_sql!=0){
	echo "\n <script language=\"JavaScript\">";
	echo "\n <!--";
	echo "\n 	location.href = \"index_menu.html\";";
	echo "\n //-->";
	echo "\n </script>";
}else{
?>
<script language="JavaScript">
		alert("Usuáro/Senha Incorretos, favor verificar!!!");
		window.history.go(-1);
	</script>
	<?php

}

?>
<html>
</html>