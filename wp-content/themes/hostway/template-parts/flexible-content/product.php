<section class="sectionBlock productInfo grayBg mBottom">
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

			<?php if ( isset( $section['buttons'] ) && ! empty( $section['buttons'] ) ) : ?>
				<div class="sectionBlock-buttons-group">
					<?php foreach ( $section['buttons'] AS $button ) : ?>
						<a href="<?php echo esc_url( $button['url'] ); ?>" class="btn btn-primary">
							<?php echo esc_html( $button['label'] ); ?>
						</a>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
		<div class="specifications">
			<?php if ( isset( $section['section_title'] ) && ! empty( $section['section_title'] ) ) : ?>
				<div class="specifications-heading">
					<?php echo esc_html( $section['section_title'] ); ?>
				</div>
			<?php endif; ?>

			<?php if ( isset( $section['products_list_product'], $section['product_table'] ) && ! empty( $section['products_list_product'] ) && ! empty( $section['product_table'] ) ) : ?>

				<?php $products_count = count( $section['products_list_product'] ); ?>

				<?php
				if ( $products_count == 1 ) {
					$products_list_product_class = 'col-xs-5';
					$product_subheading_class = 'col-xs-7';
					$product_table_class = 'oneItem';
				} elseif ( $products_count == 2 ) {
					$products_list_product_class = 'col-xs-3';
					$product_subheading_class = 'col-xs-6';
					$product_table_class = '';
				} elseif ( $products_count == 3 ) {
					$products_list_product_class = 'col-xs-2';
					$product_subheading_class = 'col-xs-5';
					$product_table_class = '';
				}
				?>

				<div class="table-wrapper">
					<div class="table-block <?php echo $product_table_class;?>">
						<div class="row table-row">
							<div class="col-mxs-12 <?php echo $product_subheading_class;?> table-col">
								<div
									class="head-subheading"><?php echo esc_html( $section['first_column_title'] ); ?></div>
							</div>

							<?php foreach ( $section['products_list_product'] AS $product ) : ?>
								<div class="col-mxs-4 <?php echo $products_list_product_class;?> table-col">
									<div class="head-icon">
										<img
											src="<?php echo esc_url( $product['icon'] ); ?>"
											alt=""/>
									</div>
									<div class="head-text">
										<?php echo $product['title']; ?>
									</div>
								</div>
							<?php endforeach; ?>
						</div>

						<?php foreach ( $section['product_table'] AS $product ) : ?>
							<div class="row table-row">
								<div class="col-mxs-12 col-xs-5 table-col">
									<div
										class="option-title <?php if ( isset( $product['option_subheading'] ) && $product['option_subheading'] ) {
											echo 'head-subheading';
										} ?>">
										<?php echo $product['option_title']; ?>
									</div>
								</div>

								<?php if($products_count >= 1) : ?>
								<div class="col-mxs-4 col-xs-2 table-col option">
									<div class="option-mask"></div>
									<div class="option-container">
										<?php if ( $product['type_column_1'] == 'yes' ) : ?>
											<img
												src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-option-yes.png"
												alt=""/>
										<?php elseif ( $product['type_column_1'] == 'custom_text' ) : ?>
											<?php echo $product['custom_text_column_1']; ?>
										<?php endif; ?>
									</div>
								</div>
								<?php endif;?>

								<?php if($products_count >= 2) : ?>
								<div class="col-mxs-4 col-xs-2 table-col option">
									<div class="option-mask"></div>
									<div class="option-container">
										<?php if ( $product['type_column_2'] == 'yes' ) : ?>
											<img
												src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-option-yes.png"
												alt=""/>
										<?php elseif ( $product['type_column_2'] == 'custom_text' ) : ?>
											<?php echo $product['custom_text_column_2']; ?>
										<?php endif; ?>
									</div>
								</div>
								<?php endif;?>

								<?php if($products_count >= 3) : ?>
								<div class="col-mxs-4 col-xs-2 table-col option">
									<div class="option-mask"></div>
									<div class="option-container">
										<?php if ( $product['type_column_3'] == 'yes' ) : ?>
											<img
												src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-option-yes.png"
												alt=""/>
										<?php elseif ( $product['type_column_3'] == 'custom_text' ) : ?>
											<?php echo $product['custom_text_column_3']; ?>
										<?php endif; ?>
									</div>
								</div>
								<?php endif;?>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>