<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php 
	session_start();
	$p1 = $_SESSION['p1'];
	$name = $_SESSION['nome'];
	if (!isset($name)) {
		header('location: pagina1.php');
	}
	else if(!isset($p1)){
		header('location: pagina1.php');
	}
	echo '<br><br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-4 offset-4">
				<legend>Pergunta 2 para '.$name.'</legend>
			</div>
		</div>
	</div>';
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-4 offset-4">
			<br>
			<form method="post">
				<fieldset>
					 Em um avião há quatro romanos e um inglês, qual é o nome do piloto?
					<br><br>
					<select name="p2">
						<option value="Gu">Gustavo</option>
						<option value="Alan">Alan</option>
						<option value="Ivone">Ivone</option>
					</select>
					<br><br>
					<button class="btn btn-danger">Próxima</button>
				</fieldset>
			</form>
		</div>
	</div>
</div>

<?php

	if(!isset($_POST['p2'])){
		echo '';
	} else{
		$_SESSION['p2'] = $_POST['p2'];
		header('location: pagina4.php');
	}
?>