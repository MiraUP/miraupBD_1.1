<!-- <form role="search" method="get" id="search-container" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>"> -->
<form role="search" id="search-container" class="search-form">
	<div class="row input-text">
		<div class="col me-auto">
			<span class="form-floating">
				<input type="search" name="s" class="form-control" data-url='<?php echo get_site_url();?>' id="search-main" placeholder="<?php echo esc_attr_x( 'Pesquisar', 'placeholder', 'miraupbd' ); ?>">
				<label for="search-main"><?php echo _x( 'Pesquisar', 'label', 'miraupbd' ); ?></label>
			</span>
		</div>
		<div class="col-auto">
			<label for="search-main" class="button-search">
				<lord-icon
					class="lord-icon lord-icon-search"
					src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/animation/19-magnifier-zoom-search.json"
					trigger="hover"
					colors="primary:#dfe0e4,secondary:#ffffff"
					stroke="100"
					style="width:65px;height:65px">
				</lord-icon>
				<lord-icon
					title="Limpar Pesquisa"
					data-bs-toggle="tooltip"
					data-bs-placement="bottom"
					data-bs-custom-class="custom-tooltip" 
					class="lord-icon lord-icon-erase d-none"
					src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/animation/1432-erase.json"
					trigger="hover"
					colors="primary:#dfe0e4,secondary:#ffffff"
					stroke="100"
					style="width:50px;height:50px;margin:7.5px;">
				</lord-icon>
			</label>
		</div>
	</div>
</form>