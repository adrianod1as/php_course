<?php session_start();
		if(isset($_SESSION['nome'])){
			header("Refresh: 2;options2.php");
		}else{ ?>
			<!DOCTYPE html>
			<html>
				<head>
					<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
					<title>Administrador</title>
					<meta name="viewport" content="width=device-width, initial-scale=1.0">
					<meta name="description" content="">
					<meta name="author" content="">
					<link href="..\css\bootstrap\css\bootstrap.css" rel="stylesheet">
					
					<style type="text/css">
						body {
							padding-top: 40px;
							padding-bottom: 40px;
							background-color: #f5f5f5;
						}

						.form-signin {
							max-width: 300px;
							padding: 19px 29px 29px;
							margin: 0 auto 20px;
							background-color: #fff;
							border: 1px solid #e5e5e5;
							-webkit-border-radius: 5px;
							-moz-border-radius: 5px;
							border-radius: 5px;
							-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
							-moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
							box-shadow: 0 1px 2px rgba(0,0,0,.05);
						}
						
						.form-signin .form-signin-heading,
						.form-signin .checkbox {
							margin-bottom: 10px;
						}
						
						.form-signin input[type="text"],
						.form-signin input[type="password"] {
							font-size: 16px;
							height: auto;
							margin-bottom: 15px;
							padding: 7px 9px;
						}

					</style>
					<link href="..\bootstrap\cssbootstrap-responsive.css" rel="stylesheet">
					
				</head>
		
				<body>
			
					<div class="container">
						<form name="form_login" action="login.php" method="post" class="form-signin">
						
							<h3 class="form-signin-heading">Por favor, faça o login.</h3>
							<input type="text" name="login" id="login" value="<?php echo (isset($_COOKIE["login"])) ? $_COOKIE["login"] : ""; ?>" class="input-block-level" placeholder="Login">
							<input type="password" name="senha" id="senha" value="<?php echo (isset($_COOKIE["senha"])) ? $_COOKIE["senha"] : ""; ?>" class="input-block-level" placeholder="Senha">
							<label class="checkbox">
							<input type="checkbox" name= "lembrar" value="remember-me"> Lembre meus dados
							</label>
							<button class="btn btn-large btn-primary" type="submit">Entrar</button>
						</form>
					</div> 
				</body>
			</html>

<?php 	} ?>