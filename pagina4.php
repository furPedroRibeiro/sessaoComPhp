<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php
session_start();
  $p1 = $_SESSION['p1'];
	$name = $_SESSION['nome'];
  $p2 = $_SESSION['p2'];
  echo '';
?>
<div class="container-fluid">
		<div class="row">
			<div class="col-4 offset-4">
				<br>
				<form method="post">
					<fieldset>
          <?php echo $name;?> seus resultados:
             <br><br>
						 <span class="title">Resposta correta: 81</span>
						 <br>
						 <span class="text">Sua reposta: <?php echo $p1;?></span>
						 <br><br>
						 <span class="title">Resposta correta: Alan</span>
						 <br>
						 <span class="text">Sua reposta: <?php echo $p2;?></span>
						<br><br>
						<button class="btn btn-danger"><a href="pagina4.php?name=true" style="text-decoration: none; color: white;">Sair</a></button>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
  <?php 
    function sair(){
      header('location: sair.php');
    }
    if (isset($_GET['name'])) {
      sair();
    }
  ?>