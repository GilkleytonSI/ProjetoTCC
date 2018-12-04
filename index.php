<!DOCTYPE HTML>
<html land="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
   <title>PROJETO TCC </title>
  <meta name="description" content="PHP OO" />
   <meta name="author" content="Gilkleyton Rodrigues"/>
   <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" />
  <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
   <![endif]-->
</head>
<body>

	
	<div class="container">

		<nav class="container">
			<?php require_once ("menu.php");?>
		</nav>
    <pre>
    <?php 
        require_once 'class/Aluno.php';
        require_once 'class/Visitante.php';
        require_once 'class/Bolsista.php';
        require_once 'class/Professor.php';
        require_once 'class/Tecnico.php';

        $v1 = new Visitante();
        $v1->setNome("Gilkleyton");
        $v1->setIdade(26);
        $v1->setSexo("M");
        print_r($v1);

        $a1 = new Aluno();
        $a1->setNome("Pedro");
        $a1->setMatricula(1111);
        $a1->setIdade(19);
        $a1->setSexo("M");
        $a1->setCurso("Informática");
        $a1->pagarMensalidade();

        print_r($a1);

        $b1 = new Bolsista();
        $b1->setMatricula(1112);
        $b1->setNome("João");
        $b1->setBolsa(10.5);
        $b1->setCurso("Administração");
        $b1->setIdade(18);
        $b1->setSexo("M");
        $b1->pagarMensalidade();

        print_r($b1);

        $prof1 = new Professor();
        $prof1->setNome("Paulo");
        $prof1->setEspecialidade("Programador");
        $prof1->setIdade(30);
        $prof1->setSexo("M");
        $prof1->receberAumento();
        $prof1->setSalario(2000);

        print_r($prof1);

        $tec1 = new Tecnico();
        $tec1->setNome("Saulo");
        $tec1->setMatricula(2334);
        $tec1->setCurso("Sistemas de Informação");
        $tec1->setRegistroProfissional(1234);
        $tec1->setIdade(25);
        $tec1->setSexo("M");
        $tec1->pagarMensalidade();
        $tec1->pratica();

        print_r($tec1);

     ?>
		
	</div>

<script src="js/jQuery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>