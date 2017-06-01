<?php
	class TipoIngresso {

		public $id;
		public $id_evento;
		public $descricao;
		public $valor;
		public $vagas;
		public $detalhes;
		
		function inserir(){
			$bd = new ConexaoDB;
			$sql = "INSERT INTO tipo_ingresso (id_evento, descricao, valor, vagas, detalhes)
			VALUES ('$this->id_evento', '$this->descricao', '$this->valor', '$this->vagas', '$this->detalhes')";
			$bd->conectar();
			$bd->query($sql);
			$bd->fechar();
		}

		function listar(){
			$bd = new ConexaoDB;
			$bd->conectar();
			return $bd->query("SELECT * FROM tipo_ingresso");
			$bd->fechar();
		}

		function listarTipoIngressoByIdEvento($id_evento){
			$bd = new ConexaoDB;
			$bd->conectar();
			return $bd->query("SELECT * FROM tipo_ingresso WHERE id_evento='$id_evento'");
			$bd->fechar();
		}
	}
?>