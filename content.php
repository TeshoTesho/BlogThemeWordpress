<?php 

if(is_single()):?>

	<div class="col">
		<div class="card">	
			<div class="card-body">
				<h2 class="card-title title-body"><a class="link-dark display-2	" href="<?php the_permalink();?>"><?php the_title();?></a></h2><p class="card-text text-body"><small class="text-muted">Publicado em <?=get_the_date('d/m/y');?></small></p>
				
				<?php the_post_thumbnail('post-thumbnail',array('class'=>'img-fluid')); ?>
				<p class="card-text text-body"><?php the_content(); ?></p>
			</div>
		</div>
	</div>
<?php else: ?>

	<div class="col-sm-12 col-md-6 col-xl-3  mt-2">
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



	<?php endif;?>