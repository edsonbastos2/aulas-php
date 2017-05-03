<?php 
	class Radio{

	public $musica;
	public $estilo;
	public $ligado;

	
	function ligado(){
		$this->ligado=true;
	}

	function desligado(){
		$this->ligado = false;
	}

	function ouvindo(){
		if ($this->ligado == true) {
			echo "<p>Estou ouvindo Rock</p>";
		}else{
			echo "Ligue o rádio para ouvir música";
		}
		
	}

}
$r = new Radio;
	$r->musica = "Rock";
	$r->estilo = "Pop Rock";
	$r->ligado = true;

	print_r($r);
	echo "<br/>";
	$r->ligado();
	$r->ouvindo();
?>