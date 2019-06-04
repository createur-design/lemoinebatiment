			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="row align-center">
					<div class="small-12 medium-4 columns text-center">
						<img
							src="<?php echo get_template_directory_uri(); ?>/img/lemoine-batiment-logo-small.jpg" alt="Lemoine Bâtiment Logo"
							class="logo-img smallLogo logoFooter"
						>
						<p>Spécialiste de la <b>Charpente</b> et de la <b>Couverture</b>.</p>
					</div>
				</div>
				<div class="row">
					<div class="small-12 medium-3 columns">
						<div class="sidebar-widget">
							<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
						</div>
					</div>
					<div class="small-12 medium-3 columns">
						<div class="sidebar-widget">
							<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
						</div>
					</div>
					<div class="small-12 medium-3 medium-offset-3 columns">
						<div class="sidebar-widget">
							<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-3')) ?>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="small-12 columns">
						<hr>
						<!-- copyright -->
						<p class="copyright text-right">
							&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
							<a href="https://www.createur-design.fr/" onclick="window.open(this.href); return false;" title="createur-design"><img src="<?php echo get_template_directory_uri(); ?>/img/footer/logo_createur_design_mail.png" alt="logo createur-design"></a>
						</p>
						<!-- /copyright -->

					</div>
				</div>				

			</footer>
			<!-- /footer -->

		<?php wp_footer(); ?>

		<!-- analytics -->

	</body>
</html>
