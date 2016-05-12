<section class="sectionBlock caseStudy mBottom">
	<div class="container">

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

			<div class="row">
				<div class="col-md-7">
					<?php echo $section['content']; ?>

					<?php if ( isset( $section['url_label'] ) && ! empty( $section['url_label'] ) ) : ?>
						<div class="sectionBlock-button">
							<a href="<?php echo esc_url( $section['url'] ); ?>" class="btn btn-primary">
								<?php echo esc_html( $section['url_label'] ); ?>
							</a>
						</div>
					<?php endif; ?>
				</div>
				<div class="col-md-4">
					<div class="sectionBlock-info">
						<?php if ( isset( $section['block_info_image'] ) && ! empty( $section['block_info_image'] ) ) : ?>
							<div class="sectionBlock-info-img">
								<img src="<?php echo esc_url( $section['block_info_image'] ); ?>" alt=""/>
							</div>
						<?php endif; ?>

						<div class="sectionBlock-info-delivered">
							<?php if ( isset( $section['info_title'] ) && ! empty( $section['info_title'] ) ) : ?>
								<div class="title">
									<?php echo esc_html( $section['info_title'] ); ?>
								</div>
							<?php endif; ?>

							<?php if ( isset( $section['delivered_items'] ) && ! empty( $section['delivered_items'] ) ) : ?>
								<div class="items row">
									<?php foreach ( $section['delivered_items'] AS $item ) : ?>
										<div class="item col-xs-3">
											<?php if ( isset( $item['title'] ) && ! empty( $item['title'] ) ) : ?>
												<div class="icon">
													<img
														src="<?php echo esc_url( $item['image'] ); ?>"
														alt=""/>
												</div>
											<?php endif; ?>

											<?php if ( isset( $item['title'] ) && ! empty( $item['title'] ) ) : ?>
												<div class="text">
													<?php echo esc_html( $item['title'] ); ?>
												</div>
											<?php endif; ?>
										</div>
									<?php endforeach; ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php if ( isset( $section['comments'] ) && ! empty( $section['comments'] ) ) : ?>
			<?php foreach ( $section['comments'] AS $comment ) : ?>
				<div class="blockComment">
					<div class="text">
						<?php echo esc_html( $comment['comment'] ); ?>
					</div>
					<div class="author">-<?php echo esc_html( $comment['author'] ); ?></div>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>
</section>