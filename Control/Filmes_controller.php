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

	public function listarsub(){
		ConexaoBD::conectar();

		$sub = new Filmes();
		$lista = $sub->listarCategoria();
		if ($lista != null){
			return $lista;
		}else{
			$erro = 'Sem informação';
			return $erro;
		}
	}

	public function listarlinks($id){
		ConexaoBD::conectar();

		$filmes = new Filmes();
		$link = $filmes->listarLinks($id);

		if($link != null){
			return $link;
		}else{
			$erro = 'Sem informação';
			return $erro;
		}
	}

	public function salvarfilme(){

		ConexaoBD::conectar();
		//PEGAR OS DADOS DO CADFILME.PHP PARA SALVAR VIA POST.
		$intitulo			= $_POST['titulo'];
		$indesctorrent		= $_POST['desctorrent'];
		$indescfilme		= $_POST['descfilme'];
		$inano				= $_POST['ano'];
		$inaudio			= $_POST['audio'];
		$inlegenda			= $_POST['legenda'];
		$informato			= $_POST['formato'];
		$inresolucao		= $_POST['resolucao'];
		$intamanho			= $_POST['tamanho'];
		$induracao			= $_POST['duracao'];
		$inurl1				= $_POST['url1'];
		$inurl2				= $_POST['url2'];
		$inlinktrailer		= $_POST['link'];

		//SETAR VALORES NA CLASSE.
		$filme = new Filmes();
		$filme->set('titulo',$intitulo);
		$filme->set('desc_torrent',$indesctorrent);
		$filme->set('desc_filme',$indescfilme);
		$filme->set('ano_filme',$inano);
		$filme->set('audio',$inaudio);
		$filme->set('legenda',$inlegenda);
		$filme->set('formato',$informato);
		$filme->set('resolucao',$inresolucao);
		$filme->set('tamanho',$intamanho);
		$filme->set('duracao_filme',$induracao);
		$filme->set('imagem_url',$inurl1);
		$filme->set('imagem_url2',$inurl2);
		$filme->set('link_trailer',$inlinktrailer);

		if($filme->cadastrarFilme()){
			header("refresh:1;url=../View/CadFilme.php");
		}else{
			echo"Não salvo!";
		}
	}
}

$controller = new FilmesController();


?>