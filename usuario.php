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
	
		$usuario = new Usuarios();

		if(isset($_POST['cadastrar'])):

			$nome  = $_POST['nome'];
			$sobrenome  = $_POST['sobrenome'];
			$endereco  = $_POST['endereco'];
			$cidade  = $_POST['cidade'];
			$email = $_POST['email'];
			$cep = $_POST['cep'];
			$sexo  = $_POST['sexo'];
			$nascimento  = $_POST['nascimento'];
			$telefone  = $_POST['telefone'];
			$login  = $_POST['login'];
			$senha  = $_POST['senha'];


			$usuario->setNome($nome);
			$usuario->setSobrenome($sobrenome);
			$usuario->setEndereco($endereco);
			$usuario->setCidade($cidade);
			$usuario->setEmail($email);
			$usuario->setCep($cep);
			$usuario->setSexo($sexo);
			$usuario->setNascimento($nascimento);
			$usuario->setTelefone($telefone);
			$usuario->setLogin($login);
			$usuario->setSenha($senha);

			# Insert
			if($usuario->insert()){
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
			$sobrenome  = $_POST['sobrenome'];
			$endereco  = $_POST['endereco'];
			$cidade  = $_POST['cidade'];
			$email = $_POST['email'];
			$cep = $_POST['cep'];
			$sexo  = $_POST['sexo'];
			$nascimento  = $_POST['nascimento'];
			$telefone  = $_POST['telefone'];
			$login  = $_POST['login'];
			$senha  = $_POST['senha'];

			$usuario->setNome($nome);
			$usuario->setSobrenome($sobrenome);
			$usuario->setEndereco($endereco);
			$usuario->setCidade($cidade);
			$usuario->setEmail($email);
			$usuario->setCep($cep);
			$usuario->setSexo($sexo);
			$usuario->setNascimento($nascimento);
			$usuario->setTelefone($telefone);
			$usuario->setLogin($login);
			$usuario->setSenha($senha);

			if($usuario->update($id)){
				echo "Atualizado com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):

			$id = (int)$_GET['id'];
			if($usuario->delete($id)){
				echo "Deletado com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){

			$id = (int)$_GET['id'];
			$resultado = $usuario->find($id);
		?>

		<form method="post" action="">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="nome" value="<?php echo $resultado->nome; ?>" placeholder="Nome:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="sobrenome" value="<?php echo $resultado->sobrenome; ?>" placeholder="Sobrenome:" />
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
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="email" value="<?php echo $resultado->email; ?>" placeholder="E-mail:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="cep" value="<?php echo $resultado->cep; ?>" placeholder="CEP:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<select name="sexo" value="<?php echo $resultado->sexo; ?>">
					<option selected>Sexo</option>
					<option>M</option>
					<option>F</option>
				</select>
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-gift"></i></span>
				<input type="date" name="nascimento" value="<?php echo $resultado->nascimento; ?>" placeholder="Nascimento:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="telefone" value="<?php echo $resultado->telefone; ?>" placeholder="Telefone:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="login" value="<?php echo $resultado->login; ?>" placeholder="Login:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="password" name="senha" value="<?php echo $resultado->senha; ?>" placeholder="Senha:" />
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
				<input type="text" name="sobrenome" placeholder="Sobrenome:" />
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
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="email" placeholder="E-mail:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="cep" placeholder="CEP:" />
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
				<span class="add-on"><i class="icon-gift"></i></span>
				<input type="date" name="nascimento" placeholder="Nascimento:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="telefone" placeholder="Telefone:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="login" placeholder="Login:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="password" name="senha" placeholder="Senha:" />
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
					<th>Sobrenome:</th>
					<th>Endereço:</th>
					<th>Cidade:</th>
					<th>E-mail:</th>
					<th>CEP:</th>
					<th>Sexo:</th>
					<th>Nascimento:</th>
					<th>Telefone:</th>
					<th>Login:</th>
					<!--<th>Senha:</th>-->					
					<th>Ações:</th>
				</tr>
			</thead>
			
			<?php foreach($usuario->findAll() as $key => $value): ?>

			<tbody>
				<tr>
					<td><?php echo $value->id; ?></td>
					<td><?php echo $value->nome; ?></td>
					<td><?php echo $value->sobrenome; ?></td>
					<td><?php echo $value->endereco; ?></td>
					<td><?php echo $value->cidade; ?></td>
					<td><?php echo $value->email; ?></td>
					<td><?php echo $value->cep; ?></td>
					<td><?php echo $value->sexo; ?></td>
					<td><?php echo $value->nascimento; ?></td>
					<td><?php echo $value->telefone; ?></td>
					<td><?php echo $value->login; ?></td>
					<!--<td><?php echo $value->senha; ?></td>-->
					<td>
						<?php echo "<a href='usuario.php?acao=editar&id=" . $value->id . "'>Editar</a>"; ?>
						<?php echo "<a href='usuario.php?acao=deletar&id=" . $value->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'>Deletar</a>"; ?>
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