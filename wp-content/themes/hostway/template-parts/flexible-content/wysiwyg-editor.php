<?php $full_width = isset( $section['full_width'] ) && $section['full_width']; ?>
<section class="sectionBlock mBottom	<?php if ( $full_width ) {
	echo 'sectionBlock-imageFullWidth';
} ?>">

	<?php if ( $full_width ) : ?>

		<?php if ( isset( $section['content_title'] ) && ! empty( $section['content_title'] ) ) : ?>
			<?php $tag = ic_get_title_tag(); ?>
			<div class="sectionBlock-topSection">
				<<?php echo $tag;?> class="sectionBlock-subheading"><?php echo esc_html( $section['content_title'] ); ?></<?php echo $tag;?>>
			</div>
		<?php endif; ?>

		<?php echo do_shortcode( $section['content'] ); ?>
	<?php else : ?>
		<div class="container">

			<?php if ( isset( $section['content_title'] ) && ! empty( $section['content_title'] ) ) : ?>
				<?php $tag = ic_get_title_tag(); ?>
				<div class="sectionBlock-topSection">
					<<?php echo $tag;?> class="sectionBlock-subheading"><?php echo esc_html( $section['content_title'] ); ?></<?php echo $tag;?>>
				</div>
			<?php endif; ?>

			<div class="row">
				<div class="col-xs-12">
					<?php echo do_shortcode( $section['content'] ); ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
</section>