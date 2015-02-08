<br>
<form method="post" action="processador.php">
	<p>
		Editando o arquivo <b><?php echo $_GET['pg'];?>.html</b>:<br><hr>
		<textarea name="editor1"><?php include('../site/pg/'.$_GET['pg'].'.html'); ?></textarea>
		<script>
			window.onload = function(){
				CKEDITOR.replace('editor1');
			};
		</script>
	</p>
	<p>
		<input type="hidden" value="<?php echo $_GET['pg'].'.html' ?>" name="arq" />
		<input type="submit">
	</p>
</form>
