<!DOCTYPE html>
	<html>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
			<link href="../css/menu.css" rel="stylesheet" type="text/css"/>
			<link href="../css/index.css" rel="stylesheet" type="text/css"/>
			<script src="../js/ckeditor/ckeditor.js"></script>
			<link href="../css/bootstrap/css/bootstrap.css" rel="stylesheet">
			<style type="text/css">
				body {
					padding-top: 60px;
					padding-bottom: 40px;
				}	  
			</style>
			<link href="../css/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
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
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['login'] ?> <b class="caret"></b></a>
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
		<?php 
			if (isset($_GET['option'])){
				if ($_GET['option'] <> "cfm"){
					header("Refresh: 2;options2.php?option=".$_GET['option']);
				}
		?> 
			<div class="progress progress-striped active">
			<div class="bar" style="width: 95%;"></div> 
			<?php
				}else{		
					if(!isset($_SESSION['nome'])){
						die ("<div class='negado'><a href='index.php'>Efetue login para continuar </a></div>");
					}else{
			?>
						<div  id="menu">
						<?php 
							echo carregarMenu("../site/pg"); 
							if(isset($_GET['pg'])){
								include('editor.php');
							}else{
								include('home.html');
							}
						}
						?>
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
<?php
}
function carregarMenu($dir){
	//verifica se é diretório
	$ul = "<ul>\n";
	if(is_dir($dir)){
		$identificador = opendir($dir);
		//laço para leitura
		while($arquivo = readdir($identificador)){
			if($arquivo != "." && $arquivo != ".."){
				//converte string em array
				$pg = explode('.', $arquivo);
				//$pg = $pg[0];
				$ul .= "<li><a href='?pg=".$pg[0];
				//primeira letra em maiuscula
				$ul .= "'>".ucfirst($pg[0])."</a>";
			}
		}
		$ul .= "<li><a href='../site/' target='_blank'>Visualizar</a></li>";
		$ul .= "\n</ul>\n";
		closedir($identificador);
	}else{
		$ul = "Diretório não encontrado";
	}
	return $ul;
}
?>

