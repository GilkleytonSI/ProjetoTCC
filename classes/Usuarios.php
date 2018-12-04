<?php

require_once 'CrudUser.php';

class Usuarios extends CrudUser{
	
	protected $table = 'usuarios';
	private $nome;
	private $sobrenome;
	private $endereco;
	private $cidade;
	private $email;
	private $cep;
	private $sexo;
	private $nascimento;
	private $telefone;
	private $login;
	private $senha;

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setSobrenome($sobrenome){
		$this->sobrenome = $sobrenome;
	}

	public function getSobrenome(){
		return $this->sobrenome;
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

	public function setEmail($email){
		$this->email = $email;
	}

	public function setCep($cep){
		$this->cep = $cep;
	}

	public function getCep(){
		return $this->cep;
	}

	public function setSexo($sexo){
		$this->sexo = $sexo;
	}

	public function getSexo(){
		return $this->sexo;
	}

	public function setNascimento($nascimento){
		$this->nascimento = $nascimento;
	}

	public function getNascimento(){
		return $this->nascimento;
	}

	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}

	public function getTelefone(){
		return $this->telefone;
	}

	public function setLogin($login){
		$this->login = $login;
	}

	public function getLogin(){
		return $this->login;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function insert(){

		$sql  = "INSERT INTO $this->table (nome, sobrenome, endereco, cidade, email, cep, sexo, nascimento, telefone, login, senha) VALUES (:nome, :sobrenome, 
		:endereco, :cidade, :email, :cep, :sexo, :nascimento, :telefone, :login, :senha)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':sobrenome', $this->sobrenome);
		$stmt->bindParam(':endereco', $this->endereco);
		$stmt->bindParam(':cidade', $this->cidade);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':cep', $this->cep);
		$stmt->bindParam(':sexo', $this->sexo);
		$stmt->bindParam(':nascimento', $this->nascimento);
		$stmt->bindParam(':telefone', $this->telefone);
		$stmt->bindParam(':login', $this->login);
		$stmt->bindParam(':senha', $this->senha);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET nome = :nome, sobrenome = :sobrenome, endereco = :endereco, cidade = :cidade, email = :email, cep = :cep, sexo = :sexo, nascimento = :nascimento, telefone = :telefone, login = :login, senha = :senha  WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':sobrenome', $this->sobrenome);
		$stmt->bindParam(':endereco', $this->endereco);
		$stmt->bindParam(':cidade', $this->cidade);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':cep', $this->cep);
		$stmt->bindParam(':sexo', $this->sexo);
		$stmt->bindParam(':nascimento', $this->nascimento);
		$stmt->bindParam(':telefone', $this->telefone);
		$stmt->bindParam(':login', $this->login);
		$stmt->bindParam(':senha', $this->senha);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

}