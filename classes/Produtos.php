<?php

require_once 'CrudProd.php';

class Produtos extends CrudProd{
	
	protected $table = 'produtos';
	private $nome;
	private $quantidade;
	private $preco_unitario;
	private $unidade_estoque;
	private $descricao;
	private $unidade_medida;	
	private $status;
	private $altura;
	private $largura;
	private $comprimento;
	private $data_validade;
	private $pedidos_id;

	
	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setQuantidade($quantidade){
		$this->quantidade = $quantidade;
	}

	public function getQuantidade(){
		return $this->quantidade;
	}

	public function setPrecoUnitario($preco_unitario){
		$this->preco_unitario = $preco_unitario;
	}

	public function getPrecoUnitario(){
		return $this->preco_unitario;
	}

	public function setUnidadeEstoque($unidade_estoque){
		$this->unidade_estoque = $unidade_estoque;
	}

	public function getUnidadeEstoque(){
		return $this->unidade_estoque;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function setUnidadeMedida($unidade_medida){
		$this->unidade_medida = $unidade_medida;
	}

	public function getUnidadeMedida(){
		return $this->unidade_medida;
	}

	public function setStatus($status){
		$this->status = $status;
	}

	public function getStatus(){
		return $this->status;
	}

	public function setAltura($altura){
		$this->altura = $altura;
	}

	public function getAltura(){
		return $this->altura;
	}
	
	public function setLargura($largura){
		$this->largura = $largura;
	}

	public function getLargura(){
		return $this->largura;
	}

	public function setComprimento($comprimento){
		$this->comprimento = $comprimento;
	}

	public function getComprimento(){
		return $this->comprimento;
	}

	public function setDtValidade($data_validade){
		$this->data_validade = $data_validade;
	}

	public function getDtValidade(){
		return $this->data_validade;
	}

	public function setPedidoId($pedidos_id){
		$this->pedidos_id = $pedidos_id;
	}

	public function getPedidoId(){
		return $this->pedidos_id;
	}


	public function insert(){

		$sql  = "INSERT INTO $this->table (nome, quantidade, preco_unitario, unidade_estoque, descricao, unidade_medida, status, altura, largura, comprimento, data_validade, pedidos_id) VALUES (:nome, :quantidade, :preco_unitario, :unidade_estoque, :descricao, :unidade_medida, :status, :altura, :largura, :comprimento, :data_validade, :pedidos_id)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':quantidade', $this->quantidade);
		$stmt->bindParam(':preco_unitario', $this->preco_unitario);
		$stmt->bindParam(':unidade_estoque', $this->unidade_estoque);
		$stmt->bindParam(':descricao', $this->descricao);
		$stmt->bindParam(':unidade_medida', $this->unidade_medida);
		$stmt->bindParam(':status', $this->status);
		$stmt->bindParam(':altura', $this->altura);
		$stmt->bindParam(':largura', $this->largura);
		$stmt->bindParam(':comprimento', $this->comprimento);
		$stmt->bindParam(':data_validade', $this->data_validade);
		$stmt->bindParam(':pedidos_id', $this->pedidos_id);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET nome = :nome, quantidade = :quantidade, preco_unitario = :preco_unitario, unidade_estoque = :unidade_estoque, descricao = :descricao, unidade_medida = :unidade_medida, status = :status, altura = :altura, largura = :largura, comprimento = :comprimento, data_validade = :data_validade, pedidos_id = :pedidos_id WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':quantidade', $this->quantidade);
		$stmt->bindParam(':preco_unitario', $this->preco_unitario);
		$stmt->bindParam(':unidade_estoque', $this->unidade_estoque);
		$stmt->bindParam(':descricao', $this->descricao);
		$stmt->bindParam(':unidade_medida', $this->unidade_medida);
		$stmt->bindParam(':status', $this->status);
		$stmt->bindParam(':altura', $this->altura);
		$stmt->bindParam(':largura', $this->largura);
		$stmt->bindParam(':comprimento', $this->comprimento);
		$stmt->bindParam(':data_validade', $this->data_validade);
		$stmt->bindParam(':pedidos_id', $this->pedidos_id);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

}