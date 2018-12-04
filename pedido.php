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
	
		$pedido = new Pedidos();

		if(isset($_POST['cadastrar'])):

			$data_pedido  = $_POST['data_pedido'];
			$data_entrega  = $_POST['data_entrega'];
			$data_envio  = $_POST['data_envio'];
			$nome_destinatario = $_POST['nome_destinatario'];
			$endereco  = $_POST['endereco'];
			$cidade  = $_POST['cidade'];
			$estado  = $_POST['estado'];
			$cep  = $_POST['cep'];
			$pais  = $_POST['pais'];
			

			$pedido->setDtPedido($data_pedido);
			$pedido->setDtEntrega($data_entrega);
			$pedido->setDtEnvio($data_envio);
			$pedido->setNomeDestinatario($nome_destinatario);
			$pedido->setEndereco($endereco);
			$pedido->setCidade($cidade);
			$pedido->setEstado($estado);
			$pedido->setCep($cep);
			$pedido->setPais($pais);
			

			# Insert
			if($pedido->insert()){
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
			$data_pedido  = $_POST['data_pedido'];
			$data_entrega  = $_POST['data_entrega'];
			$data_envio  = $_POST['data_envio'];
			$nome_destinatario = $_POST['nome_destinatario'];
			$endereco  = $_POST['endereco'];
			$cidade  = $_POST['cidade'];
			$estado  = $_POST['estado'];
			$cep  = $_POST['cep'];
			$pais  = $_POST['pais'];
			

			$pedido->setDtPedido($data_pedido);
			$pedido->setDtEntrega($data_entrega);
			$pedido->setDtEnvio($data_envio);
			$pedido->setNomeDestinatario($nome_destinatario);
			$pedido->setEndereco($endereco);
			$pedido->setCidade($cidade);
			$pedido->setEstado($estado);
			$pedido->setCep($cep);
			$pedido->setPais($pais);
		

			if($pedido->update($id)){
				echo "Atualizado com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):

			$id = (int)$_GET['id'];
			if($pedido->delete($id)){
				echo "Deletado com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){

			$id = (int)$_GET['id'];
			$resultado = $pedido->find($id);
		?>

		<form method="post" action="">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="date" name="data_pedido" value="<?php echo $resultado->data_pedido; ?>" placeholder="Data Pedido:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="date" name="data_entrega" value="<?php echo $resultado->data_entrega; ?>" placeholder="Data Entrega:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="date" name="data_envio" value="<?php echo $resultado->data_envio; ?>" placeholder="Data Envio:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="nome_destinatario" value="<?php echo $resultado->nome_destinatario; ?>" placeholder="Nome Destinatio:" />
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
				<input type="text" name="cep" value="<?php echo $resultado->cep; ?>" placeholder="CEP:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="pais" value="<?php echo $resultado->pais; ?>" placeholder="País:" />
			</div>
			<input type="hidden" name="id" value="<?php echo $resultado->id; ?>">
			<br />
			<input type="submit" name="atualizar" class="btn btn-primary" value="Atualizar dados">					
		</form>

		<?php }else{ ?>


		<form method="post" action="">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="date" name="data_pedido" placeholder="Data Pedido:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="date" name="data_entrega" placeholder="Data Entrega:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="date" name="data_envio" placeholder="Data Envio:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="nome_destinatario" placeholder="Nome Destinatio:" />
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
				<input type="text" name="cep" placeholder="CEP:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="pais" placeholder="País:" />
			</div>
			<br />
			<input type="submit" name="cadastrar" class="btn btn-primary" value="Cadastrar dados">					
		</form>

		<?php } ?>

		<table class="table table-hover">
			
			<thead class="thead-dark">
				<tr>
					<th>#</th>
					<th>Dt.Pedido:</th>
					<th>Dt.Entrega:</th>
					<th>Dt.Envio:</th>
					<th>Nome destinatario:</th>
					<th>Endereço:</th>
					<th>Cidade:</th>
					<th>Estado:</th>
					<th>CEP:</th>
					<th>Pais:</th>				
					<th>Ações:</th>
				</tr>
			</thead>
			
			<?php foreach($pedido->findAll() as $key => $value): ?>

			<tbody>
				<tr>
					<td><?php echo $value->id; ?></td>
					<td><?php echo $value->data_pedido; ?></td>
					<td><?php echo $value->data_entrega; ?></td>
					<td><?php echo $value->data_envio; ?></td>
					<td><?php echo $value->nome_destinatario; ?></td>
					<td><?php echo $value->endereco; ?></td>
					<td><?php echo $value->cidade; ?></td>
					<td><?php echo $value->estado; ?></td>
					<td><?php echo $value->cep; ?></td>
					<td><?php echo $value->pais; ?></td>
					<td>
						<?php echo "<a href='pedido.php?acao=editar&id=" . $value->id . "'>Editar</a>"; ?>
						<?php echo "<a href='pedido.php?acao=deletar&id=" . $value->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'>Deletar</a>"; ?>
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