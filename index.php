<?php get_header();?>

<div>
<?php
if ( have_posts() ) {
  ?>
  <p>
  <?php
    while ( have_posts() ) : the_post();
    the_title();
    endwhile;
  ?>
  </p>
<?php
}
?>
</div>



<?php get_footer();?>
