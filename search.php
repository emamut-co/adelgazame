<?php get_header(); ?>

<section class="wave wave-gray pb-5">
  <div class="container">
    <div class="row mt-expand py-5">
      <div class="col-md-8">
        <?php if (have_posts()) : ?>
          <h3 class="mb-5"><?php printf( __( 'Resultados de la búsqueda de: "%s"', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
          <?php while (have_posts()) : the_post();
            get_template_part('template-parts/blog-section');
          endwhile; ?>
        <?php else: ?>
          <h3 class="mb-5"><?php printf( __( 'No hay resultados para: "%s"', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
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