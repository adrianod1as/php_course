
<?php
	$arq = "../usuarios/".$_POST["users"];
	unlink ($arq);
?>
<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
	alert ("Usu�rio deletado")
</SCRIPT>
<?php
	header("Refresh: 2; options2.php");
?>



