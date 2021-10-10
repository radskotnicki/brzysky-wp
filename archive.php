<?php get_header('categories');?>

<!-- POST TITLES -->
<section class="posts main-padding">

<?php
if ( have_posts() ) {
  ?>
  <?php
    while ( have_posts() ) : the_post();
    ?>
    <a class="posts__title" href="<?php the_permalink();?>">

    <?php the_title();?>
    </a>
    <?php endwhile;?>
<?php
}?>

</section>

<!-- PLAYER -->
<section class="player flex flex-jc-c main-padding">
  <div class="player__wrapper">
    <div class="plyr__video-embed" id="player">
      <iframe
        controls
        crossorigin
        playsinline
        data-poster="<?php the_post_thumbnail_url();?>"
        src="<?php the_field('video_link', 22); ?>?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
        allowfullscreen
      ></iframe>
    </div>
   </div>
</section>


<div>
<?php

    // display random post from specific categories

    $args = array(
        'post_type' => 'post',
        'cat' => '2, 6, 17, 38', // category IDs
        'orderby' => 'rand',
        'posts_per_page' => 1, // get 1 post only
    );

    $my_query = new WP_Query( $args );

    // the loop
    if ( $my_query->have_posts() ) :

        while ( $my_query->have_posts() ) : $my_query->the_post();

            // display article
            get_template_part( 'content', 'featured' );

        endwhile;

    endif;

    wp_reset_postdata();

?>
</div>

<!-- ABOUT SECTION -->

<?php get_template_part('includes/section', 'about');?>


<!-- CONTACT SECTION -->


<section class="contact flex flex-jc-sb main-padding">
<?php 
$contact_links = get_field('contact_links', 22);
if( $contact_links ) : ?>
  <!-- CONTACT - MAIL -->
  <div class="contact__mail" data-clipboard-text="<?php echo $contact_links['e_mail'];?>">
    <p class="btn contact__mail--tippy">Napisz maila!</p>
  </div>
  <!-- CONTACT - SOCIAL MEDIA LINKS -->
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
<?php endif; ?>
</section>

<?php get_footer();?>