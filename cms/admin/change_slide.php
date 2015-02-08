<?php
	for($i=1; $i<=4; $i++){
		if(isset($_POST["url".$i])) {
			$newurl = $_POST["url".$i]; }
		$nm = $_POST["nm".$i];
		$arq = fopen("../imagens/slides/destaque".$i.".txt", "a+");
		$url = fgets($arq);
		if($_POST["nm".$i] != ""){
			$arq = fopen("../imagens/slides/destaque".$i.".txt", "w+");
			if($_POST["url".$i] == ""){
				fwrite($arq,  "$url $nm");
			}else{
				fwrite($arq, "$newurl\n$nm");
			}
		}
	}
	header("Refresh: 2; ../site/index.php");
?>