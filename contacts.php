<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19.07.17
 * Time: 10:59
 * Template name: contacts
 */
?>
<?php get_header(); ?>
<?php while(have_posts()): the_post(); ?>
    <div class="container page_content">
        <h1 class="page_title"><?=get_the_title();?></h1>
        <div class="content_container contacts_content">
            <ul class="contacts_list">
            <?php if(get_theme_mod('avvocato_header_phone')) { ?><li><i class="fa fa-phone"></i><a href="<?php echo esc_url( 'phone:'. esc_attr(get_theme_mod('avvocato_header_phone'))); ?>"><?php echo esc_attr(get_theme_mod('avvocato_header_phone')); ?></a></li><?php } ?>
            <?php if(get_theme_mod('avvocato_header_email')) { ?><li><i class="fa fa-envelope"></i><a href="<?php echo esc_url( 'mailto:' . antispambot(sanitize_email(get_theme_mod('avvocato_header_email')))); ?>"><?php echo antispambot(sanitize_email(get_theme_mod('avvocato_header_email'))); ?></a></li><?php } ?>
            </ul>
        </div>
        <div class="content">
            <?php the_content(); ?>
        </div>
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>

