<nav class="menu-top-mob-container">
    <a class="icon-menu" href="#"><?php _e( 'Menu', 'avvocato' ); ?></a>
    <?php if ( has_nav_menu( 'avvocato-menu' ) ) { ?>
        <?php wp_nav_menu( array('container'=> '', 'theme_location' => 'avvocato-menu', 'items_wrap'  => '<ul class="menu-top-mob">%3$s</ul>'  ) ); ?>
    <?php } else { ?>
        <?php wp_nav_menu(  array('container'=> '', 'theme_location' => 'avvocato-menu', 'menu_class'  => 'menu-top-mob', 'items_wrap'  => '<ul class="menu-top-mob">%3$s</ul>' ) ); ?>
    <?php } ?>
</nav>