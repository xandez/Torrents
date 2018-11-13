<?php
    error_reporting(0);
    require_once '../Control/Filmes_controller.php';


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Cadastro filme</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="titulo">
        <textarea name="desc_torrent" id="" cols="30" rows="10"></textarea>
        <textarea name="desc_filme" id="" cols="30" rows="10"></textarea>
        <input type="number" name="ano_filme">
        <input type="text" name="audio">
        <input type="text" name="legenda">
        <input type="text" name="formato">
        <input type="text" name="resolucao">
        <input type="text" name="tamanho">
        <input type="number" name="duracao">
        <textarea name="img_url" id="" cols="30" rows="10"></textarea>
        <textarea name="img_url2" id="" cols="30" rows="10"></textarea>
        <textarea name="link_trailer" id="" cols="30" rows="10"></textarea>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
    
</body>
</html>