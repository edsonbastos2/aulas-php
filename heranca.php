<?php 

	class Cliente{

		 private $nome;
		 private $endereco;
		 private $telefone;


	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){

		$this->nome = $nome;
	}

	public function getEndereco(){
		return $this->endereco;
	}

	public function setEndereco($endereco){

		$this->endereco = $endereco;
	}

	public function getTelefone(){
		return $this->telefone;
	}

	public function setTelefone($telefone){

		$this->telefone = $telefone;
	}

}

	class PessoaFisica extends Cliente{	
  		
		private $cpf;

		public function getCPF(){

			return $this->cpf;
		}

		public function setCPF($n){

			$this->cpf = $n;
		}

    }


    class PessoaJridica extends Cliente{	
  		
		private $cnpj;

		public function getCNPJ(){

			return $this->cnpj;
		}

		public function setCNPJ($n){

			$this->cnpj = $n;
		}

    }


	$cliente1 = new PessoaFisica();
	$cliente1->setNome('Edson Bastos');
	$cliente1->setEndereco('Rua Ceci');
	$cliente1->setTelefone('98888-8888');
	$cliente1->setCPF('111222333-45');


	$cliente2 = new PessoaJridica();
	$cliente2->setNome('Singular Premium');
	$cliente2->setEndereco('Av. Barão de studarte');
	$cliente2->setTelefone('2222-22222');
	$cliente2->setCNPJ('100000000/90');


	print_r($cliente1);
	
	print_r($cliente2);

	print_r($cliente1);
 ?>	
