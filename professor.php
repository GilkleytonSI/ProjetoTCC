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
	
		$professor = new Professores();

		if(isset($_POST['cadastrar'])):

			$status  = $_POST['status'];
			$nome  = $_POST['nome'];
			$cpf  = $_POST['cpf'];
			$nascimento  = $_POST['nascimento'];
			$formacao = $_POST['formacao'];
			$graduacao  = $_POST['graduacao'];
			$pos_graduacao  = $_POST['pos_graduacao'];
			$mestrado  = $_POST['mestrado'];
			$doutorado  = $_POST['doutorado'];
			$salario  = $_POST['salario'];


			$professor->setStatus($status);
			$professor->setNome($nome);
			$professor->setCpf($cpf);
			$professor->setNascimento($nascimento);
			$professor->setFormacao($formacao);
			$professor->setGraduacao($graduacao);
			$professor->setPosGraduacao($pos_graduacao);
			$professor->setMestrado($mestrado);
			$professor->setDoutorado($doutorado);
			$professor->setSalario($salario);

			# Insert
			if($professor->insert()){
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
			$formacao = $_POST['formacao'];
			$graduacao  = $_POST['graduacao'];
			$pos_graduacao  = $_POST['pos_graduacao'];
			$mestrado  = $_POST['mestrado'];
			$doutorado  = $_POST['doutorado'];
			$salario  = $_POST['salario'];


			$professor->setStatus($status);
			$professor->setNome($nome);
			$professor->setCpf($cpf);
			$professor->setNascimento($nascimento);
			$professor->setFormacao($formacao);
			$professor->setGraduacao($graduacao);
			$professor->setPosGraduacao($pos_graduacao);
			$professor->setMestrado($mestrado);
			$professor->setDoutorado($doutorado);
			$professor->setSalario($salario);

			if($professor->update($id)){
				echo "Atualizado com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):

			$id = (int)$_GET['id'];
			if($professor->delete($id)){
				echo "Deletado com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){

			$id = (int)$_GET['id'];
			$resultado = $professor->find($id);
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
				<input type="text" name="formacao" value="<?php echo $resultado->formacao; ?>" placeholder="Formação:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="graduacao" value="<?php echo $resultado->graduacao; ?>" placeholder="Graduação:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="pos_graduacao" value="<?php echo $resultado->pos_graduacao; ?>" placeholder="Pos-Graduação:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="mestrado" value="<?php echo $resultado->mestrado; ?>" placeholder="Mestrado:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="doutorado" value="<?php echo $resultado->doutorado; ?>" placeholder="Doutorado:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="salario" value="<?php echo $resultado->salario; ?>" placeholder="Salario:" />
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
				<input type="text" name="formacao" placeholder="Formação:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="graduacao" placeholder="Graduação:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="pos_graduacao" placeholder="Pos-Graduação:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="mestrado" placeholder="Mestrado:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="doutorado" placeholder="Doutorado:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="salario" placeholder="Salario:" />
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
					<th>Formação:</th>
					<th>Graduação:</th>
					<th>Pos-Graduação:</th>
					<th>Mestrado:</th>
					<th>Doutorado:</th>
					<th>Salario:</th>					
					<th>Ações:</th>
				</tr>
			</thead>
			
			<?php foreach($professor->findAll() as $key => $value): ?>

			<tbody>
				<tr>
					<td><?php echo $value->id; ?></td>
					<td><?php echo $value->status; ?></td>
					<td><?php echo $value->nome; ?></td>
					<td><?php echo $value->cpf; ?></td>
					<td><?php echo $value->nascimento; ?></td>
					<td><?php echo $value->formacao; ?></td>
					<td><?php echo $value->graduacao; ?></td>
					<td><?php echo $value->pos_graduacao; ?></td>
					<td><?php echo $value->mestrado; ?></td>
					<td><?php echo $value->doutorado; ?></td>
					<td><?php echo $value->salario; ?></td>
					<td>
						<?php echo "<a href='professor.php?acao=editar&id=" . $value->id . "'>Editar</a>"; ?>
						<?php echo "<a href='professor.php?acao=deletar&id=" . $value->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'>Deletar</a>"; ?>
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