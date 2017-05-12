<?php 

	class Documento{

		private $numero;

		public function getNumero(){

			return $this->numero;
		}

		public function setNumero($n){

			$this->numero = $n;
		}

	}

	class CPF extends Documento{

		public function valida():bool{
			//validação do cpf

			$numeroCpf = $this->getNumero();

			return true;
		}
	}

	$doc = new CPF();

	$doc->setNumero("11112222333-44");

	var_dump($doc->valida());
	echo "<br/>";

	echo $doc;


 ?>