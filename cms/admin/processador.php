<?php
//echo $_POST['editor1'];

$arquivo = $_POST['arq'];
$texto = $_POST['editor1'];


if(salvarConteudo('../site/pg/'.$arquivo,$texto)){
		echo "O arquivo $arquivo foi editado com sucesso!";
		header("Refresh: 2;principal.php");
}else{
		echo "O arquivo $arquivo não pode ser editado";
		header("Refresh: 2;principal.php");
}



function salvarConteudo($doc,$texto){
	if(file_exists($doc)){
		$fp = fopen($doc,"w");
		fwrite($fp,$texto);
		fclose($fp);
		return true;
	}else{
		return false;
	}
	
}
?>
