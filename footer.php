


<footer>

  <div class="mt-5" style="left: ;">
    <div class="row text-header">
      <div class="col-md-4 col-sm-12 p-2 cor1 text-center " style="backdrop-filter:brightness(80%);">
        <p class="mt-3">Inscreva-se para receber</p>
        <p class="fs-2 fw-bold mb-3" style="margin-top: -25px;">Atualizações</p>
      </div>
      <div class="col-md-8 col-sm-12 p-5 cor1" style="filter:brightness(105%);">
      </div>
    </div>

</div>
  <div class=" w-100 p-5 cor1 " style="filter:brightness(130%);">
   <div class="row text-header">
    <div class="col-md-2 d-md-block d-none fundo">Menu</div>
    <div class="col-md-2 d-md-block d-none fundo">Menu</div>
    <div class="col-md-2 d-md-block d-none fundo">Menu</div>
    <div class="col-md-6 col-sm-12 d-flex justify-content-end">Empresa</div>
  </div>
  
</div>
<div class="row" style="filter:brightness(130%);">
  <div class="col-12 text-center cor1"> 
    <small>
      <a href="https://nicolasleitearaujo.online" class="link-light text-header">Desenvolvido por: Nicolas L. Araujo</a>
    </small>
  </div>
</div>
</footer>





<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function(){
    window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        //Quando fora topo
        //Adiciona
        //Fixa
        document.getElementById('navbar_top').classList.add('fixed-top');
        //Cor do fundo
        document.getElementById('navbar_top').classList.add('menu-fundo');
        //Define a cor
        document.getElementById('navbar_top_1').classList.add('navbar-light');
        //Cor do texto
        document.getElementById('navbar-title').classList.add('menu-title');

        //Remove
        //Cor
        document.getElementById('navbar_top_1').classList.remove('navbar-dark');
        //Cor
        document.getElementById('navbar_top').classList.remove('gradient');
        //Cor do texto
        document.getElementById('navbar-title').classList.remove('text-light');
        
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';


      } else {
        //Removendo
        //Fixa
        document.getElementById('navbar_top').classList.remove('fixed-top');
        //Fundo
        document.getElementById('navbar_top').classList.remove('menu-fundo');
        //Cor
        document.getElementById('navbar_top_1').classList.remove('navbar-light');
        //Cor do texto
        document.getElementById('navbar-title').classList.remove('menu-title');
        //Adicionando
        //Cor
        document.getElementById('navbar_top_1').classList.add('navbar-dark');
        //Fundo
        document.getElementById('navbar_top').classList.add('gradient');
        //Cor do texto
        document.getElementById('navbar-title').classList.add('text-light');
         // remove padding top from body
         document.body.style.paddingTop = '0';
       } 
     });
  }); 
</script>
</body>
</html>



