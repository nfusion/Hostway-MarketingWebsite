<section class="sectionBlock products">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
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
			</div>
		</div>

		<?php if ( isset( $section['products_array'] ) && ! empty( $section['products_array'] ) ) : ?>
			<div class="products-items sliderWrapper">
				<?php foreach ( $section['products_array'] AS $product ) : ?>
					<div class="products-item slick-slide">
						<?php if ( isset( $product['icon'] ) && ! empty( $product['icon'] ) ) : ?>
							<div class="icon">
								<img src="<?php echo esc_url( $product['icon'] ); ?>" alt=""/>
							</div>
						<?php endif; ?>

						<?php if ( isset( $product['title'] ) && ! empty( $product['title'] ) ) : ?>
							<div class="title"><?php echo esc_html( $product['title'] ); ?></div>
						<?php endif; ?>

						<?php if ( isset( $product['title'] ) && ! empty( $product['title'] ) ) : ?>
							<div class="text">
								<?php echo $product['content']; ?>
							</div>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>