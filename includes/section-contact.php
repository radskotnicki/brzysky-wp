<?php 
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

  <?php endif;?>