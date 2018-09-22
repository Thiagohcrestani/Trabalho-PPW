<?php
date_default_timezone_set("America/Sao_Paulo");
include('include/config.dba.php');

$conexao = mysql_pconnect($host,$user,$pass);
mysql_select_db($base,$conexao);



$sql_rel = "Select * from usuario";
$r_sql_rel = mysql_query($sql_rel, $conexao);
$n_sql_rel = mysql_num_rows($r_sql_rel);

header("Content-Type: text/html; charset=ISO-8859-1",true);
if($n_sql_rel!=0){
	?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<body background="Fundo.jpg"><center><img src="logo.png" width="300" height="100" alt="login" ></center>
<ul id="menu-bar">
 <li><a href="index_menu.html">Inicio</a>
 <li><a href="#">Cadastros</a>
   <ul>
   <li><a href="Usuario.html">Novo Usuário</a></li>
   <li><a href="EditarUsuario.html">Editar Usuário</a></li>
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
	<li><a href="rel_usu.php">Relatório de Usuários</a><li>
	</ul>
	</li>
 <li><a href="logoff.php">Sair</a></li>
</ul>
	<br>
	<br>
	
	<table border=0 align=center  WIDTH=600 ALIGN=CENTER bgcolor="white">
		<tr>
			<td>
				<center><FONT SIZE="5" face="VERDANA">Relatório de Usuários</font></center>
			</td>
		</tr>
		<tr>
			<td align=right width=250><FONT SIZE=-2 FACE=VERDANA><center><?php echo "Data: ". date("d/m/Y") ." &nbsp; &nbsp; Hora: ". date("H:i:s"); ?></center></FONT></td>
		</tr>
	</table>
	<table border=0 align=center cellpadding=0 cellspacing=0 WIDTH=600 ALIGN=CENTER bgcolor="white">
		<tr>
			<td WIDTH=100><FONT SIZE=-2 FACE=VERDANA><center>Código</center></FONT></td>
			<td WIDTH=500><FONT SIZE=-2 FACE=VERDANA><CENTER><center>Nome</CENTER></FONT></TD>
		</tr></center>
		<tr>
			<td colspan=2><hr size=1 noshade></td>
		</tr>

	<?php
	for($x=0; $x < $n_sql_rel; $x++){
			
			?>
			
			<tr
			<?php
			 if($x%2==0)
				echo " bgcolor=#EAEAEA";
			?>
			>
				<td><font size=-1 face=arial><center><?php echo mysql_result($r_sql_rel, $x, 'id_usuario'); ?></center></font></td>
				<td><font size=-1 face=arial><center><?php echo mysql_result($r_sql_rel, $x, 'nome_usuario');  ?></center></font></td>
			</tr>
			<tr><td colspan=2><hr size=1 noshade></td></tr>
	<?php
	}
}
