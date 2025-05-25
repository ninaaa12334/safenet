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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="main-header">
  <div class="header-content">
    <!-- Logo/Branding -->
    <div class="site-branding">
      <?php if (has_custom_logo()) : ?>
        <div class="custom-logo">
          <?php the_custom_logo(); ?>
        </div>
      <?php else : ?>
        <div class="logo-wrapper">
          <div class="logo-icon">
            <span>🛡️</span>
          </div>
          <div class="logo-text">
            <h1 class="site-title">SafeNet</h1>
            <p class="site-tagline">Empowering Women & Supporting Children</p>
          </div>
        </div>
      <?php endif; ?>
    </div>

    <!-- Desktop Navigation -->
    <nav class="primary-nav desktop-nav" role="navigation" aria-label="Main navigation">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_id'        => 'primary-menu',
        'container'      => false,
        'menu_class'     => 'nav-menu',
        'fallback_cb'    => 'safenet_fallback_menu',
      ));
      ?>
      
      <!-- Action Buttons -->
      <div class="nav-actions">
        <a href="<?php echo site_url('/emergency'); ?>" class="button button-emergency nav-button">
          <span class="button-icon">🚨</span>
          <span class="button-text">Emergency</span>
        </a>
        <a href="<?php echo site_url('/donate'); ?>" class="button button-secondary nav-button">
          <span class="button-icon">💝</span>
          <span class="button-text">Donate</span>
        </a>
      </div>
    </nav>

    <!-- Mobile Menu Toggle -->
    <button class="mobile-menu-toggle" aria-label="Toggle mobile menu" aria-expanded="false">
      <span class="hamburger-line"></span>
      <span class="hamburger-line"></span>
      <span class="hamburger-line"></span>
    </button>
  </div>

  <!-- Mobile Navigation -->
  <nav class="mobile-nav" role="navigation" aria-label="Mobile navigation">
    <div class="mobile-nav-content">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_id'        => 'mobile-menu',
        'container'      => false,
        'menu_class'     => 'mobile-nav-menu',
        'fallback_cb'    => 'safenet_fallback_menu',
      ));
      ?>
      
      <!-- Mobile Action Buttons -->
      <div class="mobile-nav-actions">
        <a href="<?php echo site_url('/services'); ?>" class="button button-emergency button-large">
          <span class="button-icon">🚨</span>
          Emergency Help
        </a>
        <a href="<?php echo site_url('/donate'); ?>" class="button button-secondary button-large">
          <span class="button-icon">💝</span>
          Make a Donation
        </a>
      </div>
    </div>
  </nav>
</header>

<?php
// Fallback menu function
function safenet_fallback_menu() {
  echo '<ul class="nav-menu">';
  echo '<li><a href="' . home_url('/') . '">🏠 Home</a></li>';
  echo '<li><a href="' . site_url('/about') . '">ℹ️ About</a></li>';
  echo '<li><a href="' . site_url('/services') . '">🤝 Services</a></li>';
  echo '<li><a href="' . site_url('/orphanage') . '">👶 Orphanage</a></li>';
  echo '<li><a href="' . site_url('/women-rights') . '">⚖️ Women\'s Rights</a></li>';
  echo '<li><a href="' . site_url('/education') . '">📚 Education</a></li>';
  echo '</ul>';
}
?>
