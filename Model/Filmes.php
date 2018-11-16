<?php

header('Content-Type: text/html; charset=utf-8');


	class Filmes{
		private $id;
		private $titulo;
		private $desc_torrent;
		private $desc_filme;
		private $ano_filme;
		private $audio;
		private $legenda;
		private $formato;
		private $resolucao;
		private $tamanho;
		private $duracao_filme;
		private $imagem_url;
		private $imagem_url2;
		private $link_trailer;


		public function set($propriedade,$valor){
			$this->$propriedade = $valor;
		}

		public function listarfilmes($limite, $off){
			$sql = "SELECT * FROM filme_categoria as fc inner JOIN filme as f on fc.idfilme = f.id inner JOIN subcategoria as s on s.id = f.id ORDER BY f.titulo ASC LIMIT $limite OFFSET $off";
			$res = mysql_query($sql);
			$lista = null;
			while ($objeto = mysql_fetch_object($res)) {
				if ($objeto != null) {
					$lista[] = $objeto;
				}
			}
			return $lista;
		}

		public function listarCategoria(){
			$sql = "SELECT * from subcategoria";

			$res = mysql_query($sql);
			$lista = null;

			while ($objeto = mysql_fetch_object($res)){
				if($objeto != null){
					$lista[] = $objeto;
				}
			}
			return $lista;
		}

		public function getdadosfilmes($id){
			$sql = "SELECT * FROM filme_categoria as fc inner JOIN filme as f on fc.idfilme = f.id inner JOIN subcategoria as s on s.id = f.id INNER JOIN filme_torrent as ft on f.id = ft.idfilme WHERE F.id LIKE '$id' group by fc.idfilme";
			$res = mysql_query($sql);
			$lista = null;
			while($objeto = mysql_fetch_object($res)){
				if ($objeto != null) {
					$lista[] = $objeto;
				}
			}
			return $lista;			
		}		

		public function listarLinks($id){
			$sql = "SELECT ft.*, f.titulo FROM filme_torrent as ft inner join filme as f on ft.idfilme = f.id where ft.idfilme = '$id' ORDER BY `ft`.`res`  DESC";
			$res = mysql_query($sql);
			$lista = null;
			while($objeto = mysql_fetch_object($res)){
				if ($objeto != null) {
					$lista[] = $objeto;
				}
			}
			return $lista;
		}

		public function cadastrarFilme(){
			$sql = "insert into filme (titulo, desc_torrent, desc_filme, ano_filme, audio, legenda, formato, resolucao, tamanho, duracao_filme, imagem_url, imagem_url2, link_trailer) values ('".$this->titulo."','".$this->desc_torrent."','".$this->desc_filme."','".$this->ano_filme."','".$this->audio."','".$this->legenda."','".$this->formato."','".$this->resolucao."','".$this->tamanho."','".$this->duracao_filme."','".$this->imagem_url."','".$this->imagem_url2."','".$this->link_trailer."')";

			if(mysql_query($sql)){
				return true;
			}else{
				return false;
			}
		}
	}
?>