<?php
/**
 * The header for the SafeNet theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <div class="site-branding">
      <?php
      if (has_custom_logo()) {
        the_custom_logo();
      } else {
      ?>
        <h1>SafeNet</h1>
      <?php } ?>
      <p>Empowering Women & Supporting Orphans</p>
    </div>
    <nav class="primary-nav">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_id'        => 'primary-menu',
        'container'      => false,
        'items_wrap'     => '<ul>%3$s</ul>',
      ));
      ?>
    </nav>
  </header>
