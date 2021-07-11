<?php 


/*
Template Name: Full Width
*/

get_header();
?>


<div class="container pt-5">
	<div class="row">
		<div class="col-sm-12">

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