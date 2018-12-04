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
	
		$estudante = new Estudantes();

		if(isset($_POST['cadastrar'])):

			$status  = $_POST['status'];
			$nome  = $_POST['nome'];
			$cpf  = $_POST['cpf'];
			$nascimento  = $_POST['nascimento'];
			$mae = $_POST['mae'];
			$pai  = $_POST['pai'];
			$endereco  = $_POST['endereco'];
			$cidade  = $_POST['cidade'];
			$estado  = $_POST['estado'];
			$telefone  = $_POST['telefone'];
			$serie  = $_POST['serie'];
			$turno  = $_POST['turno'];
			$mensalidade  = $_POST['mensalidade'];


			$estudante->setStatus($status);
			$estudante->setNome($nome);
			$estudante->setCpf($cpf);
			$estudante->setNascimento($nascimento);
			$estudante->setMae($mae);
			$estudante->setPai($pai);
			$estudante->setEndereco($endereco);
			$estudante->setCidade($cidade);
			$estudante->setEstado($estado);
			$estudante->setTelefone($telefone);
			$estudante->setSerie($serie);
			$estudante->setTurno($turno);
			$estudante->setMensalidade($mensalidade);

			# Insert
			if($estudante->insert()){
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
			$status  = $_POST['status'];
			$nome  = $_POST['nome'];
			$cpf  = $_POST['cpf'];
			$nascimento  = $_POST['nascimento'];
			$mae = $_POST['mae'];
			$pai  = $_POST['pai'];
			$endereco  = $_POST['endereco'];
			$cidade  = $_POST['cidade'];
			$estado  = $_POST['estado'];
			$telefone  = $_POST['telefone'];
			$serie  = $_POST['serie'];
			$turno  = $_POST['turno'];
			$mensalidade  = $_POST['mensalidade'];


			$estudante->setStatus($status);
			$estudante->setNome($nome);
			$estudante->setCpf($cpf);
			$estudante->setNascimento($nascimento);
			$estudante->setMae($mae);
			$estudante->setPai($pai);
			$estudante->setEndereco($endereco);
			$estudante->setCidade($cidade);
			$estudante->setEstado($estado);
			$estudante->setTelefone($telefone);
			$estudante->setSerie($serie);
			$estudante->setTurno($turno);
			$estudante->setMensalidade($mensalidade);

			if($estudante->update($id)){
				echo "Atualizado com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):

			$id = (int)$_GET['id'];
			if($estudante->delete($id)){
				echo "Deletado com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){

			$id = (int)$_GET['id'];
			$resultado = $estudante->find($id);
		?>

		<form method="post" action="">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<select name="status" value="<?php echo $resultado->status; ?>">
					<option selected>Status</option>
					<option>Ativo</option>
					<option>Inativo</option>
				</select>
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="nome" value="<?php echo $resultado->nome; ?>" placeholder="Nome:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="cpf" value="<?php echo $resultado->cpf; ?>" placeholder="CPF:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-gift"></i></span>
				<input type="date" name="nascimento" value="<?php echo $resultado->nascimento; ?>" placeholder="Nascimento:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="mae" value="<?php echo $resultado->mae; ?>" placeholder="Mãe:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="pai" value="<?php echo $resultado->pai; ?>" placeholder="Pai:" />
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
				<input type="text" name="estado" value="<?php echo $resultado->estado; ?>" placeholder="Estado:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="telefone" value="<?php echo $resultado->telefone; ?>" placeholder="Telefone:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="serie" value="<?php echo $resultado->serie; ?>" placeholder="Serie:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="turno" value="<?php echo $resultado->turno; ?>" placeholder="Turno:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="mensalidade" value="<?php echo $resultado->mensalidade; ?>" placeholder="Mensalidade:" />
			</div>
			<input type="hidden" name="id" value="<?php echo $resultado->id; ?>">
			<br />
			<input type="submit" name="atualizar" class="btn btn-primary" value="Atualizar dados">					
		</form>

		<?php }else{ ?>


		<form method="post" action="">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<select name="status">
					<option selected>Status</option>
					<option>Ativo</option>
					<option>Inativo</option>
				</select>
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="nome" placeholder="Nome:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="cpf" placeholder="CPF:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-gift"></i></span>
				<input type="date" name="nascimento" placeholder="Nascimento:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="mae" placeholder="Mãe:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="pai" placeholder="Pai:" />
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
				<input type="text" name="estado" placeholder="Estado:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="telefone" placeholder="Telefone:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="serie" placeholder="Serie:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="turno" placeholder="Turno:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="mensalidade" placeholder="Mensalidade:" />
			</div>
			<br />
			<input type="submit" name="cadastrar" class="btn btn-primary" value="Cadastrar dados">					
		</form>

		<?php } ?>

		<table class="table table-hover">
			
			<thead class="thead-dark">
				<tr>
					<th>#</th>
					<th>Status:</th>
					<th>Nome:</th>
					<th>CPF:</th>
					<th>Nascimento:</th>
					<th>Mãe:</th>
					<th>Pai:</th>
					<th>Endereço:</th>
					<th>Cidade:</th>
					<th>Estado:</th>
					<th>Telefone:</th>
					<th>Serie:</th>
					<th>Turno:</th>
					<th>Mensalidade:</th>					
					<th>Ações:</th>
				</tr>
			</thead>
			
			<?php foreach($estudante->findAll() as $key => $value): ?>

			<tbody>
				<tr>
					<td><?php echo $value->id; ?></td>
					<td><?php echo $value->status; ?></td>
					<td><?php echo $value->nome; ?></td>
					<td><?php echo $value->cpf; ?></td>
					<td><?php echo $value->nascimento; ?></td>
					<td><?php echo $value->mae; ?></td>
					<td><?php echo $value->pai; ?></td>
					<td><?php echo $value->endereco; ?></td>
					<td><?php echo $value->cidade; ?></td>
					<td><?php echo $value->estado; ?></td>
					<td><?php echo $value->telefone; ?></td>
					<td><?php echo $value->serie; ?></td>
					<td><?php echo $value->turno; ?></td>
					<td><?php echo $value->mensalidade; ?></td>
					<td>
						<?php echo "<a href='estudante.php?acao=editar&id=" . $value->id . "'>Editar</a>"; ?>
						<?php echo "<a href='estudante.php?acao=deletar&id=" . $value->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'>Deletar</a>"; ?>
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