<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<?php
	include('seguranca.php');
	if (verificaSessao()) {
		header("location: index_menu.php");
}
?>
	<head>
	<meta charset="UTF-8">
	<meta lang="pt-br">
	</head>
	<script language="JavaScript" type="text/javascript">
	<!--
	function valida() {
		
		var now = new Date;
		var anoatual = now.getFullYear();

		var str = form1.login.value
		if (str.length > 15) {
			alert("O campo Login está limitado a 15 caracteres");
			form1.login.focus();
			return false;
		}
		var login = form1.login.value;
		if (login == "") {
			alert("O campo (Login) esta em branco!\nPor favor entre com um Login!");
			form1.login.focus();
			return false;
		}
			
		var senha = form1.senha.value
		if (senha == ""){
			alert("O campo (Senha) esta em branco!\nPor favor entre com uma Senha!")
			return false;
		}
		
		return true;
	}
-->
</script>
	<body background="Fundo.jpg"><center><img src="logo.png" width="300" height="100" alt="login" ></center>

		<form name="form1" action="ValidaLogin.php" method="post" onsubmit="return valida();">
			<div align="center"> 
				
					
				<table border="0" cellspacing="1" cellpading="0"  >
					<tr>
						<td></td>
					</tr>
					<tr>
						<td align="center" colspan="2" bgcolor="">
						<font size="4" color=""><b>Login</b></td>
					</tr>
					<tr>
						<td align="center" colspan="2">
						<font size="4" color=""><b>Insira Usuário e senha Para Continuar</b></font>
						</td>
					</tr>	
					<tr>
						<td>
						<font size="4" color=""><b>Login</b></td> 
						<td><input type="text" name="login" size="35"></td>
					</tr>
					<tr>
						<td>
						<font size="4" color=""><b>Senha</b></td> 
						<td><input type="password" name="senha" size="35"></td>
					</tr>
					<tr>
						<td colspan="2">
						<center><input type="submit" value="Enviar" name="submit"></center>
						</td>
					</tr>	
				</table>
			</div>
		</form>
	</body>
</html>
