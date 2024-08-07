<?php

  wp_nav_menu(
    [
      'theme_location' => 'position_top',
      'menu' => 'topnav',
      'container' => 'div',
      'container_class' => 'collapse navbar-collapse',
      'container_id' => 'navbar-top',
      'menu_class' => 'menu w-full md:flex md:items-center md:w-auto bg-white align-right',
      'items_wrap' => '<ul class="navbar-nav w-100 %2$s">%3$s</ul>',
    ]
  );
