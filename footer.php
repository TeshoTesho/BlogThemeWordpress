
    

    <footer>
        <?php wp_footer(); ?>

    </footer>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        document.getElementById('navbar_top').classList.add('fixed-top');
        document.getElementById('navbar_top').classList.remove('gradient');
        document.getElementById('navbar_top').classList.add('bg-light');
        document.getElementById('navbar_top_1').classList.add('navbar-light');
        document.getElementById('navbar_top_1').classList.remove('navbar-dark');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('navbar_top').classList.remove('fixed-top');
        document.getElementById('navbar_top').classList.remove('bg-light');
        document.getElementById('navbar_top_1').classList.remove('navbar-light');
        document.getElementById('navbar_top_1').classList.add('navbar-dark');
        document.getElementById('navbar_top').classList.add('gradient');
         // remove padding top from body
        document.body.style.paddingTop = '0';
      } 
  });
}); 
    </script>
</body>
</html>



