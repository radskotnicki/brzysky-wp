<?php
/**
 * Single post template
 * 
 * @package brzysky-theme
 */
 ?>

<?php get_header('post');?>
<div class="wrapper">
  <div class="content">
<section class="single-post flex-jc-c">
  <div class="single-post__menu flex main-padding">
    <!-- POST TITLE -->
    <h2 class="single-post__menu__title">
      <?php the_title(); ?>
    </h2>
    <!-- BACK TO HOME -->
    <a href="javascript:history.back()"
    class="single-post__menu__back-to-home">zamknij</a>
  </div>
  <!-- PLAYER -->
  <div class="player flex flex-jc-c">
    <div class="player__wrapper main-padding">
      <div class="plyr__video-embed" id="player">
        <iframe
          data-poster="<?php the_post_thumbnail_url();?>"
          src="<?php the_field('video_link'); ?>?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
          allowfullscreen
        >
        </iframe>
      </div>
    </div>
  </div>
<!-- WAVE LINE -->
  <img id="wave-line" src="<?php echo get_template_directory_uri(); ?>/images/wave-line-lg-dark.svg" class="about__content__line main-padding" alt="">

</section>
<!-- CONTACT -->
<?php get_template_part('includes/section', 'contact');?>
</div>
</div>
<?php get_footer();?>
