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

		public function getdadosfilmes($id){
			$sql = "SELECT * FROM filme_categoria as fc inner JOIN filme as f on fc.idfilme = f.id inner JOIN subcategoria as s on s.id = f.id INNER JOIN filme_torrent as ft on f.id = ft.idfilme WHERE F.id LIKE '$id'";
			$res = mysql_query($sql);
			$lista = null;
			while($objeto = mysql_fetch_object($res)){
				if ($objeto != null) {
					$lista[] = $objeto;
				}
			}
			return $lista;			
		}		
	}
?>