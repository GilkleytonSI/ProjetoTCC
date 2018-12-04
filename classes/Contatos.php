<?php

require_once 'CrudCont.php';

class Contatos extends CrudCont{
	
	protected $table = 'contatos';
	private $nome;
	private $rua;
	private $bairro;
	private $complemento;
	private $cep;
	private $estado;
	private $cidade;
	private $email;
	private $nascimento;
	private $telefone1;
	private $telefone2;
	private $usu_id;

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setRua($rua){
		$this->rua = $rua;
	}

	public function getRua(){
		return $this->rua;
	}

	public function setBairro($bairro){
		$this->bairro = $bairro;
	}

	public function getBairro(){
		return $this->bairro;
	}

	public function setComplemento($complemento){
		$this->complemento = $complemento;
	}

	public function getComplemento(){
		return $this->complemento;
	}

	public function setCep($cep){
		$this->cep = $cep;
	}

	public function getCep(){
		return $this->cep;
	}

	public function setEstado($estado){
		$this->estado = $estado;
	}

	public function getEstado(){
		return $this->estado;
	}

	public function setCidade($cidade){
		$this->cidade = $cidade;
	}

	public function getCidade(){
		return $this->cidade;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setNascimento($nascimento){
		$this->nascimento = $nascimento;
	}

	public function getNascimento(){
		return $this->nascimento;
	}

	public function setTelefone1($telefone1){
		$this->telefone1 = $telefone1;
	}

	public function getTelefone1(){
		return $this->telefone1;
	}

	public function setTelefone2($telefone2){
		$this->telefone2 = $telefone2;
	}

	public function getTelefone2(){
		return $this->telefone2;
	}

	public function setUsuId($usu_id){
		$this->usu_id = $usu_id;
	}

	public function getUsuId(){
		return $this->usu_id;
	}

	public function insert(){

		$sql  = "INSERT INTO $this->table (nome, rua, bairro, complemento, cep, estado, cidade, email, nascimento, telefone1, telefone2, usu_id) VALUES (:nome, :rua, 
		:bairro, :complemento, :cep, :estado, :cidade, :email, :nascimento, :telefone1, :telefone2, :usu_id)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':rua', $this->rua);
		$stmt->bindParam(':bairro', $this->bairro);
		$stmt->bindParam(':complemento', $this->complemento);
		$stmt->bindParam(':cep', $this->cep);
		$stmt->bindParam(':estado', $this->estado);
		$stmt->bindParam(':cidade', $this->cidade);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':nascimento', $this->nascimento);
		$stmt->bindParam(':telefone1', $this->telefone1);
		$stmt->bindParam(':telefone2', $this->telefone2);
		$stmt->bindParam(':usu_id', $this->usu_id);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET nome = :nome, rua = :rua, bairro = :bairro, complemento = :complemento, cep = :cep, 
		estado = :estado, cidade = :cidade, email = :email, nascimento = :nascimento, telefone1 = :telefone1, telefone2 = :telefone2, usu_id = :usu_id  WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':rua', $this->rua);
		$stmt->bindParam(':bairro', $this->bairro);
		$stmt->bindParam(':complemento', $this->complemento);
		$stmt->bindParam(':cep', $this->cep);
		$stmt->bindParam(':estado', $this->estado);
		$stmt->bindParam(':cidade', $this->cidade);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':nascimento', $this->nascimento);
		$stmt->bindParam(':telefone1', $this->telefone1);
		$stmt->bindParam(':telefone2', $this->telefone2);
		$stmt->bindParam(':usu_id', $this->usu_id);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

}