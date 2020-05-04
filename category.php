<?php get_header(); ?>

<section class="wave wave-gray pb-5">
  <div class="container">
    <div class="row mt-expand py-5">
      <div class="col-md-8">
        <?php if (have_posts()) : ?>
          <h3 class="mb-5">Categoría: <?php echo single_cat_title( '', false ); ?></h3>
          <?php while (have_posts()) : the_post();
            get_template_part('template-parts/blog-section');
          endwhile; ?>
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