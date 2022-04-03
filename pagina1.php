<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script>
	alert("Bem vindo ao nosso quiz");
</script>
<?php
	session_start();
	if($_POST){
		$_SESSION['nome'] = $_POST['nome'];
		$name = $_SESSION['nome'];
		header('location: pagina2.php');
	}
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-4 offset-4">
			<br>
			<form method="post">
				Digite seu nome: <input type="text" name="nome">
				<br><br>
				<button class="btn btn-danger">Entrar</button>
			</form>
		</div>
	</div>
</div>