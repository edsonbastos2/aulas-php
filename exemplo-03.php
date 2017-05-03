<?php 
	class Caneta{
		private $modelo;
		private $cor;
		private $ponta;
		private $carga;


public function Caneta($m, $c, $p, $ca){ //Método construtor 
	$this->modelo = $m;
	$this->cor = $c;
	$this->ponta = $p;
	$this->carga = $ca;
	$this->tampada();
}

public function tampada(){

	$this->tampada = true;
}

		public function getModelo(){

			return $this->modelo;
		}

		public function setModelo($m){

			$this->modelo = $m;
		}

		public function getCor(){

			 return $this->cor;
		}

		public function setCor($c){
			$this->cor = $c;
		}

		public function getPonta(){
			return $this->ponta;
		}

		public function setPonta($p){

			$this->ponta = $p;
		}

		public function getCarga(){

			return $this->carga;
		}

		public function setCarga($ca){

			$this->carga = $ca;
		}
	}

		$c1 = new Caneta("bic","Preta", 0.5, 60);
		$c2 = new Caneta("bic", "Azul", 0.7, 99);

		print_r($c1);
		print_r($c2);
 ?>