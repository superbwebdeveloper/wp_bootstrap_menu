<nav class="navbar navbar-expand-md navbar-dark"><a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"> <?php get_template_part('template-parts/header/site', 'branding'); ?> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <?php
        wp_nav_menu(array(
          'theme_location'  => 'menu-1',
          'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
          'container'       => '',
          'container_class' => '',
          'container_id'    => '',
          'menu_class'      => 'navbar-nav ml-auto top_ul',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
        ));
        ?>

         </div>
    </nav>
