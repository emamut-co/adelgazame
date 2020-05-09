      <footer class="py-5">
        <div class="container">
          <div class="row mt-5 d-none d-md-flex">
            <div class="col-md-4">
              <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="" class="img-fluid">
              <p class="mt-2">
                <a href="<?php echo get_option('facebook') ?>" class="text-blue"><i class="fab fa-facebook fa-2x mr-2"></i></a>
                <a href="<?php echo get_option('instagram') ?>" class="text-blue"><i class="fab fa-instagram fa-2x"></i></a>
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
              <?php echo do_shortcode('[contact-form-7 id="113" title="Suscribe"]') ?>
              <p class="mt-5 text-white">
                Copyright <i class="far fa-copyright"></i> 2020 | Development by <a href="#" class="text-white"><strong>Gestión</strong></a>
              </p>
            </div>
          </div>
          <div class="row mt-5 d-flex d-md-none">
            <div class="col-12 text-center">
              <p class="mt-2">
                <a href="<?php echo get_option('facebook') ?>" class="text-blue"><i class="fab fa-facebook fa-3x mr-2"></i></a>
                <a href="<?php echo get_option('instagram') ?>" class="text-blue"><i class="fab fa-instagram fa-3x"></i></a>
              </p>
              <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="" class="img-fluid">
            </div>
            <div class="col-12 text-center mt-5">
              <i class="fas fa-map-marker-alt fa-2x text-blue mr-3"></i>
              <p class="mt-3 text-white">Edificio CITIMED Av. Mariana de Jesús y Nuño Valderrama. Piso 5, consultorio 552
              Quito, Ecuador</p>
            </div>
            <div class="col-12 text-center mt-5">
              <i class="fas fa-phone fa-2x text-blue mr-3"></i>
              <h5 class="text-rose mb-0"><strong>1800 ADELGAZA</strong></h5>
              <h5 class="text-white ml-5 pl-2"><strong>2 335 4292</strong></h5>
            </div>
            <div class="col-12 text-center mt-5">
              <p class="text-white"><strong>SUSCRÍBETE A NUESTRO BOLETÍN </strong></p>
              <?php echo do_shortcode('[contact-form-7 id="113" title="Suscribe"]') ?>
              <p class="mt-3 text-white">
                <a href="#" class="text-white">Términos y condiciones</a> <br> <a href="#" class="text-white">Política de privacidad</a>
              </p>
              <p class="mt-2 text-white">
                Copyright <i class="far fa-copyright"></i> 2020 <br> Development by <a href="#" class="text-white"><strong>Gestión</strong></a>
              </p>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <!-- Schedule Modal -->
    <div class="modal fade" id="schedule-modal" tabindex="-1" role="dialog" aria-labelledby="schedule-modalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <h2 class="subtitle text-primary text-center mb-5">Agenda <span class="caveat text-white">ahora</span> tu cita</h2>
        <div class="modal-content border border-secondary contact-form-container px-4">
          <div class="modal-header border-bottom-0">
            <h5 class="modal-title caveat text-secondary ml-auto" id="schedule-modalLabel">Te llamaremos</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><img src="<?php echo get_template_directory_uri() ?>/img/close-icon.png" alt="" class="img-fluid"></span>
            </button>
          </div>
          <div class="modal-body">
            <?php echo do_shortcode('[contact-form-7 id="6" title="Principal"]'); ?>
          </div>
        </div>
      </div>
    </div>

    <!-- Calculator Modal -->
    <div class="modal fade" id="calculator-modal" tabindex="-1" role="dialog" aria-labelledby="calculator-modalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <h2 class="text-white text-center mb-5">
          <img src="<?php echo get_template_directory_uri() ?>/img/bascula.png" alt="" class="mr-3">
          Calculadora de <strong>IMC</strong>
        </h2>
        <div class="modal-content border border-secondary contact-form-container p-4">
          <div class="modal-header border-bottom-0">
              <div class="header-indicator text-primary active" id="part-1">
                <div class="rounded-circle text-center numeral">1</div> <span>Llena tus datos</span>
              </div>
              <div class="header-indicator text-primary" id="part-2">
                <div class="rounded-circle text-center numeral">2</div> <span>Me identifico con</span>
              </div>
              <div class="header-indicator text-primary" id="part-3">
                <div class="rounded-circle text-center numeral">3</div> <span>Conoce tu valoración</span>
              </div>
            </ul>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><img src="<?php echo get_template_directory_uri() ?>/img/close-icon.png" alt="" class="img-fluid"></span>
            </button>
          </div>
          <div class="modal-body">
            <form id="calculator-form">
              <div class="alert alert-warning d-none" role="alert">
                <i class="fas fa-exclamation-circle"></i> Diligencie completamente el formulario
              </div>
              <input type="text" class="form-control w-75 text-center mx-auto mb-3" name="your-name" placeholder="Nombre y apellido">
              <input type="email" class="form-control w-75 text-center mx-auto mb-3" name="your-email" placeholder="Email">
              <select class="form-control text-center w-75 mx-auto mb-3" name="objective">
                <option value="">Define tu objetivo</option>
                <option value="Bajar de peso">Bajar de peso</option>
                <option value="Subir masa corporal">Subir masa corporal</option>
                <option value="Mejorar condición y rendimiento">Mejorar condición y rendimiento</option>
                <option value="Fitness">Fitness</option>
                <option value="Actividad física por prescripción médica">Actividad física por prescripción médica</option>
                <option value="No sé">No sé</option>
              </select>
              <div class="form-group row w-75 mx-auto">
                <label for="height" class="col-sm-3 col-form-label text-primary"><strong>Altura</strong></label>
                <div class="col-sm-6">
                  <input type="number" name="height" class="form-control">
                </div>
                <span class="col-sm-3 col-form-label text-white">cm</span>
              </div>
              <div class="form-group row w-75 mx-auto">
                <label for="weight" class="col-sm-3 col-form-label text-primary"><strong>Peso</strong></label>
                <div class="col-sm-6">
                  <input type="number" name="weight" class="form-control">
                </div>
                <span class="col-sm-3 col-form-label text-white">kg</span>
              </div>
            </form>
            <div id="calculator-genre" class="w-75 mx-auto d-none">
              <strong class="text-primary mr-3">Género</strong>
              <div class="form-check form-check-inline text-white">
                <input class="form-check-input" type="radio" name="genre-selector" id="genre-selector-male" value="male">
                <label class="form-check-label" for="genre-selector-male">masculino</label>
              </div>
              <div class="form-check form-check-inline text-white">
                <input class="form-check-input" type="radio" name="genre-selector" id="genre-selector-female" value="female" checked>
                <label class="form-check-label" for="genre-selector-female">femenino</label>
              </div>

              <img src="<?php echo get_template_directory_uri() ?>/img/selector-female.png" class="img-fluid mt-4" id="img-genre-female" alt="">
              <img src="<?php echo get_template_directory_uri() ?>/img/selector-male.png" class="img-fluid mt-4 d-none" id="img-genre-male" alt="">

              <div class="form-check form-check-inline shape-selector mt-4">
                <input class="form-check-input" type="radio" name="shape-selector" value="1">
              </div>
              <div class="form-check form-check-inline shape-selector">
                <input class="form-check-input" type="radio" name="shape-selector" value="2">
              </div>
              <div class="form-check form-check-inline shape-selector">
                <input class="form-check-input" type="radio" name="shape-selector" value="3">
              </div>
              <div class="form-check form-check-inline shape-selector">
                <input class="form-check-input" type="radio" name="shape-selector" value="4">
              </div>
            </div>
            <div id="calculator-result" class="w-75 mx-auto text-center d-none">
              <div class="alert alert-success d-none" role="alert">
                <i class="fas fa-check-circle"></i> Correo enviado exitosamente
              </div>
              <p class="text-white mb-5">Tu índice de masa corporal es:</p>
              <p id="calculator-imc-value"></p>
              <p id="calculator-imc-message"></p>
            </div>
            <div class="mt-5 text-center text-primary" id="next-calculator">
              <i class="fas fa-chevron-right"></i>
            </div>
            <button class="btn btn-secondary py-2 px-3 mx-auto d-none" id="send-result">
              <img src="<?php echo get_template_directory_uri() ?>/img/schedule-icon.png" alt="" class="img-fluid"> <strong class="ml-2"> Agenda tu cita</strong>
            </button>
          </div>
        </div>
      </div>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>