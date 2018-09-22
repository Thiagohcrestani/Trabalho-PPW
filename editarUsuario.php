<?php
include('include/config.dba.php');

$conexao = mysql_pconnect($host,$user,$pass);
mysql_select_db($base,$conexao);

$id = $_POST['id'];
$sql = "Select * from usuario where id_usuario = $id";
$result	 = mysql_query($sql);


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

 <body background="Fundo.jpg">
    <form name="pagina" method="post" action="UpdateUsuario.php" onsubmit="return ValidaCPF();" >
      <table class="painel" align="center"  width=600 border=1>
			<tr>
			    <td bgcolor="" colspan=2 width=600><center><b>EDITAR USUÁRIO</b></center></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value="<?php echo mysql_result($result,0,'id_usuario')?>"></td> 
			</tr>
			<tr>
				<td bgcolor="" width=100><b>Nome</b>:</td>
				<td width=500><input type="text"  name="nome"  size="60" value="<?php echo mysql_result($result,0,'nome_usuario')?>"></td>
			</tr>
			<tr>
				<td bgcolor="" width=100><b>Cpf</b>:</td>
				<td width=500><input type="number" id="cpf"  name="cpf"  size="23" value="<?php echo mysql_result($result,0,'cpf_usuario')?>" onchange="verificaCpf(); ValidaCPF();">
				&nbsp;<b>Rg:</b><input type="number"  name="rg" value="<?php echo mysql_result($result,0,'rg_usuario')?>"  size="23"></td>
			</tr>
			<tr>
				<td bgcolor="" width=100><b>Logradouro</b>:</td>
				<td width=500><input type="text" value="<?php echo mysql_result($result,0,'endereco_usuario')?>"  name="logradouro">
				&nbsp;<b>Número:</b><input type="number"  name="num" value="<?php echo mysql_result($result,0,'num_usuario')?>"  maxlength=4></td>
			</tr>
			<tr>
			    <td bgcolor="" width=100><b>Bairro</b>:</td>
				<td width=500><input type="text" " name="bairro" value="<?php echo mysql_result($result,0,'bairro_usuario')?>"  size="20">	
				<b>Cep:</b><input type="text"  name="cep" value="<?php echo mysql_result($result,0,'cep_usuario')?>" size="25"></td>
			</tr>
			<tr>
				<td width=100><b>Cidade:</b></td>
				<td width=500><input type="text" value="<?php echo mysql_result($result,0,'cidade_usuario')?>"  name="cidade" size="30">
				<b>Estado:</b><select style="width: 80px;" value="<?php echo mysql_result($result,0,'uf_usuario')?>" name="estado">
											<option value="AC"  <?php if(mysql_result($result, 0, 'uf_usuario')=="AC"){echo " selected ";}?>>Acre</option>
											<option value="AL" <?php if(mysql_result($result, 0, 'uf_usuario')=="AL"){echo " selected ";}?>>Alagoas</option>
											<option value="AP" <?php if(mysql_result($result, 0, 'uf_usuario')=="AP"){echo " selected ";}?>>Amapá</option>
											<option value="AM" <?php if(mysql_result($result, 0, 'uf_usuario')=="AM"){echo " selected ";}?>>Amazonas</option>
											<option value="BA" <?php if(mysql_result($result, 0, 'uf_usuario')=="BA"){echo " selected ";}?>>Bahia</option>
											<option value="CE" <?php if(mysql_result($result, 0, 'uf_usuario')=="CE"){echo " selected ";}?>>Ceará</option>
											<option value="DF" <?php if(mysql_result($result, 0, 'uf_usuario')=="DF"){echo " selected ";}?>>Distrito Federal</option>
											<option value="ES" <?php if(mysql_result($result, 0, 'uf_usuario')=="ES"){echo " selected ";}?>>Espírito Santo</option>
											<option value="GO" <?php if(mysql_result($result, 0, 'uf_usuario')=="GO"){echo " selected ";}?>>Goiás</option>
											<option value="MA" <?php if(mysql_result($result, 0, 'uf_usuario')=="MA"){echo " selected ";}?>>Maranhão</option>
											<option value="MT" <?php if(mysql_result($result, 0, 'uf_usuario')=="MT"){echo " selected ";}?>>Mato Grosso</option>
											<option value="MS" <?php if(mysql_result($result, 0, 'uf_usuario')=="MS"){echo " selected ";}?>>Mato Grosso do Sul</option>
											<option value="MG" <?php if(mysql_result($result, 0, 'uf_usuario')=="MG"){echo " selected ";}?>>Minas Gerais</option>
											<option value="PA" <?php if(mysql_result($result, 0, 'uf_usuario')=="PA"){echo " selected ";}?>>Pará</option>
											<option value="PB" <?php if(mysql_result($result, 0, 'uf_usuario')=="PB"){echo " selected ";}?>>Paraíba</option>
											<option value="PR" <?php if(mysql_result($result, 0, 'uf_usuario')=="PR"){echo " selected ";}?>>Paraná</option>
											<option value="PE" <?php if(mysql_result($result, 0, 'uf_usuario')=="PE"){echo " selected ";}?>>Pernambuco</option>
											<option value="PI" <?php if(mysql_result($result, 0, 'uf_usuario')=="PI"){echo " selected ";}?>>Piauí</option>
											<option value="RJ" <?php if(mysql_result($result, 0, 'uf_usuario')=="RJ"){echo " selected ";}?>>Rio de Janeiro</option>
											<option value="RN" <?php if(mysql_result($result, 0, 'uf_usuario')=="RN"){echo " selected ";}?>>Rio Grande do Norte</option>
											<option value="RS" <?php if(mysql_result($result, 0, 'uf_usuario')=="RS"){echo " selected ";}?>>Rio Grande do Sul</option>
											<option value="RO" <?php if(mysql_result($result, 0, 'uf_usuario')=="RO"){echo " selected ";}?>>Rondônia</option>
											<option value="RR" <?php if(mysql_result($result, 0, 'uf_usuario')=="RR"){echo " selected ";}?>>Roraima</option>
											<option value="SC" <?php if(mysql_result($result, 0, 'uf_usuario')=="SC"){echo " selected ";}?>>Santa Catarina</option>
											<option value="SP" <?php if(mysql_result($result, 0, 'uf_usuario')=="SP"){echo " selected ";}?>>São Paulo</option>
											<option value="SE" <?php if(mysql_result($result, 0, 'uf_usuario')=="SE"){echo " selected ";}?>>Sergipe</option>
											<option value="TO" <?php if(mysql_result($result, 0, 'uf_usuario')=="TO"){echo " selected ";}?>>Tocantins</option>
									</select>
				</td>
			</tr>
			<tr>
			    <td bgcolor="" width=100><b>Login</b>:</td>
				<td width=500><input type="text" " name="login" size="20" value="<?php echo mysql_result($result,0,'login_usuario')?>">
			<tr>
				<tr>
			    <td bgcolor="" width=100><b>Nível:</b></td>
				<td width=500><input type="radio"  name="nivel" value="0" <?php if(mysql_result($result, 0 , 'nivel_usuario')=='0'){echo 'checked';}?>>0
				&nbsp;<input type="radio" name="nivel" value="1" <?php if(mysql_result($result, 0 , 'nivel_usuario')=='1'){echo 'checked';}?>>1
				&nbsp;<input type="radio"  name="nivel" value="2" <?php if(mysql_result($result, 0 , 'nivel_usuario')=='2'){echo 'checked';}?>>2
				<input type="radio" name="nivel" value="3" <?php if(mysql_result($result, 0 , 'nivel_usuario')=='3'){echo 'checked';}?>>3
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Status:</b><select style="width: 80px;" name="status"
				value="<?php echo mysql_result($result,0,'status_usuario')?>">
					<option value="A" <?php if(mysql_result($result, 0, 'status_usuario')=="A"){echo " selected ";}?>>Ativo</option>
					<option value="I" <?php if(mysql_result($result, 0, 'status_usuario')=="I"){echo " selected ";}?>>Inativo</option>
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

