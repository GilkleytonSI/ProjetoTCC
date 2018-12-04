<?php

require_once 'CrudFornec.php';

class Fornecedores extends CrudFornec{
	
	protected $table = 'fornecedores';
	private $razao_social;
	private $tipo_empresa;
	private $cnpj_cpf;
	private $inscricao_estadual;
	private $inscricao_municipal;
	private $cep;	
	private $endereco;
	private $bairro;
	private $cidade;
	private $telefone;
	private $email;
	private $data;

	
	public function setRazaoSocial($razao_social){
		$this->razao_social = $razao_social;
	}

	public function getRazaoSocial(){
		return $this->razao_social;
	}

	public function setTipoEmpresa($tipo_empresa){
		$this->tipo_empresa = $tipo_empresa;
	}

	public function getTipoEmpresa(){
		return $this->tipo_empresa;
	}

	public function setCnpjCpf($cnpj_cpf){
		$this->cnpj_cpf = $cnpj_cpf;
	}

	public function getCnpjCpf(){
		return $this->cnpj_cpf;
	}

	public function setInscricaoEstadual($inscricao_estadual){
		$this->inscricao_estadual = $inscricao_estadual;
	}

	public function getInscricaoEstadual(){
		return $this->inscricao_estadual;
	}

	public function setInscricaoMunicipal($inscricao_municipal){
		$this->inscricao_municipal = $inscricao_municipal;
	}

	public function getInscricaoMunicipal(){
		return $this->inscricao_municipal;
	}

	public function setCep($cep){
		$this->cep = $cep;
	}

	public function getCep(){
		return $this->cep;
	}

	public function setEndereco($endereco){
		$this->endereco = $endereco;
	}

	public function getEndereco(){
		return $this->endereco;
	}

	public function setBairro($bairro){
		$this->bairro = $bairro;
	}

	public function getBairro(){
		return $this->bairro;
	}
	
	public function setCidade($cidade){
		$this->cidade = $cidade;
	}

	public function getCidade(){
		return $this->cidade;
	}

	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}

	public function getTelefone(){
		return $this->telefone;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setData($data){
		$this->data = $data;
	}

	public function getData(){
		return $this->data;
	}

	public function insert(){

		$sql  = "INSERT INTO $this->table (razao_social, tipo_empresa, cnpj_cpf, inscricao_estadual, inscricao_municipal, cep, endereco, bairro, cidade, telefone, email, data) VALUES (:razao_social, 
		:tipo_empresa, :cnpj_cpf, :inscricao_estadual, :inscricao_municipal, :cep, :endereco, :bairro, :cidade, :telefone, :email, :data)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':razao_social', $this->razao_social);
		$stmt->bindParam(':tipo_empresa', $this->tipo_empresa);
		$stmt->bindParam(':cnpj_cpf', $this->cnpj_cpf);
		$stmt->bindParam(':inscricao_estadual', $this->inscricao_estadual);
		$stmt->bindParam(':inscricao_municipal', $this->inscricao_municipal);
		$stmt->bindParam(':cep', $this->cep);
		$stmt->bindParam(':endereco', $this->endereco);
		$stmt->bindParam(':bairro', $this->bairro);
		$stmt->bindParam(':cidade', $this->cidade);
		$stmt->bindParam(':telefone', $this->telefone);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':data', $this->data);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET razao_social = :razao_social, tipo_empresa = :tipo_empresa, cnpj_cpf = :cnpj_cpf, inscricao_estadual = :inscricao_estadual, 
		inscricao_municipal = :inscricao_municipal, cep = :cep, endereco = :endereco, bairro = :bairro, cidade = :cidade, telefone = :telefone, email = :email, data = :data WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':razao_social', $this->razao_social);
		$stmt->bindParam(':tipo_empresa', $this->tipo_empresa);
		$stmt->bindParam(':cnpj_cpf', $this->cnpj_cpf);
		$stmt->bindParam(':inscricao_estadual', $this->inscricao_estadual);
		$stmt->bindParam(':inscricao_municipal', $this->inscricao_municipal);
		$stmt->bindParam(':cep', $this->cep);
		$stmt->bindParam(':endereco', $this->endereco);
		$stmt->bindParam(':bairro', $this->bairro);
		$stmt->bindParam(':cidade', $this->cidade);
		$stmt->bindParam(':telefone', $this->telefone);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':data', $this->data);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

}