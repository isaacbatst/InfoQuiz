  <!-- Footer -->
  <footer class="footer text-center bg-verde">


    <div class="container">
      <div class="row">
        <div class="col-md-3 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Localização</h4>
          <p class="lead mb-0 text-justify footer-endereco">    Rua Brusque, 2926, 
            Conjunto Santa Catarina, 
              Potengi | Natal-RN | CEP: 59112-490 </p>
        </div>
        <div class="col-md-3 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Redes Sociais</h4>
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                <i class="fab fa-fw fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://github.com/isaacbatst/InfoQuiz">
                <i class="fab fa-fw fa-github"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://trello.com/b/btaIo3R5/desenvolvimento-do-site">
                <i class="fab fa-fw fa-trello"></i>
              </a>
            </li>
           
          </ul>
        </div>
        <div class="col-md-6">
          <h4 class="text-uppercase mb-4">Sobre o SuperQuiz</h4>
          <p  class="text-justify"  >
O Superquiz é uma plataforma educacional gratuita de avaliação e treinamento nas diversas áreas de conhecimento em informática voltado para a resolução de questões e a fixação do conteúdo estudado. Resolver questões é uma das formas mais eficientes para testar seus conhecimentos e se preparar para concursos públicos.
 
          </p>
        </div>
      </div>
    </div>
  </footer>

  <div class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; Your SuperQuiz 2019</small>
    </div>
  </div>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="<?= base_url()?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?= base_url()?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?= base_url()?>/assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="<?= base_url()?>/assets/js/jqBootstrapValidation.js"></script>
  <script src="<?= base_url()?>/assets/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?= base_url()?>/assets/js/freelancer.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#enviarquestionario').on('click',function(){
        $('input[name=alternativa_correta_r]').each(function(){
          var $this = $(this);
          $('input[name=resposta_alternativa]').each(function(){
            if($(this).hasClass($this.attr('id'))){

              if($(this).attr("value")==$this.attr("value")){
                console.log($(this).attr("value"));
                $(this).parent(".form-check").addClass("alert alert-success");
              }
              
            }
            
          });
        });
      });
        $("#select-categoria-lancamento option").each(function() {
            var $this = $(this);
            if ($this.data("tipo") == tipo) $this.show();
            else $this.hide();
        });
      });
  </script>

</body>

</html>

