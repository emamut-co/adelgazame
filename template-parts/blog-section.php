<?php if ( has_post_thumbnail() ): ?>
  <div class="wave wave-white wave-white-bottom">
    <?php the_post_thumbnail('large', array('class' => 'img-fluid')) ?>
  </div>
<?php endif ?>
<small class="text-muted">
  Por <?php the_author() ?> | <?php echo date_i18n('F j, Y') ?> | en <?php the_category(', ') ?> | <i class="far fa-comment"></i> <?php comments_popup_link('0 Comentarios', '1 Comentario', '% Comentarios'); ?>
</small>
<h5><strong><?php the_title(); ?></strong></h5>
<div class="entry blog mb-5">
  <?php the_excerpt(); ?>
  <a href="<?php echo get_post_permalink() ?>" class="btn btn-secondary">Leer más</a>
</div>