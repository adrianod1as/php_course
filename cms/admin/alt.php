
<?php
session_start();
			
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$login = $_SESSION['login'];
$titulo = $_SESSION['titulo'];

$arq = '../usuarios/'.$login.'.txt';
unlink($arq);

$arq = fopen('../usuarios/'.$login.'.txt','a+');
fwrite($arq, "$senha\n$nome\n$titulo");
fclose($arq);
$_SESSION['login'] = $login;


?>
<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
	alert ("Os dados foram alterados")
</SCRIPT>
<?php
	header("Refresh: 2;options2.php?");
?>


