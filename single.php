<?php get_header();?>

<!-- Single -->
<div class="container pt-5">
	<div class="row">
		<div class="col-sm-12 col-md-8 mb-3">
			<?php
			if(have_posts()):while(have_posts()) : the_post();
				?> 
				<?php 
				get_template_part('content',get_post_format());
			endwhile;
			?>
			<?php
			else: get_404_template(); endif;
			?>
		</div>
		<?php get_sidebar();?>	
	</div>
	<div class="row">
		<div class="col-sm-12 col-md-8">
			<?php comments_template(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>