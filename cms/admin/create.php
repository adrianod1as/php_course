<?php
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$nome = $_POST['nome'];
	if (file_exists('../usuarios/'.$login.'.txt')){
?>
<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
	alert ("Usu�rio j� existente")
</SCRIPT>
<?php
	header("Refresh: 2;options2.php?option=adduser");
	}else{
		$arq = fopen('../usuarios/'.$login.'.txt','a+');
		fwrite($arq, "$senha\n$nome\nfuncion�rio");
		fclose($arq);
?>
<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
	alert ("Usu�rio foi adicionado")
</SCRIPT>
<?php
	header("Refresh: 2;options2.php?");
	}
	
?>
