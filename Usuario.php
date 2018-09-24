<?php

session_start();

include('seguranca.php');
	if (!verificaSessao()) {
		header("location: TelaLogin.php");
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title> MPD </title>
  <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
  <link href="style.css" rel="stylesheet" type="text/css" />



 </head>

 <body background="Fundo.jpg"><img src="img/usuariologado.png" width="25" height="25" alt="login" >
 <font size="" face="verdana" color=""><?php echo $_SESSION["calory_usuario"];?></font>

 <center><img src="logo.png" width="300" height="100" alt="login" ></center>
 <ul id="menu-bar">
 <li><a href="index_menu.php">Inicio</a>
 <li><a href="#">Cadastros</a>
   <ul>
   <li><a href="Usuario.php">Novo Usuário</a></li>
   <li><a href="PesquisaUsuario.php">Editar Usuário</a></li>
  </ul>
 </li>
 <li><a href="#">Operações</a>
  <ul>
   <li><a href="#">Services Sub Menu 1</a></li>
   <li><a href="#">Services Sub Menu 2</a></li>
   <li><a href="#">Services Sub Menu 3</a></li>
   <li><a href="#">Services Sub Menu 4</a></li>
  </ul>
 </li>
 <li><a href="#">Relatórios</a>
	<ul>
	<li><a href="rel_usu.php">Relatório de Usários</a><li>
	</ul>
	</li>
 <li><a href="logoff.php">Sair</a></li>
</ul>	
   <center><img src="usuario.png" width="100" height="100" alt="Usuário"></center>
    <form name="pagina" method="post" action="ValidaUsuario.php" onsubmit="return ValidaCPF();" >
      <table class="painel" align="center"  width=600 border=1>
			<tr>
			    <td bgcolor="" colspan=2 width=600><center><b>CADASTRO USUÁRIO</b></center></td>
			</tr>
			<tr>
				<td bgcolor="" width=100><b>Nome</b>:</td>
				<td width=500><input type="text"  name="nome"  size="60"></td>
			</tr>
			<tr>
				<td bgcolor="" width=100><b>Cpf</b>:</td>
				<td width=500><input type="number" id="cpf"  name="cpf"  size="23" onchange="verificaCpf(); ValidaCPF();">
				&nbsp;<b>Rg:</b><input type="number"  name="rg"  size="23"></td>
			</tr>
			<tr>
				<td bgcolor="" width=100><b>Logradouro</b>:</td>
				<td width=500><input type="text"  name="logradouro" >
				&nbsp;<b>Número:</b><input type="number"  name="num"  maxlength=4></td>
			</tr>
			<tr>
			    <td bgcolor="" width=100><b>Bairro</b>:</td>
				<td width=500><input type="text" " name="bairro"  size="20">	
				<b>Cep:</b><input type="text"  name="cep"  size="25"></td>
			</tr>
			<tr>
				<td width=100><b>Cidade:</b></td>
				<td width=500><input type="text"  name="cidade" size="30">
				<b>Estado:</b><select style="width: 80px;" name="estado">
											<option value="AC">Acre</option>
											<option value="AL">Alagoas</option>
											<option value="AP">Amapá</option>
											<option value="AM">Amazonas</option>
											<option value="BA">Bahia</option>
											<option value="CE">Ceará</option>
											<option value="DF">Distrito Federal</option>
											<option value="ES">Espírito Santo</option>
											<option value="GO">Goiás</option>
											<option value="MA">Maranhão</option>
											<option value="MT">Mato Grosso</option>
											<option value="MS">Mato Grosso do Sul</option>
											<option value="MG">Minas Gerais</option>
											<option value="PA">Pará</option>
											<option value="PB">Paraíba</option>
											<option value="PR">Paraná</option>
											<option value="PE">Pernambuco</option>
											<option value="PI">Piauí</option>
											<option value="RJ">Rio de Janeiro</option>
											<option value="RN">Rio Grande do Norte</option>
											<option value="RS">Rio Grande do Sul</option>
											<option value="RO">Rondônia</option>
											<option value="RR">Roraima</option>
											<option value="SC">Santa Catarina</option>
											<option value="SP">São Paulo</option>
											<option value="SE">Sergipe</option>
											<option value="TO">Tocantins</option>
									</select>
				</td>
			</tr>
			<tr>
			    <td bgcolor="" width=100><b>Login</b>:</td>
				<td width=500><input type="text" " name="login" size="20">
			    <b>Senha</b>:
				<input type="password" name="senha" size="20"></td>
			</tr>
			<tr>
				<tr>
			    <td bgcolor="" width=100><b>Nível:</b></td>
				<td width=500><input type="radio"  name="nivel" checked value="0">0
				&nbsp;<input type="radio" name="nivel" value="1">1
				&nbsp;<input type="radio"  name="nivel" value="2">2
				<input type="radio"  name="nivel" value="3">3
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Status:</b><select style="width: 80px;" name="status">
					<option value="A">Ativo</option>
					<option value="I">Inativo</option>
				</td>
			</tr>
			<tr>
                <td bgcolor="" colspan=2 width=600><center>&nbsp;</center></td>
			</tr>
			<tr>
                <td bgcolor="" colspan=2 width=600><center><input type="submit" name="submit" value="Salvar" ></center></td>
			</tr>
 	  </table>
	</form>
 </body>

	<script>
	function ValidaCPF(){
	var strCPF = $("#cpf").val();
    var Soma;
    var Resto;
    Soma = 0;
	if (strCPF == "00000000000"){
		alert("CPF Inválido");
		strCPF = $("#cpf").val("");
	return false;
	}
     
	for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
	 Resto = (Soma * 10) % 11;
   
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10)) ){
		alert("CPF Inválido");
		strCPF = $("#cpf").val("");
	return false;
   }
	Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;
   
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) ){
		alert("CPF Inválido");
		strCPF = $("#cpf").val("");
	return false;
	}
    return true;
	}


	function verificaCpf() {
	var cpf =$("#cpf").val();
		
	$.ajax({
		type: "POST",
		url: "VerificaCpf.php",
		data: {cpf: cpf}

	}).done(function (data){
		if (data!=""){
			var txt;
			var r = confirm(data);
			if (r == true) {
	
		   } else {
				$("#cpf").val("");
			}
		}
		
		
		
	})

	}
	</script>
	</html>
