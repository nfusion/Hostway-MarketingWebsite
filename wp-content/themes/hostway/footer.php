<?php get_template_part( 'template-parts/flexible-content/questions' ); ?>
</section>
<!-- End content layout -->

<!-- Start footer layout -->
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="footer-menus row">
					<?php dynamic_sidebar( 'bottom_menus' ); ?>
				</div>
			</div>
			<div class="col-md-4">
				<div class="footer-socialNetworks">
					<?php dynamic_sidebar( 'bottom_social_networks' ); ?>
				</div>
			</div>
		</div>

		<div class="row text-right">
			<?php dynamic_sidebar( 'copyright' ); ?>
		</div>
	</div>
</footer>
<!-- End footer layout -->
<?php wp_footer(); ?>
</body>
</html>