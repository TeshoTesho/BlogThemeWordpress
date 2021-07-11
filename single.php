<?php get_header();?>


<!-- Serviços -->




<div class="container p-5">
	<div class="row">
		<div class="col">
			<?php
			if(have_posts()):while(have_posts()) : the_post();
				?>
				<div class="col">
					<div class="card">	
						<div class="card-body">
							<h5 class="card-title title-body"><a class="link-dark" href="<?php the_permalink();?>"><?php the_title();?></a></h5>
							<?php the_post_thumbnail('post-thumbnail',array('class'=>'img-fluid')); ?>
							<p class="card-text text-body"><?php the_content(); ?></p>
							<p class="card-text text-body"><small class="text-muted">Publicado em <?=get_the_date('d/m/y');?></small></p>
						</div>
					</div>
				</div>
			<?php endwhile;	?>
			<?php
			else: get_404_template(); endif;
			?>

		</div>

		<?php get_sidebar();?>	
	</div>

</div>




<?php get_footer(); ?>