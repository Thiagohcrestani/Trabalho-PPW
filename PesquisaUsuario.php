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
  <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="funcs.js"></script>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <!-- <link href="estilo.css" rel="stylesheet" type="text/css">
 --> </head>

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
   
      <table class="painel" id="pesquisa" align="center" border=1 width=600>
			<tr>
			    <td bgcolor="" Colspan=2><center><b>EDITAR USUÁRIO</b></center></td>
			</tr>
			<tr>
				<td bgcolor="" width=100><b>PESQUISAR</b>:</td>
				<td width=500><input type="text" id="busca" onkeyup="buscarNoticias(this.value)"  name="text" pattern="[A-z\s]+$" size="60"></td>
				
				<br>
				<div id="conteudo"></div>
			</tr>	
			<td colspan=2>
			 <div id="resultado"></div>
			</td>
	  </table>
	 
	  <div id="divEdit"> </div>
 </body>
 <script>
 
 function buscarNoticias(valor) {
	$.ajax({
		type: "POST",
		url: "busca.php",
		data: {valor: valor}

	}).done(function (data){
		$("#resultado").html(data);
		
	})


}
 function exibirConteudo(id) {
	$.ajax({
		type: "POST",
		url: "editarUsuario.php",
		data: {id: id}

	}).done(function (data){
		$("#pesquisa").hide(300);
		$("#resultado").hide(300);
		$("#divEdit").html(data);
		
		
	})

	}
	function Excluir (id) {
	$.ajax({
		type: "POST",
		url: "ExcluirUsuario.php",
		data: {id: id}

	}).done(function (data){
		
		buscarNoticias($("#busca").val());
	})

	}
	function setEstado(){	
		var id=$("#selectEstado").val();
			alert(id);
				$("#"+id).attr('selected','selected');
			

		
		}
	
</script>
</html>
