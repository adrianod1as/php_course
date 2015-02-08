<?php

session_start();

function getSenha($usuario) {
    $arq = fopen('../usuarios/'.$usuario.".txt", 'r');
    $senha = fgets($arq);
    fclose($arq);
    $senha = trim($senha);//funcao que retira espacos em branco do inicio ou do fim de uma string
    return $senha;
}

function getNome($usuario) {
    $arq = fopen('../usuarios/'.$usuario.".txt", 'r');
    fgets($arq);
    $nome = fgets($arq);
    fclose($arq);
    $nome = trim($nome);
    return $nome;
}

function getTitulo($usuario) {
    $arq = fopen('../usuarios/'.$usuario.".txt", 'r');
    fgets($arq);
	fgets($arq);
    $nome = fgets($arq);
    fclose($arq);
    $nome = trim($nome);
    return $nome;
}

function carregaInformacoes($usuario) {
    $_SESSION['nome'] = getNome($usuario);
	$_SESSION['titulo'] = getTitulo($usuario);
    $_SESSION['login'] = $usuario;
}

function confereUsuario($usuario, $senha) {
    if(!file_exists('../usuarios/'.$usuario.".txt")){
        return false;
    }else{
        if(strcmp($senha, getSenha($usuario))==0){
            carregaInformacoes($usuario);
            return true;
        }else{					
            return false;
        }
    }
}


if (!confereUsuario($_POST['login'], $_POST['senha'])) {
    session_destroy();
    //die ("Acesso nao autorizado");
	?>
	<h3>   Usuario e/ou senha incorretos </h3>
	<?php
    header("Refresh: 2;index.php");
} else {
    ?>
	<h3>Logando...</h3>
	
<?php
    //session_destroy();
	if(isset($_POST["lembrar"])){
		setcookie("login",  $_POST["login"], time()+172800);
		setcookie("senha",  $_POST["senha"],time()+172800);
	}
    header("Refresh: 2;options2.php");
}
?>

