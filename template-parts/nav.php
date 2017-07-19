<nav class="main_nav container">
<?php if ( has_nav_menu( 'avvocato-menu' ) ) { ?>
        <?php wp_nav_menu( array('container'=> '', 'theme_location' => 'avvocato-menu', 'items_wrap1'  => '<ul class="menu-top">%3$s</ul>'  ) ); ?>
    <?php } else { ?>
        <?php wp_nav_menu(  array('container'=> '', 'theme_location' => 'avvocato-menu', 'menu_class'  => 'menu-top', 'items_wrap'  => '<ul class="menu-top">%3$s</ul>' ) ); ?>
    <?php } ?>
</nav>