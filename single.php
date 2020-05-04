<?php get_header(); ?>

<section class="wave wave-gray pb-5">
  <div class="container">
    <div class="row mt-expand pt-5">
      <div class="col-md-8">
        <?php if (have_posts()) :
          while (have_posts()) : the_post(); ?>
            <div class="wave wave-white wave-white-bottom">
              <?php the_post_thumbnail('large', array('class' => 'img-fluid')) ?>
            </div>
            <small class="text-muted">Por <?php the_author() ?> | <?php the_time('F jS, Y') ?> | en <?php the_category(', ') ?> | <i class="far fa-comment"></i> <?php comments_popup_link('0 Comentarios', '1 Comentario', '% Comentarios'); ?></small>
            <h3><strong><?php the_title(); ?></strong></h3>
            <div class="entry mt-4">
              <?php the_content(); ?>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="col-md-4">
        <?php if ( is_active_sidebar( 'custom-side-bar' ) ) : ?>
          <?php dynamic_sidebar( 'custom-side-bar' ); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>