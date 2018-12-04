<?php
require_once 'Aluno.php';

class Tecnico extends Aluno{
	private $registroProfissional;

	public function pratica(){
		echo "<p>O aluno <strong>$this->nome</strong> está em aula prática</p>";
	}

	public function pagarMensalidade(){
		echo "<p>Pagando mensalidade do aluno <strong>$this->nome</strong></p>";
	}

	function getRegistroProfissional(){
		return $this->registroProfissional;
	}

	function setRegistroProfissional($registroProfissional){
		$this->registroProfissional = $registroProfissional;
	}
}

?>