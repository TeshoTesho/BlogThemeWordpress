<?php get_header();?>
<div class="container p-5">
	<div class="row">
		<div class="col-md-8 col-sm-12">

			<?php 
			if(is_search()):
				$total_results = $wp_query->found_posts;

				echo "<h4 class='mb-3'>". sprintf(__("%s resultado(s) para '%s'",'Otima Ideia;'),$total_results,get_search_query()) ."</h4>";
				?>

				<div class="row row-cols-1 row-cols-md-2 g-4">

					<?PHP 

					if(have_posts()):while(have_posts()) : the_post();
						?>







						<div class="col-6">
							<a  class="text-dark" style='text-decoration:none;' aria-current="true" href="<?php the_permalink();?>">
								<div class="card  h-100">
									<div class="row g-0 h-100">
										<div class="col-md-1 h-100">
											<div style="width:10px;height: 100%; " class="rounded-start d-none d-md-block cor2" ></div>
											<div style="width:100%;height: 10px; " class="rounded-top d-block d-sm-block d-md-none cor2" ></div>
										</div>
										<div class="col-md-10">
											<div class="card-body">
												<h5 class="card-title"><?php the_title();?></h5>
												<p class="card-text"><?php the_excerpt(); ?></p>

												<small class="text-muted">Publicado em <?=get_the_date('d/m/y');?></small>
											</div>
										</div>
									</div>

								</div>
							</a>
						</div>


					<?php endwhile;	?>


					<?php
					else: get_404_template(); endif;
					?>
				</div>
				<?php
				else: get_404_template(); endif;

				?>


			</div>

			<?php get_sidebar();?>	
		</div>
	</div>

	<?php get_footer(); ?>