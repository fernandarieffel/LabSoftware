<?php
	class ConexaoDB{
		private $servidor;
		private $usuario;
		private $senha;
		private $db;
		private $con;
		
		public function __construct(){
			$this->servidor='localhost';
			$this->usuario='root';
			$this->senha='';
			$this->db='labsoftware';
		}
		
		public function conectar(){
			global $con;
			$con = mysqli_connect($this->servidor, $this->usuario,
			$this->senha) or die (mysqli_error());
			mysqli_select_db($con, $this->db) or die(mysqli_error());
			mysql_query("SET NAMES 'utf8'");
			mysql_query('SET character_set_connection=utf8');
			mysql_query('SET character_set_client=utf8');
			mysql_query('SET character_set_results=utf8');
		}
		
		public function fechar(){
			global $con;
			mysqli_close($con);
		}
		
		public function query($sql){
			global $con;
			$query = mysqli_query($con, $sql) or die (mysqli_error());
			return $query;
		}
	}
?>