<section class="sectionBlock whiteText help">
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
		<?php if ( isset( $section['help_items'] ) && ! empty( $section['help_items'] ) ) : ?>
			<div class="links-items row">
				<?php foreach ( $section['help_items'] AS $help_item ) : ?>
					<div class="links-item col-xs-4">
						<a href="<?php echo esc_url( $help_item['help_url'] ); ?>">
							<div class="icon">
								<img src="<?php echo esc_url( $help_item['help_icon'] ); ?>" alt=""/>
							</div>
							<?php if ( isset( $help_item['help_title'] ) && ! empty( $help_item['help_title'] ) ) : ?>
								<div class="text">
									<?php echo esc_html( $help_item['help_title'] ); ?>
								</div>
							<?php endif; ?>
						</a>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>