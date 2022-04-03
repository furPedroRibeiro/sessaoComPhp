<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php
	session_start();
		$name = $_SESSION['nome'];
	if (!isset($name)) {
		header('location: pagina1.php');
	}

	echo '<div class="container-fluid">
	<div class="row">
		<div class="col-4 offset-4">
			<br>
			<form method="POST">
			<fieldset>
				<legend>Pergunta 1 para '.$name.'</legend>
				Quanto é ((3*5²)+6) * 0 ?
				<input type="text" name="p1" required=""><br>
				<br>
				<button class="btn btn-danger">Próxima</button>
			</fieldset>
			</form>
		</div>
	</div>
</div>';

	if($_POST){
		$_SESSION['p1'] = $_POST['p1'];
		if(!isset($_SESSION['p1'])){
			header('location: pagina1.php');
		} else{
			header('location: pagina3.php');
		}
	}
?>