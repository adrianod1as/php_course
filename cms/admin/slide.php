<script type="text/javascript">

function liberar(a,b)
{
	var nome = document.getElementById(a);	
	var sobre= document.getElementById(b);
	
	if(nome.value != "")
	{
		sobre.style.color="black";
		sobre.disabled=false;
	}else{
	sobre.disabled=true;
	sobre.style.color="white";
	}
}
</script>
<form name = "slides" method = "post" target="_blank" action = "change_slide.php" >
	<div class="container">
		<h2>Escolha as imagens do Slideshow</h2>
		<hr  color=black size=4 >
			
			<input type="text" id="url1" name="url1" disabled="disabled"  placeholder="URL da Imagen 1" >
			<input type="text" id="nm1" name="nm1" onKeyup="liberar('nm1','url1');" placeholder="Descrição da Imagen 1" value="" > </br>
			<input type="text" id="url2" name="url2" disabled="disabled"  placeholder="URL da Imagen 2" >
			<input type="text" id="nm2" name="nm2" onKeyup="liberar('nm2','url2');" placeholder="Descrição da Imagen 2" > </br>
			<input type="text" id="url3" name="url3" disabled="disabled"  placeholder="URL da Imagen 3" >
			<input type="text" id="nm3" name="nm3" onKeyup="liberar('nm3','url3');" placeholder="Descrição da Imagen 3" > </br>
			<input type="text" id="url4" name="url4" disabled="disabled"  placeholder="URL da Imagen 4" >
			<input type="text" id="nm4" name="nm4" onKeyup="liberar('nm4','url4');" placeholder="Descrição da Imagen 4" > </br>
			
			<input type = "hidden" name = "dir" value = "../css/temas/skin/bootstrap.css" >
			<input  class="btn btn-large btn-primary" type = "submit" value = "ok">
	<div>
</form>