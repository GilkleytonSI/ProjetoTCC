<?php

require_once 'CrudFunc.php';

class Funcionarios extends CrudFunc{
	
	protected $table = 'funcionarios';
	private $nome;
	private $DtNascimento;
	private $NumSeguro;
	private $cpf;
	private $rg;
	private $sexo;	
	private $endereco;
	private $cidade;
	private $salario;

	
	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setDtNascimento($DtNascimento){
		$this->DtNascimento = $DtNascimento;
	}

	public function getDtNascimento(){
		return $this->DtNascimento;
	}

	public function setNumSeguro($NumSeguro){
		$this->NumSeguro = $NumSeguro;
	}

	public function getNumSeguro(){
		return $this->NumSeguro;
	}

	public function setCpf($cpf){
		$this->cpf = $cpf;
	}

	public function getCpf(){
		return $this->cpf;
	}

	public function setRg($rg){
		$this->rg = $rg;
	}

	public function getRg(){
		return $this->rg;
	}

	public function setSexo($sexo){
		$this->sexo = $sexo;
	}

	public function getSexo(){
		return $this->sexo;
	}

	public function setEndereco($endereco){
		$this->endereco = $endereco;
	}

	public function getEndereco(){
		return $this->endereco;
	}

	public function setCidade($cidade){
		$this->cidade = $cidade;
	}

	public function getCidade(){
		return $this->cidade;
	}
	
	public function setSalario($salario){
		$this->salario = $salario;
	}

	public function getSalario(){
		return $this->salario;
	}

	public function insert(){

		$sql  = "INSERT INTO $this->table (nome, DtNascimento, NumSeguro, cpf, rg, sexo, endereco, cidade, salario) VALUES (:nome, 
		:DtNascimento, :NumSeguro, :cpf, :rg, :sexo, :endereco, :cidade, :salario)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':DtNascimento', $this->DtNascimento);
		$stmt->bindParam(':NumSeguro', $this->NumSeguro);
		$stmt->bindParam(':cpf', $this->cpf);
		$stmt->bindParam(':rg', $this->rg);
		$stmt->bindParam(':sexo', $this->sexo);
		$stmt->bindParam(':endereco', $this->endereco);
		$stmt->bindParam(':cidade', $this->cidade);
		$stmt->bindParam(':salario', $this->salario);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET nome = :nome, DtNascimento = :DtNascimento, NumSeguro = :NumSeguro, cpf = :cpf, 
		rg = :rg, sexo = :sexo, endereco = :endereco, cidade = :cidade, salario = :salario WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':DtNascimento', $this->DtNascimento);
		$stmt->bindParam(':NumSeguro', $this->NumSeguro);
		$stmt->bindParam(':cpf', $this->cpf);
		$stmt->bindParam(':rg', $this->rg);
		$stmt->bindParam(':sexo', $this->sexo);
		$stmt->bindParam(':endereco', $this->endereco);
		$stmt->bindParam(':cidade', $this->cidade);
		$stmt->bindParam(':salario', $this->salario);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

}