<!DOCTYPE html>
<html>
	<script>    
		function option(choice){  
			if (choice == 'alterar'){  
				document.chooser.action='alterar.php';  
				document.chooser.submit();  
			}
			if (choice == 'editar'){  
				document.chooser.action='principal.php';  
				document.chooser.submit();  
			}	 
			if (choice == 'cadastrar'){  
				document.chooser.action='cadastro.php';  
				document.chooser.submit();  
			} 
			if (choice == 'logout'){  
				document.chooser.action='logout.php';  
				document.chooser.submit();  
			}	 
		}
    </script> 
	<head>
		<title>Administrador</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link href="../css/bootstrap/css/bootstrap.css" rel="stylesheet">
		<style type="text/css">
			body {
				padding-top: 60px;
			padding-bottom: 40px;
			}
		</style>
		<link href="../css/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <!-- Fav and touch icons 
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57-precomposed.png"> -->
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="?option=info">
					<?php 
						session_start();
						if(!isset($_SESSION['nome'])){
							die ("<div class='negado'><a href='index.php'>Efetue login para continuar </a></div>");
						}else{
							echo $_SESSION['nome']; }
						$_POST["confirma"] = '';
					?>
					</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Editar site<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="?option=layout">Editar layout</a></li>
								<li class="divider"></li>
								<li><a href="?option=slide">Editar Slideshow</a></li>
								<li class="divider"></li>
								<li><a href="?option=cfm">Editar Cabeçalho, Destaques, Menus e Rodapé</a></li>
							</ul>
						</li>
						<?php if($_SESSION['titulo'] == "chefe"){?>
						<li><a href="?option=adduser">Adicionar usuário</a></li>
						<li><a href="?option=deluser">Deletar usuário</a></li>
						<?php } ?>
					</ul>
					<div class="navbar-form pull-right">
						<ul class="nav">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['login']   ?> <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="?option=alt">Alterar Dados</a></li>
									<li class="divider"></li>
									<li><a href="?option=logout">Deslogar</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div><!--/.nav-collapse -->
			</div>
		</div>
		<div  id="menu">
			<?php 
				if (isset($_GET['option'])){
					switch ($_GET['option']){
						case "info":
							include "info.php";
							break;
						case "cfm"?>
							<div class="progress progress-striped active">
								<div class="bar" style="width: 95%;"></div> <?php
							header("Refresh: 2;principal.php");
							break;
						case "layout":
							include "layout.php";
							break;
						case "slide":
							include "slide.php";
							break;
						case "adduser":
							include "cadastro.php";
							break;
						case "deluser":
							include "delete.php";
							break;		
						case "alt":
							include "alterar.php";
							break;
						case "logout":
							include "logout.php";
							break;
					}
				}
			?>
							</div>		
		</div>
	<script src="..\js\jquery.js"></script>
    <script src="..\js\bootstrap-transition.js"></script>
    <script src="..\js\bootstrap-alert.js"></script>
    <script src="..\js\bootstrap-modal.js"></script>
    <script src="..\js\bootstrap-dropdown.js"></script>
    <script src="..\js\bootstrap-scrollspy.js"></script>
    <script src="..\js\bootstrap-tab.js"></script>
    <script src="..\js\bootstrap-tooltip.js"></script>
    <script src="..\js\bootstrap-popover.js"></script>
    <script src="..\js\bootstrap-button.js"></script>
    <script src="..\js\bootstrap-collapse.js"></script>
    <script src="..\js\bootstrap-carousel.js"></script>
    <script src="..\js\bootstrap-typeahead.js"></script>
	<script src="..\js\jquery.min.js" ></script>
	<script src="..\js\jquery.validate.js" ></script>
	<script src="..\js\jquery.maskedinput-1.2.2.min.js" ></script>
	</body>
</html>