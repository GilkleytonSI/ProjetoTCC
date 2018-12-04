<?php
	function __autoload($class_name){
		require_once 'classes/' . $class_name . '.php';
	}
?>

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

	<?php
	
		$funcionario = new Funcionarios();

		if(isset($_POST['cadastrar'])):

			$nome  = $_POST['nome'];
			$DtNascimento  = $_POST['DtNascimento'];
			$NumSeguro  = $_POST['NumSeguro'];
			$cpf = $_POST['cpf'];
			$rg  = $_POST['rg'];
			$sexo  = $_POST['sexo'];
			$endereco  = $_POST['endereco'];
			$cidade  = $_POST['cidade'];
			$salario  = $_POST['salario'];
			

			$funcionario->setNome($nome);
			$funcionario->setDtNascimento($DtNascimento);
			$funcionario->setNumSeguro($NumSeguro);
			$funcionario->setCpf($cpf);
			$funcionario->setRg($rg);
			$funcionario->setSexo($sexo);
			$funcionario->setEndereco($endereco);
			$funcionario->setCidade($cidade);
			$funcionario->setSalario($salario);
			

			# Insert
			if($funcionario->insert()){
				echo "Inserido com sucesso!";
			}

		endif;

		?>

	<div class="container">

		<nav class="container">
			<?php require_once ("menu.php");?>
		</nav>


		<?php 
		if(isset($_POST['atualizar'])):

			$id = $_POST['id'];
			$nome  = $_POST['nome'];
			$DtNascimento  = $_POST['DtNascimento'];
			$NumSeguro  = $_POST['NumSeguro'];
			$cpf = $_POST['cpf'];
			$rg  = $_POST['rg'];
			$sexo  = $_POST['sexo'];
			$endereco  = $_POST['endereco'];
			$cidade  = $_POST['cidade'];
			$salario  = $_POST['salario'];

			$funcionario->setNome($nome);
			$funcionario->setDtNascimento($DtNascimento);
			$funcionario->setNumSeguro($NumSeguro);
			$funcionario->setCpf($cpf);
			$funcionario->setRg($rg);
			$funcionario->setSexo($sexo);
			$funcionario->setEndereco($endereco);
			$funcionario->setCidade($cidade);
			$funcionario->setSalario($salario);
		

			if($funcionario->update($id)){
				echo "Atualizado com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):

			$id = (int)$_GET['id'];
			if($funcionario->delete($id)){
				echo "Deletado com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){

			$id = (int)$_GET['id'];
			$resultado = $funcionario->find($id);
		?>

		<form method="post" action="">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="nome" value="<?php echo $resultado->nome; ?>" placeholder="Nome:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-gift"></i></span>
				<input type="date" name="DtNascimento" value="<?php echo $resultado->DtNascimento; ?>" placeholder="Nascimento:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="NumSeguro" value="<?php echo $resultado->NumSeguro; ?>" placeholder="Num.Seguro:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="cpf" value="<?php echo $resultado->cpf; ?>" placeholder="CPF:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="rg" value="<?php echo $resultado->rg; ?>" placeholder="RG:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<select name="sexo">
					<option selected>Sexo</option>
					<option>M</option>
					<option>F</option>
				</select>
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="endereco" value="<?php echo $resultado->endereco; ?>" placeholder="Endereço:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="cidade" value="<?php echo $resultado->cidade; ?>" placeholder="Cidade:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="salario" value="<?php echo $resultado->salario; ?>" placeholder="Salário:" />
			</div>
			<input type="hidden" name="id" value="<?php echo $resultado->id; ?>">
			<br />
			<input type="submit" name="atualizar" class="btn btn-primary" value="Atualizar dados">					
		</form>

		<?php }else{ ?>


		<form method="post" action="">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="nome" placeholder="Nome:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-gift"></i></span>
				<input type="date" name="DtNascimento" placeholder="Nascimento:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="NumSeguro" placeholder="Num.Seguro:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="cpf" placeholder="CPF:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="rg" placeholder="RG:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<select name="sexo">
					<option selected>Sexo</option>
					<option>M</option>
					<option>F</option>
				</select>
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="endereco" placeholder="Endereço:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="cidade" placeholder="Cidade:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="salario" placeholder="Salário:" />
			</div>
			<br />
			<input type="submit" name="cadastrar" class="btn btn-primary" value="Cadastrar dados">					
		</form>

		<?php } ?>

		<table class="table table-hover">
			
			<thead class="thead-dark">
				<tr>
					<th>#</th>
					<th>Nome:</th>
					<th>DTNascimento:</th>
					<th>Num.Seguro:</th>
					<th>CPF:</th>
					<th>RG:</th>
					<th>Sexo:</th>
					<th>Endereço:</th>
					<th>Cidade:</th>
					<th>Salário:</th>					
					<th>Ações:</th>
				</tr>
			</thead>
			
			<?php foreach($funcionario->findAll() as $key => $value): ?>

			<tbody>
				<tr>
					<td><?php echo $value->id; ?></td>
					<td><?php echo $value->nome; ?></td>
					<td><?php echo $value->DtNascimento; ?></td>
					<td><?php echo $value->NumSeguro; ?></td>
					<td><?php echo $value->cpf; ?></td>
					<td><?php echo $value->rg; ?></td>
					<td><?php echo $value->sexo; ?></td>
					<td><?php echo $value->endereco; ?></td>
					<td><?php echo $value->cidade; ?></td>
					<td><?php echo $value->salario; ?></td>
					<td>
						<?php echo "<a href='funcionario.php?acao=editar&id=" . $value->id . "'>Editar</a>"; ?>
						<?php echo "<a href='funcionario.php?acao=deletar&id=" . $value->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'>Deletar</a>"; ?>
					</td>
				</tr>
			</tbody>

			<?php endforeach; ?>

		</table>

	</div>

<script src="js/jQuery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>