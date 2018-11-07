<?php

require_once '../Model/Conexao.php';
require_once '../Model/Filmes.php';

class FilmesController{
	public function __construct(){
		call_user_func(array($this, $_REQUEST["evento"]));
	}

	public function listar($limit,$offf){
		ConexaoBD::conectar();

		$filmes = new Filmes();
		$listar = $filmes->listarfilmes($limit,$offf);

		return $listar;
	}

	public function listardados($id){
		ConexaoBD::conectar();

		$filmes = new Filmes();
		$info = $filmes->getdadosfilmes($id);
		if ($info != null) {
			return $info;
		}else{
			$erro = 'Sem informação';
			return $erro;
		}		
	}	
}

$controller = new FilmesController();


?>