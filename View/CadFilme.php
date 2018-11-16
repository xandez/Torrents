<?php
    error_reporting(0);
    require_once '../Control/Filmes_controller.php';

    $sub = new FilmesController();
    $infosub = $sub->listarsub();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Cadastro filme</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
</head>
<body>
    <form action="../Control/Filmes_controller.php?evento=salvarfilme" method="POST">
      <div class="container">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Titulo</label>
                <input name="titulo" type="text" class="form-control" id="inputEmail4" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Descrição do torrent</label>
                <input name="desctorrent" type="text" class="form-control" id="inputPassword4" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descrição do Filme</label>
            <textarea name="descfilme" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputEmail4">Ano do Filme</label>
                <input name="ano" type="text" class="form-control" id="inputEmail4" placeholder="">                
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail4">Audio</label>
                <input name="audio" type="text" class="form-control" id="inputEmail4" placeholder="">
            </div>
            <div class="form-group col-md-3">  
                <label for="inputEmail4">Legenda</label>
                <input name="legenda" type="text" class="form-control" id="inputEmail4" placeholder="">                
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail4">Formato</label>
                <input name="formato" type="text" class="form-control" id="inputEmail4" placeholder="">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputEmail4">Resolução</label>
                <input name="resolucao" type="text" class="form-control" id="inputEmail4" placeholder="">
            </div>
            <div class="form-group col-md-4">
                <label for="inputEmail4">Tamanho</label>
                <input name="tamanho" type="text" class="form-control" id="inputEmail4" placeholder="">
            </div>
            <div class="form-group col-md-4">
                <label for="inputEmail4">Duração</label>
                <input name="duracao" type="text" class="form-control" id="inputEmail4" placeholder="">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Imagem Url 1</label>
                <input name="url1" type="text" class="form-control" id="inputEmail4" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Imagem Url 2</label>
                <input name="url2" type="text" class="form-control" id="inputEmail4" placeholder="">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputEmail4">Link Trailer</label>
                <input name="link" type="text" class="form-control" id="inputEmail4" placeholder="">
            </div>
        </div><!--
        <div class="form-row">
            <div class="form-group col-md-12">
                <select class="custom-select" id="inputGroupSelect01">
                <option selected>Escolha uma categoria</option>
                <?php
                    if ($infosub != null){
                        foreach ($infosub as $objeto){
                            echo'
                            <option value="'.$objeto->id.'">'.utf8_encode($objeto->subcategoria).'</option>
                            ';
                        }
                    }else{
                        echo "Sem informação";
                    }         
                ?>
                </select>
            </div>            
        </div>
        -->
        <button type="submit" class="btn btn-primary">Salvar</button>
        
      </div>
    
    </form>
    
</body>
</html>