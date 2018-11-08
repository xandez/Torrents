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
    <link rel="stylesheet" type="text/css" href="../CCS/filmes.css">
	<title><?php echo $filme?></title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
</head>
<body>
	<!--header preto -->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" style="background-color: #e3f2fd;">
      <a class="navbar-brand" href="#">Wa</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filmes</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Lançamentos</a>
              <a class="dropdown-item" href="#">Mais baixados</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Nome" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
      </div>
    </nav>


    <!--Informações do Filme -->
    <main role="main" class="container">
     	
			<?php
				foreach ($informacao as $objeto) {
					echo '
					<h2>'.utf8_encode($objeto->titulo).'</h2>
					<h6>'.utf8_encode($objeto->desc_torrent).'</h6>
					<div class="row" >
	    				<div class="col-sm">
							<div class="card" style="width: 18rem;">
						  		<img class="card-img-top" src="'.$objeto->imagem_url.'" alt="Card image cap">	  
								<ul class="list-group list-group-flush">
								    <li class="list-group-item">'.utf8_encode($objeto->titulo).'</li>
								    <li class="list-group-item">
								    	<img src="../Icon/calendar-2x.png">'.$objeto->ano_filme.'<span class="flutua_direita" itemprop="duration"><img src="../Icon/timer-2x.png">'.$objeto->duracao_filme.'</span>			    		
								    </li>
								    <li class="list-group-item">Inserir modalidades</li>
								</ul>
							</div>	
						</div>
						<div class="col-sm">
							<h6>'.utf8_encode($objeto->desc_filme).'</h6>
						</div>
						<div class="col-sm">
						</div>
					</div>	
					';
				}
				?>
    		
	</main>
</body>
</html>