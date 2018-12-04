<?php

require_once 'CrudEstu.php';

class Estudantes extends CrudEstu{
	
	protected $table = 'estudantes';
	private $status;
	private $nome;
	private $cpf;
	private $nascimento;
	private $mae;
	private $pai;
	private $endereco;
	private $cidade;
	private $estado;
	private $telefone;
	private $serie;
	private $turno;
	private $mensalidade;

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

	public function setMae($mae){
		$this->mae = $mae;
	}

	public function getMae(){
		return $this->mae;
	}

	public function setPai($pai){
		$this->pai = $pai;
	}

	public function getPai(){
		return $this->pai;
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

	public function setEstado($estado){
		$this->estado = $estado;
	}

	public function getEstado(){
		return $this->estado;
	}

	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}

	public function getTelefone(){
		return $this->telefone;
	}

	public function setSerie($serie){
		$this->serie = $serie;
	}

	public function getSerie(){
		return $this->serie;
	}

	public function setTurno($turno){
		$this->turno = $turno;
	}

	public function getTurno(){
		return $this->turno;
	}

	public function setMensalidade($mensalidade){
		$this->mensalidade = $mensalidade;
	}

	public function getMensalidade(){
		return $this->mensalidade;
	}

	public function insert(){

		$sql  = "INSERT INTO $this->table (status, nome, cpf, nascimento, mae, pai, endereco, cidade, estado, telefone, serie, turno, mensalidade) VALUES (:status, :nome, 
		:cpf, :nascimento, :mae, :pai, :endereco, :cidade, :estado, :telefone, :serie, :turno, :mensalidade)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':status', $this->status);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':cpf', $this->cpf);
		$stmt->bindParam(':nascimento', $this->nascimento);
		$stmt->bindParam(':mae', $this->mae);
		$stmt->bindParam(':pai', $this->pai);
		$stmt->bindParam(':endereco', $this->endereco);
		$stmt->bindParam(':cidade', $this->cidade);
		$stmt->bindParam(':estado', $this->estado);
		$stmt->bindParam(':telefone', $this->telefone);
		$stmt->bindParam(':serie', $this->serie);
		$stmt->bindParam(':turno', $this->turno);
		$stmt->bindParam(':mensalidade', $this->mensalidade);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET status = :status, nome = :nome, cpf = :cpf, nascimento = :nascimento, mae = :mae, 
		pai = :pai, endereco = :endereco, cidade = :cidade, estado = :estado, telefone = :telefone, serie = :serie, turno = :turno, mensalidade = :mensalidade  WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':status', $this->status);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':cpf', $this->cpf);
		$stmt->bindParam(':nascimento', $this->nascimento);
		$stmt->bindParam(':mae', $this->mae);
		$stmt->bindParam(':pai', $this->pai);
		$stmt->bindParam(':endereco', $this->endereco);
		$stmt->bindParam(':cidade', $this->cidade);
		$stmt->bindParam(':estado', $this->estado);
		$stmt->bindParam(':telefone', $this->telefone);
		$stmt->bindParam(':serie', $this->serie);
		$stmt->bindParam(':turno', $this->turno);
		$stmt->bindParam(':mensalidade', $this->mensalidade);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

}