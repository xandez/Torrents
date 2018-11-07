<?php
	class ConexaoBD{
		private static $host = '127.0.0.1';
		private static $bd = 'torrents';
		private static $user = 'root';
		private static $senha = '';
		private static $connection;

		public static function conectar (){
			ConexaoBD::$connection  = @mysql_connect(ConexaoBD::$host,ConexaoBD::$user,ConexaoBD::$senha);
			if (!ConexaoBD::$connection) {
				echo("<scrip>alert('Falha ao conectar ao banco!')</script>");
			}

			$banco = mysql_select_db(ConexaoBD::$bd);
			if (!$banco) {
				echo ("<script>alert('Falha ao selecionar o banco!')</script>");
			}
		}

		public static function desconectar(){
			mysql_close(ConexaoBD::$connection);
		}

		public static function executar($sql){
			$query = mysql_query($sql) or die( mysql_error());
		}

		public function mensagem($erro){
			echo $erro;
		}

		public function __destruct(){
			ConexaoBD::desconectar();
		}
	}

?>