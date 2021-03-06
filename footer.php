<?php
/**
 * The template for displaying the footer.
 *
 *
 * @package Avvocato
 */
?>
		</div> <!--  END content  -->
		<footer id="footer" class="footer">
			<div class="footer-block">
				<div class="container">
					<div class="column-container widgets-container">
						<div class="column-3-12">
							<div class="gutter">
								<?php if ( is_active_sidebar('footer-widget-area-1') ) : ?>
									<?php dynamic_sidebar('footer-widget-area-1'); ?>
								<?php endif; ?>	
							</div>
						</div>
						<div class="column-3-12">
							<div class="gutter">
								<?php if ( is_active_sidebar('footer-widget-area-2') ) : ?>
									<?php dynamic_sidebar('footer-widget-area-2'); ?>
								<?php endif; ?>	
							</div>
						</div>
						<div class="column-3-12">
							<div class="gutter">
								<?php if ( is_active_sidebar('footer-widget-area-3') ) : ?>
									<?php dynamic_sidebar('footer-widget-area-3'); ?>
								<?php endif; ?>	
							</div>
						</div>
						<div class="column-3-12">
							<div class="gutter">
								<?php if ( is_active_sidebar('footer-widget-area-4') ) : ?>
									<?php dynamic_sidebar('footer-widget-area-4'); ?>
								<?php endif; ?>	
							</div>
						</div>
					</div>
				</div> <!--  END container  -->
			</div> <!--  END footer-block  -->
			<div class="copyright-block">
				<div class="container">
					<div class="column-container copyright-container">
						<div class="column-6-12 left">
							<div class="gutter">
								<p><?php echo  esc_html(get_theme_mod('avvocato_copyrights')); ?></p>
							</div>
						</div>
						<div class="column-6-12 right">
							<div class="gutter">
								<p><?php //do_action( 'avvocato_display_credits' ); ?></p>
							</div>
						</div>
					</div>
				</div> <!--  END container  -->
			</div> <!--  END copyright-block  -->
		</footer> <!--  END footer  -->
	</div> <!--  END wrapper  -->
<script src="<?=get_template_directory_uri();?>/assets/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=get_template_directory_uri();?>/assets/js/dist/scripts.js"></script>
<?php wp_footer(); ?>
</body>
</html>