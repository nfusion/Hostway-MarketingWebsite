<?php
$bg_image = isset( $section['background_color'] ) && ! empty( $section['background_image'] ) ? $section['background_image'] : '';
$bg_color = isset( $section['background_color'] ) && ! empty( $section['background_color'] ) ? $section['background_color'] : '#fff';
?>

<section class="sectionBlock mBottom <?php if ( ! empty( $bg_image ) ) {
	echo 'centerBanner whiteText';
} ?>"
         style="background-color: <?php echo esc_attr( $bg_color ); ?>;background-image: url('<?php echo esc_url( $bg_image ); ?>');">
	<div class="container">

		<?php if ( isset( $section['title'] ) && ! empty( $section['title'] ) ) : ?>
			<?php $tag = ic_get_title_tag( $section ); ?>
			<<?php echo $tag;?> class="sectionBlock-topSection">
				<<?php echo $tag;?> class="sectionBlock-subheading"><?php echo esc_html( $section['title'] ); ?></<?php echo $tag;?>>
			</<?php echo $tag;?>>
		<?php endif; ?>

		<div class="row">
			<div class="col-mxs-12 col-xs-7">
				<div class="sectionBlock-text">
					<?php echo do_shortcode( $section['text_left'] ); ?>
				</div>
			</div>
			<div class="col-mxs-12 col-xs-5">
				<?php echo do_shortcode( $section['text_right'] ); ?>
			</div>
		</div>
	</div>
</section>