<?php get_header(); ?>
<div class="container">
  <div class="row mt-5">
    <div class="col-md-8">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_title(); ?></h1>
          <div class="entry">
            <?php the_content(); ?>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>