<?php
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$nome = $_POST['nome'];
	if (file_exists('../usuarios/'.$login.'.txt')){
?>
<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
	alert ("Usuário já existente")
</SCRIPT>
<?php
	header("Refresh: 2;options2.php?option=adduser");
	}else{
		$arq = fopen('../usuarios/'.$login.'.txt','a+');
		fwrite($arq, "$senha\n$nome\nfuncionário");
		fclose($arq);
?>
<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
	alert ("Usuário foi adicionado")
</SCRIPT>
<?php
	header("Refresh: 2;options2.php?");
	}
	
?>
