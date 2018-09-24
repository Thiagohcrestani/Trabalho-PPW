<?php

include('seguranca.php');

include('include/config.dba.php');

$conexao = mysql_pconnect($host,$user,$pass);
mysql_select_db($base,$conexao);


$login = $_POST["login"]; 
$senha =  md5($_POST["senha"]); 



if(validaLogin($login,$senha,$conexao)){
	criaSessao($login,$senha,$conexao);

	echo "\n <script language=\"JavaScript\">";
	echo "\n <!--";
	echo "\n 	location.href = \"index_menu.php\";";
	echo "\n //-->";
	echo "\n </script>";
}else{
?>
<script language="JavaScript">
		alert("Usuário/Senha Incorretos, favor verificar!!!");
		window.history.go(-1);
	</script>
	<?php

}

?>
<html>
</html>