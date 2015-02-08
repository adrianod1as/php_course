<?php 

	copy ($_POST["temas"], $_POST["dir"]); 
	header("Refresh: 2; ../site/index.php");
?>