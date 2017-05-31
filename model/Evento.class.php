<?php
	class Evento {
		public $id;
		public $id_organizador;
		public $nome;
		public $descricao;
		public $local;
		public $cargaHoraria;
		public $dataInicio;
		public $dataFim;
		public $incricaoInicio;
		public $inscricaoFim;

		function inserir(){
			$bd = new ConexaoDB;
			$sql = "INSERT INTO evento (id_organizador, nome, descricao)
			VALUES ('$this->id_organizador', '$this->nome', '$this->descricao')";
			$bd->conectar();
			$bd->query($sql);
			$bd->fechar();
		}

		function listar(){
			$bd = new ConexaoDB;
			$bd->conectar();
			return $bd->query("SELECT * FROM evento");
			$bd->fechar();
		}

		function listarPorOrganizador($id){
			$bd = new ConexaoDB;
			$bd->conectar();
			return $bd->query("SELECT * FROM evento WHERE id_organizador='$id'");
			$bd->fechar();
		}

	}
?>