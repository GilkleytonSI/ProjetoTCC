<?php

require_once 'CrudPedid.php';

class Pedidos extends CrudPedid{
	
	protected $table = 'pedidos';
	private $data_pedido;
	private $data_entrega;
	private $data_envio;
	private $nome_destinatario;
	private $endereco;
	private $cidade;	
	private $estado;
	private $cep;
	private $pais;

	
	public function setDtPedido($data_pedido){
		$this->data_pedido = $data_pedido;
	}

	public function getDtPedido(){
		return $this->data_pedido;
	}

	public function setDtEntrega($data_entrega){
		$this->data_entrega = $data_entrega;
	}

	public function getDtEntrega(){
		return $this->data_entrega;
	}

	public function setDtEnvio($data_envio){
		$this->data_envio = $data_envio;
	}

	public function getDtEnvio(){
		return $this->data_envio;
	}

	public function setNomeDestinatario($nome_destinatario){
		$this->nome_destinatario = $nome_destinatario;
	}

	public function getNomeDestinatario(){
		return $this->nome_destinatario;
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

	public function setCep($cep){
		$this->cep = $cep;
	}

	public function getCep(){
		return $this->cep;
	}
	
	public function setPais($pais){
		$this->pais = $pais;
	}

	public function getPais(){
		return $this->pais;
	}

	public function insert(){

		$sql  = "INSERT INTO $this->table (data_pedido, data_entrega, data_envio, nome_destinatario, endereco, cidade, estado, cep, pais) VALUES (:data_pedido, :data_entrega, :data_envio, :nome_destinatario, :endereco, :cidade, :estado, :cep, :pais)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':data_pedido', $this->data_pedido);
		$stmt->bindParam(':data_entrega', $this->data_entrega);
		$stmt->bindParam(':data_envio', $this->data_envio);
		$stmt->bindParam(':nome_destinatario', $this->nome_destinatario);
		$stmt->bindParam(':endereco', $this->endereco);
		$stmt->bindParam(':cidade', $this->cidade);
		$stmt->bindParam(':estado', $this->estado);
		$stmt->bindParam(':cep', $this->cep);
		$stmt->bindParam(':pais', $this->pais);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET data_pedido = :data_pedido, data_entrega = :data_entrega, data_envio = :data_envio, nome_destinatario = :nome_destinatario, endereco = :endereco, cidade = :cidade, estado = :estado, cep = :cep, pais = :pais, pedidos_id = :pedidos_id WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':data_pedido', $this->data_pedido);
		$stmt->bindParam(':data_entrega', $this->data_entrega);
		$stmt->bindParam(':data_envio', $this->data_envio);
		$stmt->bindParam(':nome_destinatario', $this->nome_destinatario);
		$stmt->bindParam(':endereco', $this->endereco);
		$stmt->bindParam(':cidade', $this->cidade);
		$stmt->bindParam(':estado', $this->estado);
		$stmt->bindParam(':cep', $this->cep);
		$stmt->bindParam(':pais', $this->pais);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

}