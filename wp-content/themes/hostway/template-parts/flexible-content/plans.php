<section class="sectionBlock plans">
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
						<?php $tag = ic_get_title_tag( $section ); ?>
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
		<div class="plans-items row">
			<div class="plans-item first col-sm-3 hidden-xs">
				<?php if ( isset( $section['table_title'] ) && ! empty( $section['table_title'] ) ) : ?>
					<div class="head">
						<div class="head-inner">
							<?php echo esc_html( $section['table_title'] ); ?>
						</div>
					</div>
				<?php endif; ?>
				<div class="body">
					<?php foreach ( $section['options'] AS $option ) : ?>
						<div class="item <?php echo sanitize_title( $option['option_title'] ); ?>">
							<div class="item-inner">
								<?php echo $option['option_title']; ?>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>

			<div class="col-sm-9">
				<div class="row">
					<?php
					$plans_count = count( $section['plans'] );

					if ( $plans_count == 1 ) {
						$class_count = 'col-sm-12';
					} elseif ( $plans_count == 2 ) {
						$class_count = 'col-sm-6';
					} else {
						$class_count = 'col-sm-4';
					}

					foreach ( $section['plans'] AS $plan ) : ?>
						<div class="plans-item <?php echo $class_count; ?>">
							<div class="head">
								<div class="head-inner">
									<?php echo $plan['plan_title']; ?>

									<?php if ( isset( $plan['plan_order_url'] ) && ! empty( $plan['plan_order_url'] ) ) : ?>
										<div class="head-button">
											<a href="<?php echo esc_url( $plan['plan_order_url'] ); ?>" class="btn btn-small">
												<?php echo esc_html( $plan['plan_order_label'] ); ?>
											</a>
										</div>
									<?php endif; ?>
								</div>
							</div>
							<div class="body">
								<?php foreach ( $plan['plan_options'] AS $plan_option ) : $class = isset( $plan_option['option_class'] ) ? $plan_option['option_class'] : ''; ?>
									<div class="item <?php echo esc_attr( $class ); ?>">
										<div class="item-inner">
											<?php echo $plan_option['option_value']; ?>
										</div>
									</div>
								<?php endforeach; ?>
							</div>

							<?php if ( isset( $plan['plan_order_url'] ) && ! empty( $plan['plan_order_url'] ) ) : ?>
								<div class="button">
									<a href="<?php echo esc_url( $plan['plan_order_url'] ); ?>" class="btn btn-primary">
										<?php echo esc_html( $plan['plan_order_label'] ); ?>
									</a>
								</div>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				</div>
			</div>	
		</div>
	</div>
</section>