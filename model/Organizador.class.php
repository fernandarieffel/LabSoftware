<?php
	class Organizador {
		public $id;
		public $email;
		public $senha;
		public $instituicao;
		public $cnpj;
		public $endereco;
		public $tipoInstituicao;
		public $telefone;
		
		function inserir(){
			$bd = new ConexaoDB;
			/*$sql = "INSERT INTO organizador (email, senha, instituicao, cnpj, endereco, tipoInstituicao, telefone)
			VALUES ('$this->email', '$this->senha', '$this->instituicao', '$this->cnpj', '$this->endereco', '$this->tipoInstituicao', '$this->telefone')";*/

			$sql = "INSERT INTO organizador (email, senha, instituicao, tipoInstituicao)
			VALUES ('$this->email', '$this->senha', '$this->instituicao', '$this->tipoInstituicao')";
			$bd->conectar();
			$bd->query($sql);
			$bd->fechar();
		}
		
		function mostrar(){
			$bd = new ConexaoDB;
			$bd->conectar();
			return $bd->query("SELECT * FROM organizador");
			$bd->fechar();
		}

		function entrar(){
			$bd = new ConexaoDB;
			$bd->conectar();
			return $bd->query("SELECT * FROM organizador WHERE  senha='$this->senha' AND email='$this->email'");
			$bd->fechar();
		}
		/*
			function mostrarOrganizadorEditar($id){
				$bd = new ConexaoDB;
				$bd->conectar();
				return $bd->query("SELECT * FROM organizador WHERE  id='$id'");
				$bd->fechar();
			}
			function excluir($id){
				$bd = new ConexaoDB;
				$sql = "DELETE FROM organizador WHERE id='$id'";
				$bd->conectar();
				$bd->query($sql);
				$bd->fechar();
			}
			function editar(){
				$bd = new ConexaoDB;
				$bd->conectar();
				$bd->query("UPDATE organizador SET nome='$this->nome', telefone='$this->telefone', cargo='$this->cargo' 

					email='$this->email', senha='$this->senha', instituicao='$this->instituicao', cnpj='$this->cnpj', endereco='$this->endereco', tipoInstiuicao='$this->tipoInstiuicao', telefone='$this->telefone')


					WHERE id='$this->id'");
				$bd->fechar();
				
			}*/
		
	}


?>