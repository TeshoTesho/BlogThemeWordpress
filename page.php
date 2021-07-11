<?php get_header();?>


<div class="container pt-5">
	<div class="row">
		<div class="col-sm-8 text-dark">
			<!-- Primeira Coluna -->

			<?php
			if(have_posts()):
				while(have_posts()):
					the_post();
					?>
					<h2><?php the_title(); ?></h2>	
					<div> <?php the_content(); ?></div>
					<?php
				endwhile;
			endif;
			?>
		</div>

		<div class="col-sm-4">
			<!-- Segunda Coluna -->
			<?php dynamic_sidebar('primary-sidebar');?>
		</div>	
	</div>
</div>

<?php get_footer(); ?>