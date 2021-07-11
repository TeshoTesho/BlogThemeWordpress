<?php get_header();?>


<div style="width: 100%; height: 100%;position: fixed;" class="gradient"></div>

  <div class="position-relative overflow-hidden text-center pt-5 gradient">

    <div class="col-md-10 p-lg-5 mx-auto my-5">
      <p><i class="fas fa-exclamation-triangle text-white fa-5x"></i></p>
      <h1 class="display-4 fw-normal text-white"> <?php _e( 'Opa! Alguem se perdeu!!!', 'your-theme' ); ?></h1>
      
      <p class="lead fw-normal text-white text-justify"><u><?php _e( 'Esta pagina não foi encontrada. Basta clicar no botão abaixo que eu te levo para o início.', 'your-theme' ); ?></u></p>
      <a class="btn btn-outline-light btn-lg  " href="<?php echo home_url('/')?>"><strong>Voltar ao Site.</strong></a>

        <?php //get_search_form(); ?>
    </div>
    

</div>






<?php get_footer(); ?>