<?php
$bg  = isset( $section['background_image'] ) && ! empty( $section['background_image'] ) ? $section['background_image'] : '';
?>
<section class="sectionBlock <?php if ( ! empty( $bg ) ) {
	echo 'topBanner whiteText';
} ?>"
         style="background-image: url('<?php echo esc_url( $bg ); ?>');">
	<div class="container">
		<div class="row">
			<?php if ( isset( $section['title'], $section['subtitle'], $section['description'] ) && ( ! empty( $section['title'] ) || ! empty( $section['subtitle'] ) || ! empty( $section['description'] ) ) ) : ?>

				<?php $width = isset( $section['circle_status'] ) && $section['circle_status'] ? 'col-sm-8' : 'col-sm-9'; ?>

				<div class="<?php echo $width; ?>">
					<div class="sectionBlock-topSection">
						<?php if ( isset( $section['title'] ) && ! empty( $section['title'] ) ) : ?>
							<h2 class="sectionBlock-heading">
								<?php echo esc_html( $section['title'] ); ?>
							</h2>
						<?php endif; ?>

						<?php if ( isset( $section['subtitle'] ) && ! empty( $section['subtitle'] ) ) : ?>
							<?php $tag = ic_get_title_tag( $section ); ?>
							<<?php echo $tag;?> class="sectionBlock-subheading">
								<?php echo esc_html( $section['subtitle'] ); ?>
							</<?php echo $tag;?>>
						<?php endif; ?>

						<div class="hidden-small">
							<?php if ( isset( $section['description'] ) && ! empty( $section['description'] ) ) : ?>
								<?php echo $section['description']; ?>
							<?php endif; ?>

							<?php if ( isset( $section['label'] ) && ! empty( $section['label'] ) ) : ?>
								<div class="sectionBlock-button">
									<a href="<?php echo esc_url( $section['url'] ); ?>" class="btn btn-primary">
										<?php echo esc_html( $section['label'] ); ?>
									</a>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<?php if ( isset( $section['circle_status'] ) && $section['circle_status'] ) : ?>
				<div class="hidden-small col-sm-4">
					<div class="circleBlock">
						<?php if ( isset( $section['circle_title'] ) && ! empty( $section['circle_title'] ) ) : ?>
							<h3 class="circleBlock-heading">
								<?php echo esc_html( $section['circle_title'] ); ?>
							</h3>
						<?php endif; ?>

						<?php if ( isset( $section['circle_subtitle'] ) && ! empty( $section['circle_subtitle'] ) ) : ?>
							<h4 class="circleBlock-subheading">
								<?php echo esc_html( $section['circle_subtitle'] ); ?>
							</h4>
						<?php endif; ?>

						<?php if ( isset( $section['circle_text'] ) && ! empty( $section['circle_text'] ) ) : ?>
							<p>
								<?php echo $section['circle_text']; ?>
							</p>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>
		</div>	
	</div>
</section>

<!-- For responsive -->
<section class="sectionBlock topBannerResponsive visible-small">
	<div class="container">
		<?php if ( isset( $section['description'] ) && ! empty( $section['description'] ) ) : ?>
			<?php echo $section['description']; ?>
		<?php endif; ?>

		<?php if ( isset( $section['label'] ) && ! empty( $section['label'] ) ) : ?>
			<div class="sectionBlock-button">
				<a href="<?php echo esc_url( $section['url'] ); ?>" class="btn btn-primary">
					<?php echo esc_html( $section['label'] ); ?>
				</a>
			</div>
		<?php endif; ?>
		<div class="circleBlock">
			<?php if ( isset( $section['circle_title'] ) && ! empty( $section['circle_title'] ) ) : ?>
				<h3 class="circleBlock-heading">
					<?php echo esc_html( $section['circle_title'] ); ?>
				</h3>
			<?php endif; ?>

			<?php if ( isset( $section['circle_subtitle'] ) && ! empty( $section['circle_subtitle'] ) ) : ?>
				<h4 class="circleBlock-subheading">
					<?php echo esc_html( $section['circle_subtitle'] ); ?>
				</h4>
			<?php endif; ?>

			<?php if ( isset( $section['circle_text'] ) && ! empty( $section['circle_text'] ) ) : ?>
				<p>
					<?php echo $section['circle_text']; ?>
				</p>
			<?php endif; ?>
		</div>
	</div>
</section>
