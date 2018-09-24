<head>
<?php
session_start();

	include('seguranca.php');
	if (!verificaSessao()) {
		header("location: TelaLogin.php");
}

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Menu 1</title>
<link href="style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
function slide1(){
document.getElementById('id').src="img/img1.jpg";
setTimeout("slide2()", 3000)
}
  
function slide2(){
document.getElementById('id').src="img/img2.jpg";
setTimeout("slide3()", 3000)
}
  
function slide3(){
document.getElementById('id').src="img/img3.jpg";
setTimeout("slide1()", 3000)
}
</script>

</head>

<body onload="slide1()" background="Fundo.jpg"><img src="img/usuariologado.png" width="25" height="25" alt="login" >
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
	<li><a href="rel_usu.php">Realtório de Usários</a><li>
	</ul>
	</li>
 <li><a href="logoff.php">Sair</a></li>
</ul>
<div style="margin-top:5%; box-schadow:0px 1px 3px rgba(35,57,64,0.5),inset 0px 1px 3px rgba(209,209,209,0.7)">
<center>
	<img height=400 id="id"/>
</center>
</div>
</body>