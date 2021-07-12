<div class="container">
	<form role='search' method="get" action="<?php echo home_url('/');  ?>">
	

	<div class="input-group mb-3 mt-3">
		<input type="search" class="form-control" value='<?php echo get_search_query(); ?>' placeholder="Digite aqui para pesquisar!" aria-describedby="button-addon2" name='s'>
		<button class="btn btn-outline cor1 text-header" type='submit' >
			
			<i class="fas fa-search"></i>

		</button>
	</div>
</form>
</div>