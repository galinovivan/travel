<?php get_header(); ?>
<?php while(have_posts()): the_post(); ?>
    <div class="container page_content">
        <h1 class="page_title"><?=get_the_title();?></h1>
        <div class="content_container">
    <?php the_content(); ?>
            <?php if(get_theme_mod('avvocato_header_phone')) { ?><li><i class="fa fa-phone"></i><a href="<?php echo esc_url( 'phone:'. esc_attr(get_theme_mod('avvocato_header_phone'))); ?>"><?php echo esc_attr(get_theme_mod('avvocato_header_phone')); ?></a></li><?php } ?>
            <?php if(get_theme_mod('avvocato_header_email')) { ?><li><i class="fa fa-envelope"></i><a href="<?php echo esc_url( 'mailto:' . antispambot(sanitize_email(get_theme_mod('avvocato_header_email')))); ?>"><?php echo antispambot(sanitize_email(get_theme_mod('avvocato_header_email'))); ?></a></li><?php } ?>
        </div>
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>
