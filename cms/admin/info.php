<html>
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
	</head>
	<body>
		<h2 class="titulo-modulo">     Informações</h2>
		<hr  color=black size=4 >
		<h4>Login: <?php echo $_SESSION['login'] ?> </h4>  </br>
		<div class="divider"></div>
		<h4>Status: <?php echo $_SESSION['titulo'] ?> </h4> </br>
	</body>
</html>