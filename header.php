<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Avvocato
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="stylesheet" href="<?=get_template_directory_uri();?>/assets/css/common.css">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="pagePreloader" class="preloader">
    <div class="spinner">
        <img src="<?=get_template_directory_uri();?>/assets/images/826.gif" />
    </div>
</div>
<div id="contactModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Оставить заявку</h4>
            </div>
            <div class="modal-body">
                <?= do_shortcode('[contact-form-7 id="42" title="Contact form 1"]'); ?>
            </div>
        </div>
    </div>
</div>
	<div id="wrapper" class="wrapper">
		<header id="header" class="header">

			<div class="header-block">
				<!--<div class="container">
					<div class="gutter clearfix">
                        <?php if ( has_custom_logo() ) : ?>
                            <?php avvocato_the_custom_logo(); ?>
                        <?php else : ?>
                            <h1 class="logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
                        <?php endif; ?>
                        <div class="tour_title">
                            <span class="white">
                                Tour Sale <br />
                            Турагенство
                            </span>

                        </div>
						<nav class="menu-top-container">

                            <ul class="menu-top">
                                <li><a href="#contactModal" data-toggle="modal">Оставить заявку</a></li>
                            </ul>
						</nav>

					</div>
				</div> -->
                <div class="container">
                    <div class="column-container">
                        <div class="column-3-12 right_line">
                            <?php avvocato_the_custom_logo(); ?>
                        </div>
                        <div class="column-3-12">
                            <div class="tour_title">
                                <h3 class="white">Tour Sale <br />
                                    Турагентсво</h3>
                                <p class="white">ИНН 780243434306</p>
                                <p class="white">ОГРНИП 31678470274662</p>
                            </div>
                        </div>
                        <div class="column-3-12">
                            <div class="header_adress">
                                <ul>
                                    <?php if(get_theme_mod('avvocato_header_phone')) { ?><li><i class="fa fa-phone"></i><a href="<?php echo esc_url( 'phone:'. esc_attr(get_theme_mod('avvocato_header_phone'))); ?>"><?php echo esc_attr(get_theme_mod('avvocato_header_phone')); ?></a></li><?php } ?>
                                    <?php if(get_theme_mod('avvocato_header_email')) { ?><li><i class="fa fa-envelope"></i><a href="<?php echo esc_url( 'mailto:' . antispambot(sanitize_email(get_theme_mod('avvocato_header_email')))); ?>"><?php echo antispambot(sanitize_email(get_theme_mod('avvocato_header_email'))); ?></a></li><?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="column-3-12">
                            <nav class="menu-top-container">

                                <ul class="menu-top">
                                    <li><a href="#contactModal" data-toggle="modal" class="button md">Оставить заявку</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!--  END container  -->
			</div> <!--  END header-block  -->
		</header>
        <!--  END header  -->
        <div class="main_nav">
            <?php include ('template-parts/nav.php'); ?>
        </div>
		<div id="content" class="content">