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
	
		$produto = new Produtos();

		if(isset($_POST['cadastrar'])):

			$nome  = $_POST['nome'];
			$quantidade  = $_POST['quantidade'];
			$preco_unitario  = $_POST['preco_unitario'];
			$unidade_estoque = $_POST['unidade_estoque'];
			$descricao  = $_POST['descricao'];
			$unidade_medida  = $_POST['unidade_medida'];
			$status  = $_POST['status'];
			$altura  = $_POST['altura'];
			$largura  = $_POST['largura'];
			$comprimento  = $_POST['comprimento'];
			$pedidos_id  = $_POST['pedidos_id'];
			

			$produto->setNome($nome);
			$produto->setQuantidade($quantidade);
			$produto->setPrecoUnitario($preco_unitario);
			$produto->setUnidadeEstoque($unidade_estoque);
			$produto->setDescricao($descricao);
			$produto->setUnidadeMedida($unidade_medida);
			$produto->setStatus($status);
			$produto->setAltura($altura);
			$produto->setLargura($largura);
			$produto->setComprimento($comprimento);
			$produto->setPedidoId($pedidos_id);
			

			# Insert
			if($produto->insert()){
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
			$quantidade  = $_POST['quantidade'];
			$preco_unitario  = $_POST['preco_unitario'];
			$unidade_estoque = $_POST['unidade_estoque'];
			$descricao  = $_POST['descricao'];
			$unidade_medida  = $_POST['unidade_medida'];
			$status  = $_POST['status'];
			$altura  = $_POST['altura'];
			$largura  = $_POST['largura'];
			$comprimento  = $_POST['comprimento'];
			$pedidos_id  = $_POST['pedidos_id'];
		
			

			$produto->setNome($nome);
			$produto->setQuantidade($quantidade);
			$produto->setPrecoUnitario($preco_unitario);
			$produto->setUnidadeEstoque($unidade_estoque);
			$produto->setDescricao($descricao);
			$produto->setUnidadeMedida($unidade_medida);
			$produto->setStatus($status);
			$produto->setAltura($altura);
			$produto->setLargura($largura);
			$produto->setComprimento($comprimento);
			$produto->setPedidoId($pedidos_id);
		

			if($produto->update($id)){
				echo "Atualizado com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):

			$id = (int)$_GET['id'];
			if($produto->delete($id)){
				echo "Deletado com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){

			$id = (int)$_GET['id'];
			$resultado = $produto->find($id);
		?>

		<form method="post" action="">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="nome" value="<?php echo $resultado->nome; ?>" placeholder="Nome:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="quantidade" value="<?php echo $resultado->quantidade; ?>" placeholder="Quantidade:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="preco_unitario" value="<?php echo $resultado->preco_unitario; ?>" placeholder="Preço Unitário:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="unidade_estoque" value="<?php echo $resultado->unidade_estoque; ?>" placeholder="Unidade Estoque:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="descricao" value="<?php echo $resultado->rg; ?>" placeholder="Descrição:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="unidade_medida" value="<?php echo $resultado->unidade_medida; ?>" placeholder="Unidade Medida:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<select name="status">
					<option selected>Status do Produto</option>
					<option>Disponivel</option>
					<option>Indisponivel</option>
				</select>
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="altura" value="<?php echo $resultado->altura; ?>" placeholder="Altura:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="largura" value="<?php echo $resultado->largura; ?>" placeholder="Largura:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="comprimento" value="<?php echo $resultado->comprimento; ?>" placeholder="Comprimento:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="pedidos_id" value="<?php echo $resultado->pedidos_id; ?>" placeholder="Código do pedido:" />
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
				<input type="text" name="quantidade" placeholder="Quantidade:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="preco_unitario" placeholder="Preço Unitário:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="unidade_estoque" placeholder="Unidade Estoque:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="descricao" placeholder="Descrição:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="unidade_medida" placeholder="Unidade Medida:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<select name="status">
					<option selected>Status do Produto</option>
					<option>Disponivel</option>
					<option>Indisponivel</option>
				</select>
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="altura" placeholder="Altura:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="largura" placeholder="Largura:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="comprimento" placeholder="Comprimento:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="pedidos_id" placeholder="Código do pedido:" />
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
					<th>Quantidade:</th>
					<th>Preço Unitário:</th>
					<th>Unidade Estoq.:</th>
					<th>Descrição:</th>
					<th>Unidade Medida:</th>
					<th>Status:</th>
					<th>Altura:</th>
					<th>Largura:</th>
					<th>Comprimento:</th>
					<th>Cód.Pedido:</th>			
					<th>Ações:</th>
				</tr>
			</thead>
			
			<?php foreach($produto->findAll() as $key => $value): ?>

			<tbody>
				<tr>
					<td><?php echo $value->id; ?></td>
					<td><?php echo $value->nome; ?></td>
					<td><?php echo $value->quantidade; ?></td>
					<td><?php echo $value->preco_unitario; ?></td>
					<td><?php echo $value->unidade_estoque; ?></td>
					<td><?php echo $value->descricao; ?></td>
					<td><?php echo $value->unidade_medida; ?></td>
					<td><?php echo $value->status; ?></td>
					<td><?php echo $value->altura; ?></td>
					<td><?php echo $value->largura; ?></td>
					<td><?php echo $value->comprimento; ?></td>
					<td><?php echo $value->pedidos_id; ?></td>
					<td>
						<?php echo "<a href='produto.php?acao=editar&id=" . $value->id . "'>Editar</a>"; ?>
						<?php echo "<a href='produto.php?acao=deletar&id=" . $value->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'>Deletar</a>"; ?>
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