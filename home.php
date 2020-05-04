<?php get_header(); ?>
<div class="container">
  <div class="row mt-expand pt-5">
    <div class="col-md-8">
      <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
          <div class="wave wave-white wave-white-bottom">
            <?php the_post_thumbnail('large', array('class' => 'img-fluid')) ?>
          </div>
          <small class="text-muted">Por <?php the_author() ?> | <?php the_time('F jS, Y') ?> | en <?php the_category(', ') ?> | <i class="far fa-comment"></i> <?php comments_popup_link('0 Comentarios', '1 Comentario', '% Comentarios'); ?></small>
          <h5><strong><?php the_title(); ?></strong></h5>
          <div class="entry mb-5">
            <?php the_excerpt(); ?>
            <a href="<?php echo get_post_permalink() ?>" class="btn btn-secondary">Leer más</a>
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

<?php get_footer(); ?>