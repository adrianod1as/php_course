
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Site</title>	
		<link href="../css/temas/skin/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" media="all" href="../css/style.css" />
		<script src="../js/do_site/modernizr.custom.js"></script>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		<link rel='stylesheet' id='contact-form-7-css'  href='../css/styles.css' type='text/css' media='all' />
		<script type='text/javascript' src='../js/do_site/jquery.js'></script>

	</head>
	<body>
		<div align= "center" class="header-grp visible-desktop">	
    		<?php include('pg/cabeçalho.html'); ?>	
    	</div>
		<div class="container-fluid wrapper">
			<nav class="navbar">
				<div class="navbar-inner">
					<div class="container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>			     
						<div class="nav-collapse">
							<ul class="nav">
								<li><a href="index.php?pg=menu_home">Home</a></li>
								<li><a href="index.php?pg=menu_animes">Lista de Animes</a></li>
								<li><a href="index.php?pg=menu_download">Download</a></li>
								<li><a href="index.php?pg=menu_about">Sobre nós</a></li>
							</ul>		          
						</div>
					</div>
				</div>
			</nav>
			<div id="main" class="row-fluid span12">
				<div id="myCarousel" class="carousel slide">
					<!-- Carousel items -->
					<div class="carousel-inner">
						<div class="active item">
							<a href="index.php?pg=destaque1"><img src="<?php $arq = fopen("../imagens/slides/destaque1.txt", "r"); echo fgets($arq); $nome = fgets($arq); ?>" alt="<?php echo $nome; ?>" width="1170" height="420" /></a>
							<div class="carousel-caption">
								<h4>Destaques: <?php echo $nome; ?></h4>
								
							</div>
						</div>
						<div class="item">
							<a href="index.php?pg=destaque2"><img src="<?php $arq = fopen("../imagens/slides/destaque2.txt", "r"); echo fgets($arq); $nome = fgets($arq); ?>" alt="<?php echo $nome; ?>" width="1170" height="420" /></a>
							<div class="carousel-caption">
								<h4>Destaques: <?php echo $nome; ?></h4>
								
							</div>
						</div>
						<div class="item">
							<a href="index.php?pg=destaque3"><img src="<?php $arq = fopen("../imagens/slides/destaque3.txt", "r"); echo fgets($arq); $nome = fgets($arq); ?>" width="1170" height="420" alt="<?php echo $nome; ?>" /></a>
							<div class="carousel-caption">
								<h4>Destaques: <?php echo $nome; ?></h4>
							
							</div>
						</div>
						<div class="item">
							<a href="index.php?pg=destaque4"><img src="<?php $arq = fopen("../imagens/slides/destaque4.txt", "r"); echo fgets($arq); $nome = fgets($arq); ?>" width="1170" height="420" alt="<?php echo $nome; ?>" /></a>
							<div class="carousel-caption">
								<h4>Destaques: <?php echo $nome; ?></h4>
							
							</div>
						</div>
					</div>
					<!-- Carousel nav -->
					<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
				</div>   	   
			</div>
			<div id="conteudo">
				<?php
					if(isset($_GET['pg'])){
						include('pg/'.$_GET['pg'].'.html');
					}else{
						include('pg/menu_home.html');
					}
				?>
			</div>
			<hr>
			<footer id="footer" class="clear source-org vcard copyright">
				<?php include('pg/rodapé.html'); ?>	
			</footer>
		</div><!--/.container-fluid-->
	<script type='text/javascript' src='../js/do_site/jquery.form.min.js'></script>
	<script type='text/javascript' src='../js/do_site/scripts.js'></script>
    <script src="../js/do_site/bootstrap.min.js"></script>
	</body>
</html>