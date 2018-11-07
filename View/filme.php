<?php
error_reporting(0);
require_once '../Control/Filmes_controller.php';

$filme = $_GET['filme'];
$id = $_GET['id'];

$filmecontrol = new FilmesController();
$informacao = $filmecontrol->listardados($id);
?>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<title><?php echo $filme?></title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
</head>
<body>
	<?php
	foreach ($informacao as $objeto) {
		echo '
		<div class="card" style="width: 18rem;">
	  		<img class="card-img-top" src="'.$objeto->imagem_url.'" alt="Card image cap">	  
			<ul class="list-group list-group-flush">
			    <li class="list-group-item">'.utf8_encode($objeto->titulo).'</li>
			    <li class="list-group-item">'.$objeto->ano_filme.'<span class="flutua direita">'.$objeto->duracao_filme.'</span></li>
			    <li class="list-group-item">Vestibulum at eros</li>
			</ul>
		</div>		
		';
	}
	?>
</body>
</html>