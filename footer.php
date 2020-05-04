      <footer class="py-5">
        <div class="container">
          <div class="row mt-5">
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
              <div class="header-indicator text-primary" id="part-1">
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
              <input type="text" class="form-control w-75 text-center mx-auto mb-3" name="your-name" placeholder="Nombre y apellido" value="Andrés">
              <input type="email" class="form-control w-75 text-center mx-auto mb-3" name="your-email" placeholder="Email" value="email@gmail.com">
              <select class="form-control text-center w-75 mx-auto mb-3" name="objective">
                <option value="">Define tu objetivo</option>
                <option value="Bajar de peso" selected>Bajar de peso</option>
                <option value="Subir masa corporal">Subir masa corporal</option>
                <option value="Mejorar condición y rendimiento">Mejorar condición y rendimiento</option>
                <option value="Fitness">Fitness</option>
                <option value="Actividad física por prescripción médica">Actividad física por prescripción médica</option>
                <option value="No sé">No sé</option>
              </select>
              <div class="form-group row w-75 mx-auto">
                <label for="height" class="col-sm-3 col-form-label text-primary"><strong>Altura</strong></label>
                <div class="col-sm-6">
                  <input type="text" name="height" class="form-control" value="106">
                </div>
                <span class="col-sm-3 col-form-label text-white">cm</span>
              </div>
              <div class="form-group row w-75 mx-auto">
                <label for="weight" class="col-sm-3 col-form-label text-primary"><strong>Peso</strong></label>
                <div class="col-sm-6">
                  <input type="text" name="weight" class="form-control" value="179">
                </div>
                <span class="col-sm-3 col-form-label text-white">kg</span>
              </div>
            </form>
            <div class="mt-5 text-center text-primary" id="next-calculator"><i class="fas fa-chevron-right"></i></div>
          </div>
        </div>
      </div>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>