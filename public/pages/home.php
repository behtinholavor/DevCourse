<div class="container">
	<nav class="navbar navbar-dark bg-dark">
		<div class="d-flex flex-column bd-highlight mb-2">
			<div class="p-1 bd-highlight">
				<span class="text-muted" style="font-weight: bold;">SyStock</span>
			</div>			
			<div class="p-1 bd-highlight">
				<span class="text-muted">Sistema para controle de estque</span>
			</div>

			<div class="collapse show" id="tgl-menu">

				<div class="p-1 bd-highlight row-menu">
					<a class="text-muted" href="?page=product">
						<span class="text-muted">Formulário</span>
					</a>
				</div>			
				<div class="p-1 bd-highlight row-menu">
					<a class="text-muted" href="?page=product_list">
						<span class="text-muted">Listagem</span>
					</a>
				</div>			

			</div>

		</div>		

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tgl-menu" aria-controls="tgl-menu" aria-expanded="false" aria-label="toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>		
	</nav>

	<div class="centered">		
		<?=get('message');?>
	</div>	
</div>