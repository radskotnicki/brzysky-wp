<div>
<?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 6,
    'orderby' => 'rand',
  );
  $_posts = new WP_Query($args);
  ?>

  <?php if($_posts->have_posts()):?>

    <?php while($_posts->have_posts()): $_posts->the_post();?>

    <a class="posts__title" href="<?php the_permalink();?>">
    <?php the_title();?>
    </a>

    <?php endwhile;?>

<?php endif;?>
</div>