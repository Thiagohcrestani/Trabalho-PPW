<?php
// Incluir aquivo de conexão
include("include/config.dba.php");

$conexao = mysql_pconnect($host,$user,$pass);
mysql_select_db($base,$conexao);

 
// Recebe o valor enviado
$valor = $_POST['valor'];
 
// Procura titulos no banco relacionados ao valor
$sql = mysql_query("SELECT id_usuario, nome_usuario FROM usuario WHERE nome_usuario LIKE '%".$valor."%'");
 
// Exibe todos os valores encontrados
//echo "<table border=1>";
while ($dados = mysql_fetch_object($sql)) {
	echo "<tr>";
	echo "<td width=600><font color=white href=\"javascript:func()\" onclick=\"exibirConteudo('".$dados->id_usuario."')\">" . $dados->nome_usuario . "</font><br /></td>";
	echo "<td><button onclick = 'Excluir(".$dados->id_usuario.")'> Excluir </button></td>";
	echo "</tr>";
}
//echo "</table>";
 
// Acentuação
header("Content-Type: text/html; charset=ISO-8859-1",true);
?>