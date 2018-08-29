<?php


	/**
	 * 
	 */
	class Checklist{
		
		private $titulo;
		private $descricao;
		private $procedimento[];
		private $conclusao;


		function __construct()
		{
			# code...
		}

		public function getTitulo(){ return $this.titulo; }

		public function setTitulo($titulo){ $this.titulo = $titulo; }



		public function getDescricao(){ return $this.descricao; }

		public function setDescricao($descricao){ $this.descricao = $descricao; }



		public function getProcedimento($indice){ return $this.descricao[$indice]; }

		public function setProcedimento($indice, $Procedimento){ $this.descricao[$indice] = $procedimento; }



		public function getConclusao(){ return $this.conclusao = $descricao; }

		public function setConclusao($conclusao){ $this.conclusao = $conclusao; }

	}


?>