<section class="sectionBlock whiteText infastructure mBottom">
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

		<?php if ( isset( $section['infrastructure_items'] ) && ! empty( $section['infrastructure_items'] ) ) : ?>
			<div class="infastructure-maps sliderWrapper">

				<?php $i = 1;
				foreach ( $section['infrastructure_items'] AS $infrastructure ) :

					$lat = $infrastructure['location']['lat'];
					$lng = $infrastructure['location']['lng'];

					?>
					<div class="map-item slick-slide">
						<a href="#">
							<div class="map-item-text">
								<div class="title"><?php echo esc_html( $infrastructure['title'] ); ?></div>

								<?php if ( isset( $infrastructure['content'] ) && ! empty( $infrastructure['content'] ) ) : ?>
									<div class="text">
										<?php echo $infrastructure['content']; ?>
									</div>
								<?php endif; ?>
							</div>
							<div class="map-item-map">
								<div class="infastructure_map" id="infastructure_map_<?php echo $i ++; ?>"
								     data-lat="<?php echo esc_attr( $lat ); ?>"
								     data-lng="<?php echo esc_attr( $lng ); ?>"
								     data-zoom="12"></div>
							</div>
						</a>
					</div>
				<?php endforeach; ?>

			</div>
		<?php endif; ?>
	</div>
</section>