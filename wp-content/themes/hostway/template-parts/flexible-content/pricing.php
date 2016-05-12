<section class="sectionBlock mBottom">
	<div class="container">
		<div class="sectionBlock-topSection">
			<?php if ( isset( $section['title'] ) && ! empty( $section['title'] ) ) : ?>
			<?php $tag = 'h2'; ?>
				<<?php echo $tag;?> class="sectionBlock-heading">
					<?php echo esc_html( $section['title'] ); ?>
				</<?php echo $tag;?>>
			<?php endif; ?>

			<?php if ( isset( $section['subtitle'] ) && ! empty( $section['subtitle'] ) ) : ?>
				<?php $tag = ic_get_title_tag(); ?>
				<<?php echo $tag;?> class="sectionBlock-subheading">
					<?php echo esc_html( $section['subtitle'] ); ?>
				</<?php echo $tag;?>>
			<?php endif; ?>

			<?php if ( isset( $section['description'] ) && ! empty( $section['description'] ) ) : ?>
				<?php echo $section['description']; ?>
			<?php endif; ?>
		</div>
		<?php if ( isset( $section['prices'] ) && ! empty( $section['prices'] ) ) : ?>
			<div class="pricing-items row">
				<?php foreach ( $section['prices'] AS $price ) : ?>
					<div class="pricing-item col-mxs-12 col-xs-4">
						<div class="head"><?php echo esc_html( $price['title'] ); ?></div>
						<div class="body">
							<div class="pricing">
								starting at
								<div class="price">
									<?php if ( isset( $price['currency'] ) && ! empty( $price['currency'] ) ) : ?>
										<sup><?php echo esc_html( $price['currency'] ); ?></sup><?php endif; ?><?php if ( isset( $price['price'] ) && ! empty( $price['price'] ) ) : ?><?php echo esc_html( $price['price'] ); ?><?php endif; ?><?php if ( isset( $price['after'] ) && ! empty( $price['after'] ) ) : ?>
										<span
											class="small"><?php echo esc_html( $price['after'] ); ?></span><?php endif; ?>
								</div>
							</div>

							<?php if ( isset( $price['button_label'] ) && ! empty( $price['button_label'] ) ) : ?>
								<div class="button">
									<a href="<?php echo esc_url( $price['button_url'] ); ?>" class="btn btn-primary">
										<?php echo esc_html( $price['button_label'] ); ?>
									</a>
								</div>
							<?php endif; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<?php if ( isset( $section['bundles_list'] ) && ! empty( $section['bundles_list'] ) ) : ?>
			<div class="sectionBlock-topSection">
				<h2 class="sectionBlock-subheading small"><?php echo esc_html( $section['bundles_title'] ); ?></h2>

				<p>
					<?php echo esc_html( $section['bundles_description'] ); ?>
				</p>
			</div>

			<div class="bundles-items sliderWrapper">
				<?php foreach ( $section['bundles_list'] AS $bundle ) : ?>
					<div class="bundles-item slick-slide">
						<?php if ( isset( $bundle['title'] ) && ! empty( $bundle['title'] ) ) : ?>
							<div class="title"><?php echo esc_html( $bundle['title'] ); ?></div>
						<?php endif; ?>

						<?php if ( isset( $bundle['content'] ) && ! empty( $bundle['content'] ) ) : ?>
							<div class="text">
								<?php echo $bundle['content']; ?>
							</div>
						<?php endif; ?>

						<?php if ( isset( $bundle['icon'] ) && ! empty( $bundle['icon'] ) ) : ?>
							<div class="icon">
								<img src="<?php echo esc_url( $bundle['icon'] ); ?>" alt=""/>
							</div>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>