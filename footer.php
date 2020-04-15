      <footer class="py-5">
        <div class="container">
          <div class="row mt-5">
            <div class="col-md-4">
              <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="" class="img-fluid">
              <p class="mt-2">
                <a href="#" class="text-blue"><i class="fab fa-facebook fa-2x mr-2"></i></a>
                <a href="#" class="text-blue"><i class="fab fa-instagram fa-2x"></i></a>
              </p>
              <p class="mt-5 text-white">
                <a href="#" class="text-white">Términos y condiciones</a> | <a href="#" class="text-white">Política de privacidad</a>
              </p>
            </div>
            <div class="col-md-4">
              <div class="media">
                <i class="fas fa-map-marker-alt fa-2x text-blue mr-3"></i>
                <div class="media-body text-white">
                  <p class="mt-0">Edificio CITIMED Av. Mariana de Jesús y Nuño Valderrama. Piso 5, consultorio 552
                  Quito, Ecuador</p>
                </div>
              </div>
              <div class="media">
                <i class="fas fa-phone fa-2x text-blue mr-3"></i>
                <div class="media-body text-white">
                  <h5 class="text-rose mb-0"><strong>1800 ADELGAZA</strong></h5>
                  <h5 class="ml-5 pl-2"><strong>2 335 4292</strong></h5>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <p class="text-white"><strong>SUSCRÍBETE A NUESTRO BOLETÍN </strong></p>
              <input type="email" name="" class="form-control" placeholder="Email">
              <button class="btn btn-primary mt-2 px-4 rounded-pill">SUSCRIBIRME</button>
              <p class="mt-5 text-white">
                Copyright <i class="far fa-copyright"></i> 2020 | Development by <a href="#" class="text-white"><strong>Gestión</strong></a>
              </p>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <div class="modal fade" id="schedule-modal" tabindex="-1" role="dialog" aria-labelledby="schedule-modalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border border-secondary rounded">
          <div class="modal-header border-bottom-0">
            <h5 class="modal-title caveat text-secondary ml-auto" id="schedule-modalLabel">Te llamaremos</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php echo do_shortcode('[contact-form-7 id="6" title="Principal"]'); ?>
          </div>
        </div>
      </div>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>