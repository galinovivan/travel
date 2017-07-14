<?php 
/**
 * 
 * @package Avvocato 
 */
?>
<?php if( get_theme_mod('avvocato_slider_content1') or get_theme_mod('avvocato_slider_content2')) { ?>
<div class="section section-carousel">		
	<div class="owl-carousel main-carousel">

	</div>
</div>

<?php }  ?>
<div class="coral_search">
    <div class="container">
        <div class="column-container">
            <h2 class="md_font-size">Здесь Поиск coral </h2>
        </div>
    </div>
</div>
<div class="trust_block">
    <div class="container">
        <div class="column-container">
            <div class="block_heading">
                <h2 class="md_font-size">Почему нам стоит доверять?</h2>
            </div>
        </div>
    </div>
</div>
<div class="section section-boxes">
	<div class="container">
		<div class="column-container boxes-container">

			<div class="column-4-12">
				<div class="gutter">
					<article class="article-box">
						<div class="article-icon">
							<a class="fa fa-users"></a>
						</div>
						<div class="article-text">
                            <div class="title"> <h2>Почему нам доверяют свой отпуск</h2></div>
					<div class="text">
									<p>Мы сотрудничаем только с проверенными тур операторами. Все они имеют аккредитацию в РОСТУРИЗМе.
                                Оформляя тур у нас вы застрахованы от не вылета. </p>
                    </div>
						</div>
					</article>
				</div>
			</div>			




			<div class="column-4-12">
				<div class="gutter">
					<article class="article-box">
						<div class="article-icon">
							<a class="fa fa-fire"></a>
						</div>
						<div class="article-text">
                            <div class="title"><h2>Горящие туры</h2></div>
                            <div class="text">
							<p>Мы гарантируем Самую низкую цену! За счет раннего бронирования или покупки настоящего
                                горящего тура.
                                Вы сэкономите до 85% на стоимости Вашей путевки. </p>
                            </div>
						</div>
					</article>
				</div>
			</div>			

			<div class="column-4-12">
				<div class="gutter">
					<article class="article-box">
						<div class="article-icon">
							<a class="fa fa-briefcase"></a>
						</div>
						<div class="article-text">
                            <div class="title">
							<h2>Как мы работаем?</h2>
                            </div>
                            <div class="text">
							<p>Наша база горящих предложений и выгодных ранних  бронирований обновляеться Ежедневно.
                                Наша задача предложить вам лучший отдых по минимальной цене. Юыстро и качественно
                                оформить все необходимые документы и отправить вас на отдых вашей мечты!</p>
						</div>
					</article>
				</div>
			</div>			


		</div>
        <div class="container">
            <div class="column-container">
                <div class="block_heading mar_bott_50">
                    <h2>Оставьте заявку прямо сейчас!</h2>
                </div>
                <?php get_template_part('form', 'contact');?>
            </div>
        </div>
        <div class="how_work mar_top_50 mar_bott_100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block_heading">
                            <h2 class="md_font-size">Как мы работаем</h2>
                        </div>
                    </div>
                </div>
                <div class="column-container">
                    <div class="column-4-12 right_arrow">
                        <div class="item">
                            <div class="icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="title">
                                <p>принимаем вашу заявку по телефону или online</p>
                            </div>
                        </div>
                    </div>
                    <div class="column-4-12 right_arrow">
                        <div class="item">
                            <div class="icon">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <div class="title">
                                <p>обрабатываем в запрос в течении  1 часа</p>
                            </div>
                        </div>
                    </div>
                    <div class="column-4-12">
                        <div class="item">
                            <div class="icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="title">
                                <p>Отправляем Результат на почту и перезваниваем</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="best_seller mar_top_50 mar_bott_100">
            <div class="container">
                <div class="coulumn_container">
                    <div class="block_heading">
                        <h2>Лучшее предложение дня</h2>
                    </div>
                    <div class="best_photo">
                        <?php //echo wdi_feed(array('id'=>'1')); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-blog mar_bott_100">
            <div class="container">
                <div class="column-container blog-container">
                    <div class="column-12-12">
                        <div class="gutter">
                            <div class="inner-page-container">
                                <article class="single-post">
                                    <div class="article-text">
                                       <?php while (have_posts()): the_post(); ?>
                                        <?php the_content(); ?>
                                        <?php endwhile; ?>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--  ENd container  -->
        </div>
        <div class="best_seller mar_top_50">
            <div class="container">
                <div class="coulumn_container">
                    <div class="block_heading">
                        <h2>Отзывы</h2>
                    </div>
                    <div class="best_photo">
                        <?php //echo wdi_feed(array('id'=>'2')); ?>
                    </div>
                </div>
            </div>
        </div>
		<?php
		if( get_theme_mod('avvocato_info_box_text')) {
		$queryslider = new WP_query('page_id='.get_theme_mod('avvocato_info_box_text' ,true));
		while( $queryslider->have_posts() ) : $queryslider->the_post();
		?>
		<div class="gutter">
			<div class="table-download">
				<div class="table-row">
					<div class="table-cell column-9-12">
						<p><?php the_excerpt(); ?></p>
					</div>
					<div class="table-cell column-3-12">
						<a class="button-large" href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('avvocato_info_box_button_text',__( 'Contact Us', 'avvocato' ))); ?></a>
					</div>
				</div>
			</div>
		</div>		
		<?php endwhile; wp_reset_postdata(); ?>
		<?php } ?>

	</div> <!--  END container  -->
</div> <!--  END section-boxes  -->
<?php while (have_posts()) : the_post(); ?>  
 <!--  END section-blog  -->
    <!--
    <div class="contact_button">
        <button type="button" class="button_base button_contact" data-toggle="modal" data-target="#contactModal">Оставить заявку</button>
    </div>
    -->
<?php endwhile; ?>