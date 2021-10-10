<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title();?></title>
  <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open();?>
<header class="header">
  <div class="header__logo flex flex-jc-c">
    <a href="/">
      <img src="<?php echo get_template_directory_uri(); ?>/images/brzysky-logo-png-lg.png" alt="">
      </a>
  </div>
  <nav class="flex flex-jc-c">
    <?php
      wp_nav_menu(
        array(
        'menu' => 'categories',
        )
      );
    ?>
  </nav>  
</header>
