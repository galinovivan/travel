<?php get_header(); ?>
<?php while(have_posts()): the_post(); ?>
    <div class="container page_content">
        <h1 class="page_title"><?=get_the_title();?></h1>
        <div class="content">
            <?php the_content(); ?>
        </div>
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>