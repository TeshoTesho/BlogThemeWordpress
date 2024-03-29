<?php get_header();?>
<?php 
$my_args = array(
	'post_type' => 'post',
	'posts_per_page' => 3,
	'category_name' =>'Destaque'
);
$my_query = new WP_query($my_args);
if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();
	$a[] = get_the_ID();
endwhile;
endif;
if(@count($a)>=3){
	?>
	<!--Start Main-->
	<div class="position-relative overflow-hidden text-center">
		<div class="container">
			<div class="row">
				<div class="col-6 offset-3 text-center display-3 mb-2 mt-5 title-body">
					Destaques
					<div class="mt-2 w-100 cor2 rounded" style="height: 5px;"></div>
				</div>
			</div>
			<div class="row text-light mt-2 ">
				<div class="col-lg-6 col-md-12 mt-2 ">
					<a href="<?php echo get_permalink($a[0]); ?>">
						<div class=" position-relative text-end" >
							<div class="cor1" style="filter:brightness(80%);">
								<?php 
								$first_post = get_post($a[0]);
								echo get_the_post_thumbnail($a[0],'',array('class'=>'','style'=>'width:100%;height:410px;object-fit: cover;opacity:0.5'));
								?>
							</div>
							<div class="display-6 text-light text-break" style="position:absolute;bottom: 8px; right: 16px;"><?php echo get_the_title($a[0]);?></div>
						</div>
					</a>
				</div>
				<div class="col-lg-6 col-ms-12">
					<div class="row h-50">
						<div class="col-sm-12 col-md-6 col-lg-12  mt-2">
							<a href="<?php echo get_permalink($a[1]); ?>">
								<div class=" position-relative text-end">
									<div class="cor1" style="filter:brightness(75%);">
										<?php 
										$secound_post = get_post($a[1]);

										echo get_the_post_thumbnail($a[1],'',array('class'=>'','style'=>'width:100%;height:200px;object-fit: cover;opacity:0.5')); 
										?>
									</div>
									<div class="display-6 text-light shadow col-10 text-break" style="position:absolute;bottom: 8px; right: 16px;"><?php echo get_the_title($a[1]);?></div>

								</div>
							</a>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-12 mt-2  ">
							<a href="<?php echo get_permalink($a[2]); ?>">
								<div class=" position-relative text-end">
									<div class="cor1" style="filter:brightness(75%);">
										<?php 
										$third_post = get_the_ID($a[2]);
										echo get_the_post_thumbnail($a[2],'',array('class'=>'','style'=>'width:100%;height:200px;object-fit: cover;opacity:0.5')); 
										?>
									</div>
									<div class="display-6 text-light col-10 text-break" style="position:absolute;bottom: 8px; right: 16px;"><?php echo get_the_title($a[2]);?></div>

								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
wp_reset_query();
?>

<!-- Serviços -->
<div class="container mt-5">
	<div class="row">
		<div class="col-6 offset-3 text-center display-3 mb-5 title-body">
			Ultimas Postagens
			<div class="mt-2 w-100 cor2 rounded" style="height: 5px;"></div>
		</div>
	</div>
	<div class="row">
		<?PHP 
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
</div>
<div class="container">
	<div class="row">
		<div class="col-12 d-flex justify-content-between">
			<?php previous_posts_link('Mais Novos'); ?> 
			<?php next_posts_link('Mais Antigos'); ?>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col"></div>
		<?php //get_sidebar();?>	
	</div>
</div>
<?php get_footer(); ?>