<section class="sectionBlock succesStories mBottom">
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

		<?php if ( isset( $section['success_stories_items'] ) && ! empty( $section['success_stories_items'] ) ) : ?>
			<div class="succesStories-items">
				<div class="row">
					<?php foreach ( $section['success_stories_items'] AS $sc_item ) : ?>
						<div class="succesStories-itemWr col-sm-6">
							<div class="succesStories-item">
								<h2 class="succesStories-item-title">
									<?php echo esc_html( $sc_item['sc_title'] ); ?>
								</h2>

								<div class="succesStories-item-content">
									<?php if ( isset( $sc_item['sc_content'] ) && ! empty( $sc_item['sc_content'] ) ) : ?>
										<div class="succesStories-item-text">
											<?php echo $sc_item['sc_content']; ?>
										</div>
									<?php endif; ?>

									<?php if ( isset( $sc_item['sc_quote'] ) && ! empty( $sc_item['sc_quote'] ) ) : ?>
										<div class="succesStories-quote">
											<?php echo esc_html( $sc_item['sc_quote'] ); ?>
										</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>