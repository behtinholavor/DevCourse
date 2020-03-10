<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DevCourse</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<style type="text/css">
		#main-container {
			width: 550px;
			margin-top: 40px;
		}

		.form-margin {
			margin-top: 20px;
		}

		.align-right {
			text-align: right;
		}

		.button-save {
			background-color: #FF1168;
			color: #ffffff;
		}
	</style>
</head>
<body>
	<div class="container" id="main-container">
		<h4>Formulário de Cadastro</h4>
		<form class="form-margin" method="post" action="_add_product.php">
			<div class="form-group">
				<label>Código</label>
				<input type="number" min="0" step="1" class="form-control" name="edtCode" placeholder="Informe o código e/ou sku do produto">			
			</div>

			<div class="form-group">
				<label>Descrição</label>
				<input type="text" class="form-control" name="edtDescription" placeholder="Informe a descrição completa do produto" required autocomplete="off">			
			</div>

			<div class="form-group">
				<label>Quantidade</label>
				<input type="number" class="form-control" name="edtQuantity" placeholder="Informe a quantidade do produto">			
			</div>

			<div class="form-group">
				<label>Categoria</label>
				<select class="form-control" name="cbbCategory">
					<option>Categoria 1</option>
					<option>Categoria 2</option>
					<option>Categoria 3</option>
					<option>Categoria 4</option>
					<option>Categoria 5</option>
				</select>
			</div>

			<div class="form-group">
				<label>Fabricante</label>
				<select class="form-control" name="cbbManufacturer">
					<option>Fabricante 1</option>
					<option>Fabricante 2</option>
					<option>Fabricante 3</option>
					<option>Fabricante 4</option>
					<option>Fabricante 5</option>
				</select>
			</div>

			<div class="align-right">
				<button type="submit" class="btn btn-sm button-save">Salvar</button>
			</div>



		</form>
	</div>










	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>