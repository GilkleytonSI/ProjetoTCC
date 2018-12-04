<?php

require_once 'CrudProf.php';

class Professores extends CrudProf{
	
	protected $table = 'professores';
	private $status;
	private $nome;
	private $cpf;
	private $nascimento;
	private $formacao;
	private $graduacao;
	private $pos_graduacao;
	private $mestrado;
	private $doutorado;
	private $salario;

	public function setStatus($status){
		$this->status = $status;
	}

	public function getStatus(){
		return $this->status;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setCpf($cpf){
		$this->cpf = $cpf;
	}

	public function getCpf(){
		return $this->cpf;
	}

	public function setNascimento($nascimento){
		$this->nascimento = $nascimento;
	}

	public function getNascimento(){
		return $this->nascimento;
	}

	public function setFormacao($formacao){
		$this->formacao = $formacao;
	}

	public function getFormacao(){
		return $this->formacao;
	}

	public function setGraduacao($graduacao){
		$this->graduacao = $graduacao;
	}

	public function getGraduacao(){
		return $this->graduacao;
	}

	public function setPosGraduacao($pos_graduacao){
		$this->pos_graduacao = $pos_graduacao;
	}

	public function getPosGraduacao(){
		return $this->pos_graduacao;
	}

	public function setMestrado($mestrado){
		$this->mestrado = $mestrado;
	}

	public function getMestrado(){
		return $this->mestrado;
	}

	public function setDoutorado($doutorado){
		$this->doutorado = $doutorado;
	}

	public function getDoutorado(){
		return $this->doutorado;
	}

	public function setSalario($salario){
		$this->salario = $salario;
	}

	public function getSalario(){
		return $this->salario;
	}

	public function insert(){

		$sql  = "INSERT INTO $this->table (status, nome, cpf, nascimento, formacao, graduacao, pos_graduacao, mestrado, doutorado, salario) VALUES (:status, :nome, 
		:cpf, :nascimento, :formacao, :graduacao, :pos_graduacao, :mestrado, :doutorado, :salario)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':status', $this->status);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':cpf', $this->cpf);
		$stmt->bindParam(':nascimento', $this->nascimento);
		$stmt->bindParam(':formacao', $this->formacao);
		$stmt->bindParam(':graduacao', $this->graduacao);
		$stmt->bindParam(':pos_graduacao', $this->pos_graduacao);
		$stmt->bindParam(':mestrado', $this->mestrado);
		$stmt->bindParam(':doutorado', $this->doutorado);
		$stmt->bindParam(':salario', $this->salario);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET status = :status, nome = :nome, cpf = :cpf, nascimento = :nascimento, formacao = :formacao, 
		graduacao = :graduacao, pos_graduacao = :pos_graduacao, mestrado = :mestrado, doutorado = :doutorado, salario = :salario  WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':status', $this->status);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':cpf', $this->cpf);
		$stmt->bindParam(':nascimento', $this->nascimento);
		$stmt->bindParam(':formacao', $this->formacao);
		$stmt->bindParam(':graduacao', $this->graduacao);
		$stmt->bindParam(':pos_graduacao', $this->pos_graduacao);
		$stmt->bindParam(':mestrado', $this->mestrado);
		$stmt->bindParam(':doutorado', $this->doutorado);
		$stmt->bindParam(':salario', $this->salario);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

}