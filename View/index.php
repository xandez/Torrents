<?php

  error_reporting(0);
  require_once '../Control/Filmes_controller.php';

  $pagina = $_GET['pagina'];

  $reg = 0;

  if (!$pagina) {
    $pagina = 0;
    $pc = 1;
  }else{
    $pc = $pagina;
  }

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Paginal Inicial</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    
    <style type="text/css">
      .container{ 
        padding-top: 100px;
        text-align: center; 
      }
      .card-body{
        height: 50px;
        padding-top: 1px !important;
        padding-bottom: 1px !important;
        padding-right: 10px !important;
        padding-left: 10px !important;
      }    
      #btimagem{
        text-decoration: none;
        color: black;
      }
    </style>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
  </head>
  <body>

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

    <main role="main" class="container">
      <div id ="content" class="row infinito" href = '1'>
      <?php
         $limite = 5;
         if ($pc <= 1) {
           $off = 0;
           $cont = 0;
           $qtd = 0;
           $filmecontroller = new FilmesController();
           $lista[$cont] = $filmecontroller->listar($limite,$off);
            while ($lista[$cont] != null) {
              foreach ($lista[$cont] as $objeto) {              
                echo '        
                    <div class="col-md-3">
                      <a href="filme.php?id='.$objeto->id.'&filme='.utf8_encode($objeto->titulo).'" id = "btimagem">
                      <div class="card mb-2 box-shadow">
                        <img class="card-img-top" src="'.$objeto->imagem_url.'" alt="Card image cap" height="380" width="50" title="'.utf8_encode($objeto->titulo).'">
                        <div class="card-body">
                          <p class="card-text">'.utf8_encode($objeto->titulo).'</p>
                           <!--<div class="d-flex justify-content-between align-items-center">
                           <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                              <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>                          
                          </div>
                          -->
                        </div>
                      </div>
                      </a>
                    </div>';
                    $qtd++;
              }
              $cont++;
              /*$limite = $limite+4;
              $off = $off+4;
              echo $cont.",".$limite.",".$off.",".$qtd;
              $lista[$cont] = $filmecontroller->listar($limite,$off);
              */
            }
            //$reg = mysql_num_rows($lista[$cont]);
            $pagina = $pagina +1;  
         }else{
           $pg = $pagina - 1;
           $off = $pg * $limite;
           $cont = 0;
           $qtd = 0;
           $filmecontroller = new FilmesController();
           $lista[$cont] = $filmecontroller->listar($limite,$off);
            while ($lista[$cont] != null) {
              foreach ($lista[$cont] as $objeto) {              
                echo '        
                    <div class="col-md-3">
                      <a href="filme.php?filme='.$objeto->titulo.'" id = "btimagem">
                      <div class="card mb-2 box-shadow">
                        <img class="card-img-top" src="'.$objeto->imagem_url.'" alt="Card image cap" height="380" width="50" title="'.utf8_encode($objeto->titulo).'">
                        <div class="card-body">
                          <p class="card-text">'.utf8_encode($objeto->titulo).'</p>
                           <!--<div class="d-flex justify-content-between align-items-center">
                           <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                              <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>                          
                          </div>
                          -->
                        </div>
                      </div>
                      </a>
                    </div>';
                    $qtd++;
              }
            $cont++;
          }
          $reg = mysql_num_rows($lista[$cont]);
          $pagina = $pagina +1;
         }         
         
      ?>      
      </div>
      <?php
      if ($pagina > 2) {
        $anterior = $pagina - 2;
        echo '<a href="index.php?pagina='.$anterior.'"><<- Anterior</a>';
      }      
        echo '<a href="index.php?pagina='.$pagina.'">Proxima ->></a>';             
      ?>
    </main>    
  </body>
</html>
