<?php
/*
Template Name: Left Sidebar
*/
 get_header();?>



<div class="container pt-5">
	<div class="row">

			<!-- Primeira Coluna -->
			<?php get_sidebar();?>
	
		<div class="col-sm-8">
			<!-- Segunda Coluna -->

			<?php
			if(have_posts()):
				while(have_posts()):
					the_post();
					?>
					<h3><?php the_title(); ?></h3>	
					<div> <?php the_content(); ?></div>
					<?php
				endwhile;
			endif;
			?>
		</div>

	</div>
</div>

<?php get_footer(); ?>