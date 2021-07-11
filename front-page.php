

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
			<div class="col-12 text-center display-3 mb-2 mt-2 title-body">
				Destaques
			</div>
		</div>
		<div class="row text-light ">
			
			<div class="col-lg-6 col-md-12 ">
				<a href="<?php echo get_permalink($a[0]); ?>">
					<div class=" position-relative">
						<?php 
						$first_post = get_post($a[0]);
						echo get_the_post_thumbnail($a[0],'',array('class'=>'m-1','style'=>'width:100%;height:410px;object-fit: cover;')); ?>
						<div class="display-6 text-light" style="position:absolute;bottom: 8px; right: 16px;"><?php echo get_the_title($a[0]);?></div>

					</div>
				</a>
			</div>
			<div class="col-lg-6 col-ms-12">
				<div class="row h-50">
					<div class="col-sm-12 col-md-6 col-lg-12  ">
						<a href="<?php echo get_permalink($a[1]); ?>">
							<div class=" position-relative">
								<?php 
								$secound_post = get_post($a[1]);

								echo get_the_post_thumbnail($a[1],'',array('class'=>'m-1','style'=>'width:100%;height:200px;object-fit: cover;')); ?>
								<div class="display-7 text-light" style="position:absolute;bottom: 8px; right: 16px;"><?php echo get_the_title($a[1]);?></div>

							</div>
						</a>

					</div>

					<div class="col-sm-12 col-md-6 col-lg-12   ">
						<a href="<?php echo get_permalink($a[2]); ?>">
							<div class=" position-relative">
								<?php 
								$third_post = get_the_ID($a[2]);
								echo get_the_post_thumbnail($a[2],'',array('class'=>'m-1','style'=>'width:100%;height:200px;object-fit: cover;')); ?>
								<div class="display-7 text-light" style="position:absolute;bottom: 8px; right: 16px;"><?php echo get_the_title($a[2]);?></div>

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
		<div class="col-12 text-center display-3 mb-5 title-body">
			Ultimas Postagens
		</div>
	</div>
	<div class="row">


		<?PHP 

		if(have_posts()):while(have_posts()) : the_post();
			?>



			<div class="col-3">
				<a  class="text-dark" style='text-decoration:none;' aria-current="true" href="<?php the_permalink();?>">
					<div class="card h-100">

						<div class="w-100" style='height:200px;'>
							<?php
							if(has_post_thumbnail()){
								the_post_thumbnail('post-thumbnail',array('class'=>'card-img-top img-fluid mw-100 mh-100'));
							}else{
								echo "<div class='w-100 h-100 card-img-top img-fluid gradient'></div>";
							}
							?>
						</div>


						<div class="card-body">
							<h5 class="card-title"><?php the_title();?></h5>
							<p class="card-text"><?php the_excerpt(); ?></p>
						</div>
						<div class="card-footer">
							<small class="text-muted">Publicado em <?=get_the_date('d/m/y');?></small>
						</div>
					</div>
				</a>
			</div>


		<?php endwhile;	?>


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



<?php get_footer(); ?>