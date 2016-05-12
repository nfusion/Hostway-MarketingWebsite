<section class="sectionBlock productsList mBottom">
	<div class="container">
		<?php if ( isset( $section['subtitle'] ) && ! empty( $section['subtitle'] ) ) : ?>
			<div class="row">
				<div class="col-md-9">
					<div class="sectionBlock-topSection">
						<?php $tag = ic_get_title_tag( $section ); ?>
						<<?php echo $tag;?> class="sectionBlock-subheading small">
							<?php echo esc_html( $section['subtitle'] ); ?>
						</<?php echo $tag;?>>
					</div>
				</div>
			</div>
		<?php endif; ?>

		<?php if ( isset( $section['products_list'] ) && ! empty( $section['products_list'] ) ) : ?>
			<div class="links-items row">
				<?php foreach ( $section['products_list'] AS $product ) : ?>
					<div class="links-item col-xs-4">
						<a href="<?php echo esc_url( $product['url'] ); ?>">
							<?php if ( isset( $product['image'] ) && ! empty( $product['image'] ) ) : ?>
								<div class="icon">
									<img src="<?php echo esc_url( $product['image'] ); ?>" alt=""/>
								</div>
							<?php endif; ?>

							<?php if ( isset( $product['title'] ) && ! empty( $product['title'] ) ) : ?>
								<div class="text"><?php echo esc_html( $product['title'] ); ?></div>
							<?php endif; ?>
						</a>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<?php if ( isset( $section['button_label'] ) && ! empty( $section['button_label'] ) ) : ?>
			<div class="sectionBlock-button">
				<a href="<?php echo esc_url( $section['button_url'] ); ?>" class="btn btn-primary">
					<?php echo esc_html( $section['button_label'] ); ?>
				</a>
			</div>
		<?php endif; ?>
	</div>
</section>