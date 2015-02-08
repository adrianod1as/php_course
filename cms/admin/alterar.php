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
		<title>Cadastro de usuário</title>
		
		<script src="..\js\jquery.min.js" ></script>
		<script src="..\js\jquery.validate.js" ></script>
		<script src="..\js\jquery.maskedinput-1.2.2.min.js" ></script>

		<!-- Validação do forumlário -->
		<script type="text/javascript">
		
	
		
			function Obrigue(id, n){
			var x=document.getElementById(id);
				k=document.getElementById("senha");
				t=document.getElementById("conf_senha");
				y = "red"; z="green";
				
				if (n==1){
				if (x.value.length < 3) {
					
				
				x.style.borderColor = y;}
				else{x.style.borderColor = z;}
				}
				if (n==2) {
				
				if ((x.value.length < 3) || (x.value.length > 8) ) {
					
				
				x.style.borderColor = y;}
				else{x.style.borderColor = z;}
				}
				if (n==3){
				
				if (t.value != k.value){	
				k.style.borderColor = y;
				t.style.borderColor = y;}
				else{
				if (t.value.length > 5) {
				k.style.borderColor = z;
				t.style.borderColor = z;
				}
				}
				}
				
				
				
			}
			
		
	
			$(function(){
				
				//regras para validação
				$('#meu_form').validate({
					rules:{ 
						nome:{ 
							required: true,
							minlength: 3
						},
						
						senha: {
							required: true,
							minlength: 6
						},
						conf_senha:{
							required: true,
							minlength: 6,
							equalTo: "#senha"
						},
						
						
					},
					messages:{
						nome:{ 
							required: "O campo nome é obrigatorio.",
							minlength: "Pelo menos 3 caracteres."
						},
						
						senha: {
							required: "O campo senha é obrigatorio.",
							minlength: "Pelo menos 6 caracteres."
						},
						conf_senha:{
							required: "O campo confirmação de senha é obrigatorio.",
							minlength: "Pelo menos 6 caracteres.",
							equalTo: "O campo confirmação de senha deve ser identico ao campo senha."
						}
					}
				});
				
			});
		</script>
	</head>
<body>
<div class="jumbotron">
<h2>Alterar dados</h2>
<hr  color=black size=4 >
	<form id="meu_form" action="alt.php" method="post" >
	
		<h4> Login: 
		<?php 
		
			echo $_SESSION['login'];
		?> </h4>
		<input type="hidden" name="login" id="login" value = "<?php $_SESSION['login']?>"/><br />
		
		<input type="text" name="nome" id="nome" placeholder="Nome" onKeyup="Obrigue('nome',1)" /><br />
		
	
		
		<input type="password" name="senha" id="senha" placeholder="Senha" onKeyup="Obrigue('senha', 3)" /><br />
		
		<input type="password" name="conf_senha" id="conf_senha" placeholder="Confirme senha" onKeyup="Obrigue('conf_senha', 3)"  /><br />
		
		<input type="submit"  class= "btn btn-primary" value="Cadastrar" />

	</form>

</body>
</html>
	