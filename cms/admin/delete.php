<html>
<head>
<style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 5px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 10px 20px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
    </style>
	<script type="text/javascript">
function confirma(){
if (confirm("Deseja remover o usuário?")){
document.skin.action = "del.php";
document.skin.submit();
}
}
</script>
	</head>
	<body>
<div class="jumbotron">
<h2>Deletar usuário</h2>
<hr  color=black size=4 >
<form name = "skin" method = "post" >
	<div>
		<select name = "users" >
			<?php
				$dir ="../usuarios/";
				session_start();
				if(is_dir($dir)){
					$identificador = opendir($dir);
					while($arquivo = readdir($identificador)){
						if($arquivo != "." && $arquivo != ".." && $arquivo != $_SESSION['login'].".txt" ){	
							$nome = explode(".", $arquivo);
			?>
			<option value="<?php echo "../usuarios/$arquivo" ?>"> <?php echo $nome[0].'<br />'; ?> </option>
			<?php					
							}
					}
					closedir($identificador);
				}
			?>
		<input type = "hidden" name = "dir" value = "../css/temas/skin/bootstrap.css" >
		<input type = "button" class= "btn btn-primary" onClick="confirma();" value = "Deletar">
</form>
</div>
</body>
</html>