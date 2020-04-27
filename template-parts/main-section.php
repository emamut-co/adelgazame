<section class="wave-dark-bottom">
  <div class="row">
    <div class="col main-section" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post_id) ) ?>)">
      <div class="side-container">
        <?php echo $sideContent; ?>
        <div class="contact-form-container p-4 mt-4">
          <h3 class="text-center form-title text-blue mb-4">¡Te llamaremos!</h3>
          <?php echo do_shortcode('[contact-form-7 id="6" title="Principal"]'); ?>
        </div>
      </div>
    </div>
  </div>
</section>