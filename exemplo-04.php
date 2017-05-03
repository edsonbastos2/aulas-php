<?php 

	class Carro{
		private $modelo;
		private $motor;
		private $cor;
		private $ano;

		public function Carro($m, $mot, $c, $a){
			$this->modelo = $m;
			$this->motor = $mot;
			$this->cor = $c;
			$this->ano = $a;
			}

		public function getModelo(){
			return $this->modelo;
		}

		public function setModelo($m){

			$this->modelo = $m;
		}

		public function getMotor(){

			return $this->motor;
		}

		public function setMotor($mot){

			$this->motor = $mot;
		}

		public function getCor(){
			return $this->cor;
		}

		public function setCor($c){

			$this->cor = $c;
		}

		public function getAno(){

			return $this->ano;
		}

		public function setAno($a){

			$this->ano = $a;
		}

		
		
	}

	$c1 = new Carro("Gol",1.8,"Preto",2017);
	$c2 = new Carro("Palio", 2.0, "Branco", 2016);

		print_r($c1);
		print_r($c2);

 ?>