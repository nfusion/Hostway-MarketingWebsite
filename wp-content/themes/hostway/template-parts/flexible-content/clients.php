<section class="sectionBlock clients mBottom">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="sectionBlock-topSection">
					<?php if ( isset( $section['subtitle'] ) && ! empty( $section['subtitle'] ) ) : ?>
						<?php $tag = ic_get_title_tag( $section ); ?>
						<<?php echo $tag;?> class="sectionBlock-subheading small">
							<?php echo esc_html( $section['subtitle'] ); ?>
						</<?php echo $tag;?>>
					<?php endif; ?>

					<?php if ( isset( $section['description'] ) && ! empty( $section['description'] ) ) : ?>
						<?php echo $section['description']; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<?php if ( isset( $section['clients_items'] ) && ! empty( $section['clients_items'] ) ) : ?>
			<ul class="clients-items">
				<?php foreach ( $section['clients_items'] AS $c_item ) : ?>
					<li>
						<img src="<?php echo esc_url( $c_item['logo'] ); ?>" alt=""/>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>

		<?php if ( isset( $section['label'] ) && ! empty( $section['label'] ) ) : ?>
			<div class="sectionBlock-button-all">
				<a href="<?php echo esc_url( $section['url'] ); ?>" class="btn btn-primary">
					<?php echo esc_html( $section['label'] ); ?>
				</a>
			</div>
		<?php endif; ?>
	</div>
</section>