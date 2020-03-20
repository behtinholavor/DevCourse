<h4>Formulário</h4>
<form class="form-margin" method="post" action="/pages/actions/product_add.php">
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

	<div style="text-align: right;">
		<button type="submit" class="btn btn-dark btn-sm">Salvar</button>
	</div>

</form>
