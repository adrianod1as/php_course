<form name = "skin" method = "post" target="_blank" action = "change.php" >
	<div class="container">
		<h2>Escolha o tema</h2>
		<hr  color=black size=4 >
		<select name = "temas" >
			<?php
				$dir ="../css/temas/";
				if(is_dir($dir)){
					$identificador = opendir($dir);
					while($arquivo = readdir($identificador)){
						if($arquivo != "." && $arquivo != ".." && $arquivo != "skin"){
							$nome = explode(".", $arquivo);
			?>
			<option value="<?php echo "../css/temas/$arquivo" ?>"> <?php echo $nome[0].'<br />'; ?> </option>
			<?php					
						}
					}
					closedir($identificador);
				}
			?>
			<input type = "hidden" name = "dir" value = "../css/temas/skin/bootstrap.css" >
			<input  class="btn btn-large btn-primary" type = "submit" value = "ok">
	<div>
</form>