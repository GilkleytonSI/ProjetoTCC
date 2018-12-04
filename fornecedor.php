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
	
		$fornecedor = new Fornecedores();

		if(isset($_POST['cadastrar'])):

			$razao_social  = $_POST['razao_social'];
			$tipo_empresa  = $_POST['tipo_empresa'];
			$cnpj_cpf  = $_POST['cnpj_cpf'];
			$inscricao_estadual = $_POST['inscricao_estadual'];
			$inscricao_municipal  = $_POST['inscricao_municipal'];
			$cep  = $_POST['cep'];
			$endereco  = $_POST['endereco'];
			$bairro  = $_POST['bairro'];
			$cidade  = $_POST['cidade'];
			$telefone  = $_POST['telefone'];
			$email  = $_POST['email'];
			$data  = $_POST['data'];
			

			$fornecedor->setRazaoSocial($razao_social);
			$fornecedor->setTipoEmpresa($tipo_empresa);
			$fornecedor->setCnpjCpf($cnpj_cpf);
			$fornecedor->setInscricaoEstadual($inscricao_estadual);
			$fornecedor->setInscricaoMunicipal($inscricao_municipal);
			$fornecedor->setCep($cep);
			$fornecedor->setEndereco($endereco);
			$fornecedor->setBairro($bairro);
			$fornecedor->setCidade($cidade);
			$fornecedor->setTelefone($telefone);
			$fornecedor->setEmail($email);
			$fornecedor->setData($data);
			

			# Insert
			if($fornecedor->insert()){
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
			$razao_social  = $_POST['razao_social'];
			$tipo_empresa  = $_POST['tipo_empresa'];
			$cnpj_cpf  = $_POST['cnpj_cpf'];
			$inscricao_estadual = $_POST['inscricao_estadual'];
			$inscricao_municipal  = $_POST['inscricao_municipal'];
			$cep  = $_POST['cep'];
			$endereco  = $_POST['endereco'];
			$bairro  = $_POST['bairro'];
			$cidade  = $_POST['cidade'];
			$telefone  = $_POST['telefone'];
			$email  = $_POST['email'];
			$data  = $_POST['data'];
			

			$fornecedor->setRazaoSocial($razao_social);
			$fornecedor->setTipoEmpresa($tipo_empresa);
			$fornecedor->setCnpjCpf($cnpj_cpf);
			$fornecedor->setInscricaoEstadual($inscricao_estadual);
			$fornecedor->setInscricaoMunicipal($inscricao_municipal);
			$fornecedor->setCep($cep);
			$fornecedor->setEndereco($endereco);
			$fornecedor->setBairro($bairro);
			$fornecedor->setCidade($cidade);
			$fornecedor->setTelefone($telefone);
			$fornecedor->setEmail($email);
			$fornecedor->setData($data);
		

			if($fornecedor->update($id)){
				echo "Atualizado com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):

			$id = (int)$_GET['id'];
			if($fornecedor->delete($id)){
				echo "Deletado com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){

			$id = (int)$_GET['id'];
			$resultado = $fornecedor->find($id);
		?>

		<form method="post" action="">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="razao_social" value="<?php echo $resultado->razao_social; ?>" placeholder="Razão Social:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<select name="tipo_empresa" value="<?php echo $resultado->tipo_empresa; ?>">
					<option selected>Tipo da empresa</option>
					<option>PF</option>
					<option>PJ</option>
				</select>
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="cnpj_cpf" value="<?php echo $resultado->cnpj_cpf; ?>" placeholder="CNPJ OU CPF:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="inscricao_estadual" value="<?php echo $resultado->inscricao_estadual; ?>" placeholder="Inscrição Estadual:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="inscricao_municipal" value="<?php echo $resultado->inscricao_municipal; ?>" placeholder="Inscrição Municipal:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="cep" value="<?php echo $resultado->cep; ?>" placeholder="CEP:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="endereco" value="<?php echo $resultado->endereco; ?>" placeholder="Endereço:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="bairro" value="<?php echo $resultado->bairro; ?>" placeholder="Bairro:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="cidade" value="<?php echo $resultado->cidade; ?>" placeholder="Cidade:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="telefone" value="<?php echo $resultado->telefone; ?>" placeholder="Telefone:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="email" value="<?php echo $resultado->email; ?>" placeholder="Email:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="date" name="data" value="<?php echo $resultado->data; ?>" placeholder="Data:" />
			</div>
			<input type="hidden" name="id" value="<?php echo $resultado->id; ?>">
			<br />
			<input type="submit" name="atualizar" class="btn btn-primary" value="Atualizar dados">					
		</form>

		<?php }else{ ?>


		<form method="post" action="">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="razao_social" placeholder="Razão Social:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<select name="tipo_empresa">
					<option selected>Tipo da empresa</option>
					<option>PF</option>
					<option>PJ</option>
				</select>
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="cnpj_cpf" placeholder="CNPJ OU CPF:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="inscricao_estadual" placeholder="Inscrição Estadual:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="inscricao_municipal" placeholder="Inscrição Municipal:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="cep" placeholder="CEP:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="endereco" placeholder="Endereço:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="bairro" placeholder="Bairro:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="cidade" placeholder="Cidade:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="telefone" placeholder="Telefone:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="email" placeholder="email:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="date" name="data" placeholder="Data:" />
			</div>
			<br />
			<input type="submit" name="cadastrar" class="btn btn-primary" value="Cadastrar dados">					
		</form>

		<?php } ?>

		<table class="table table-hover">
			
			<thead class="thead-dark">
				<tr>
					<th>#</th>
					<th>Razão Social:</th>
					<th>Tipo Empresa:</th>
					<th>Cnpj ou Cpf:</th>
					<th>Insc.Estadual:</th>
					<th>Insc.Municipal:</th>
					<th>Cep:</th>
					<th>Endereço:</th>
					<th>Bairro:</th>
					<th>Cidade:</th>
					<th>Telefone:</th>
					<th>Email:</th>
					<th>Data:</th>					
					<th>Ações:</th>
				</tr>
			</thead>
			
			<?php foreach($fornecedor->findAll() as $key => $value): ?>

			<tbody>
				<tr>
					<td><?php echo $value->id; ?></td>
					<td><?php echo $value->razao_social; ?></td>
					<td><?php echo $value->tipo_empresa; ?></td>
					<td><?php echo $value->cnpj_cpf; ?></td>
					<td><?php echo $value->inscricao_estadual; ?></td>
					<td><?php echo $value->inscricao_municipal; ?></td>
					<td><?php echo $value->cep; ?></td>
					<td><?php echo $value->endereco; ?></td>
					<td><?php echo $value->bairro; ?></td>
					<td><?php echo $value->cidade; ?></td>
					<td><?php echo $value->telefone; ?></td>
					<td><?php echo $value->email; ?></td>
					<td><?php echo $value->data; ?></td>
					<td>
						<?php echo "<a href='fornecedor.php?acao=editar&id=" . $value->id . "'>Editar</a>"; ?>
						<?php echo "<a href='fornecedor.php?acao=deletar&id=" . $value->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'>Deletar</a>"; ?>
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