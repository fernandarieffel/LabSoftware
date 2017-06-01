<?php
	class Inscricao {

		public $id;
		public $id_tipo_ingresso;
		public $id_congressista;
		
		function inserir(){
			$bd = new ConexaoDB;
			$sql = "INSERT INTO inscricao(id_tipo_ingresso, id_congressista) 
			VALUES ('$this->id_tipo_ingresso', '$this->id_congressista')";
			$bd->conectar();
			$bd->query($sql);
			$bd->fechar();
		}

		function listar(){
			$bd = new ConexaoDB;
			$bd->conectar();
			return $bd->query("SELECT * FROM inscricao");
			$bd->fechar();
		}

		function listarByIdCongressista($id_congressista){
			$bd = new ConexaoDB;
			$bd->conectar();
			return $bd->query("SELECT * FROM inscricao WHERE id_congressista='$id_congressista'");
			$bd->fechar();
		}
	}
?>