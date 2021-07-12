<?php get_header();?>


<div class="container pt-5">
	<div class="row">
		<div class="col-sm-12 col-md-8 text-dark">
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
<div class="col-4"><?php get_sidebar();?>	</div>
			
	</div>
</div>

<?php get_footer(); ?>