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
	
		$contato = new Contatos();

		if(isset($_POST['cadastrar'])):

			$nome  = $_POST['nome'];
			$rua  = $_POST['rua'];
			$bairro  = $_POST['bairro'];
			$complemento  = $_POST['complemento'];
			$cep = $_POST['cep'];
			$estado  = $_POST['estado'];
			$cidade  = $_POST['cidade'];
			$email  = $_POST['email'];
			$telefone1  = $_POST['telefone1'];
			$telefone2  = $_POST['telefone2'];
			$usu_id  = $_POST['usu_id'];


			$contato->setNome($nome);
			$contato->setRua($rua);
			$contato->setBairro($bairro);
			$contato->setComplemento($complemento);
			$contato->setCep($cep);
			$contato->setEstado($estado);
			$contato->setCidade($cidade);
			$contato->setEmail($email);
			$contato->setTelefone1($telefone1);
			$contato->setTelefone2($telefone2);
			$contato->setUsuId($usu_id);

			# Insert
			if($contato->insert()){
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
			$rua  = $_POST['rua'];
			$bairro  = $_POST['bairro'];
			$complemento  = $_POST['complemento'];
			$cep = $_POST['cep'];
			$estado  = $_POST['estado'];
			$cidade  = $_POST['cidade'];
			$email  = $_POST['email'];
			$telefone1  = $_POST['telefone1'];
			$telefone2  = $_POST['telefone2'];
			$usu_id  = $_POST['usu_id'];


			$contato->setNome($nome);
			$contato->setRua($rua);
			$contato->setBairro($bairro);
			$contato->setComplemento($complemento);
			$contato->setCep($cep);
			$contato->setEstado($estado);
			$contato->setCidade($cidade);
			$contato->setEmail($email);
			$contato->setTelefone1($telefone1);
			$contato->setTelefone2($telefone2);
			$contato->setUsuId($usu_id);

			if($contato->update($id)){
				echo "Atualizado com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):

			$id = (int)$_GET['id'];
			if($contato->delete($id)){
				echo "Deletado com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){

			$id = (int)$_GET['id'];
			$resultado = $contato->find($id);
		?>

		<form method="post" action="">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="nome" value="<?php echo $resultado->nome; ?>" placeholder="Nome:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="rua" value="<?php echo $resultado->rua; ?>" placeholder="Rua:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="bairro" value="<?php echo $resultado->bairro; ?>" placeholder="Bairro:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="complemento" value="<?php echo $resultado->complemento; ?>" placeholder="Complemento:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="cep" value="<?php echo $resultado->cep; ?>" placeholder="CEP:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<select name="estado" value="<?php echo $resultado->estado; ?>">
					<option selected>Estado</option>
					<option>PE</option>
					<option>PB</option>
					<option>SP</option>
					<option>RJ</option>
				</select>
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="cidade" value="<?php echo $resultado->cidade; ?>" placeholder="Cidade:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="email" value="<?php echo $resultado->email; ?>" placeholder="E-mail:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="telefone1" value="<?php echo $resultado->telefone1; ?>" placeholder="Telefone1:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="telefone2" value="<?php echo $resultado->telefone2; ?>" placeholder="Telefone2:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="usu_id" value="<?php echo $resultado->usu_id; ?>" placeholder="Código do Usuário:" />
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
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="rua" placeholder="Rua:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="bairro" placeholder="Bairro:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="complemento" placeholder="Complemento:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="cep" placeholder="CEP:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<select name="estado">
					<option selected>Estado</option>
					<option>PE</option>
					<option>PB</option>
					<option>SP</option>
					<option>RJ</option>
				</select>
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="cidade" placeholder="Cidade:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="email" placeholder="E-mail:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="telefone1" placeholder="Telefone1:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="telefone2" placeholder="Telefone2:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="usu_id" placeholder="Código do Usuário:" />
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
					<th>Rua:</th>
					<th>Bairro:</th>
					<th>Complemento:</th>
					<th>CEP:</th>
					<th>Estado:</th>
					<th>Cidade:</th>
					<th>E-mail:</th>
					<th>Telefone1:</th>
					<th>Telefone2:</th>
					<th>Usuário:</th>				
					<th>Ações:</th>
				</tr>
			</thead>
			
			<?php foreach($contato->findAll() as $key => $value): ?>

			<tbody>
				<tr>
					<td><?php echo $value->id; ?></td>
					<td><?php echo $value->nome; ?></td>
					<td><?php echo $value->rua; ?></td>
					<td><?php echo $value->bairro; ?></td>
					<td><?php echo $value->complemento; ?></td>
					<td><?php echo $value->cep; ?></td>
					<td><?php echo $value->estado; ?></td>
					<td><?php echo $value->cidade; ?></td>
					<td><?php echo $value->email; ?></td>
					<td><?php echo $value->telefone1; ?></td>
					<td><?php echo $value->telefone2; ?></td>
					<td><?php echo $value->usu_id; ?></td>
					<td>
						<?php echo "<a href='contato.php?acao=editar&id=" . $value->id . "'>Editar</a>"; ?>
						<?php echo "<a href='contato.php?acao=deletar&id=" . $value->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'>Deletar</a>"; ?>
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