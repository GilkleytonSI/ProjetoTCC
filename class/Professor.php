<?php
require_once 'Pessoa.php';

class Professor extends Pessoa{
	private $especialidade;
	private $salario;

	public function receberAumento(){
		echo "<p>O Professor <strong>$this->nome</strong> recebeu aumento</p>";
	}

	function getEspecialidade(){
			return $this->especialidade;
		} 

	function setEspecialidade($especialidade){
			$this->especialidade = $especialidade;
		}

	function getSalario(){
			return $this->salario;
		} 

	function setSalario($salario){
			$this->salario = $salario;
		}
}

?>