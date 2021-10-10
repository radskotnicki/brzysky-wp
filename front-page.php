<?php
/**
 * Front page template
 * 
 * @package brzysky-theme
 */

 ?>

<?php get_header();?>

<section class="posts main-padding">

<?php get_template_part('includes/section', 'categories');?>
</section>
<section class="player flex flex-jc-c main-padding">
  <div class="player__wrapper">
    <div class="plyr__video-embed" id="player">
      <iframe
        loading="lazy"
        controls
        crossorigin
        playsinline
        data-poster="<?php the_post_thumbnail_url();?>"
        src="<?php the_field('video_link', 22); ?>?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
        allowfullscreen
        allowtransparency
        allow="autoplay"
      ></iframe>
    </div>
   </div>
</section>

<?php get_template_part('includes/section', 'about');?>

<?php get_template_part('includes/section', 'contact');?>

  <!-- <?php 
$contact_links = get_field('contact_links', 22);
if( $contact_links ) : ?>
  <section class="contact flex flex-jc-sb main-padding">
    <div class="contact__mail mail--tippy" data-clipboard-text="<?php echo $contact_links['e_mail'];?>">
      <p class="btn contact__mail--tippy">Napisz maila!</p>
    </div>

    <div class="contact__social">
      <ul>
        <li>
          <a href="<?php echo esc_url( $contact_links['social_link_1']['url'] ); ?>" rel="noopener">
            <?php echo esc_html( $contact_links['social_link_1']['title'] );?>
          </a>
        </li>
        <li>
          <a href="<?php echo esc_url( $contact_links['social_link_2']['url'] ); ?>" rel="noopener">
            <?php echo esc_html( $contact_links['social_link_2']['title'] );?>
          </a>
        </li>
        <li>
          <a href="<?php echo esc_url( $contact_links['social_link_3']['url'] ); ?>" rel="noopener">
            <?php echo esc_html( $contact_links['social_link_3']['title'] );?>
          </a>
        </li>
      </ul>
    </div>
  </section>

<?php endif; ?> -->

<?php get_footer();?>
