<?php get_header(); ?>

<section class="wave wave-gray pb-5">
  <div class="container">
    <div class="row mt-expand py-5">
      <div class="col-md-8">
        <?php if (have_posts()) :
          while (have_posts()) : the_post();
            get_template_part('template-parts/blog-section');
          endwhile;

          emamut_numeric_posts_nav();
        endif; ?>
      </div>
      <div class="col-md-4 pt-5 mt-5">
        <?php if ( is_active_sidebar( 'custom-side-bar' ) ) : ?>
          <?php dynamic_sidebar( 'custom-side-bar' ); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>