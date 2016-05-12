<section class="sectionBlock useCases mBottom">
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
		<div class="row">
			<?php if ( isset( $section['content'] ) && ! empty( $section['content'] ) ) : ?>
				<div class="col-md-5">
					<div class="sectionBlock-topSection">
						<?php echo $section['content']; ?>
					</div>
				</div>
			<?php endif; ?>

			<?php if ( isset( $section['image'] ) && ! empty( $section['image'] ) ) : ?>
				<div class="col-md-7">
					<div class="sectionBlock-image text-center">
						<img class="img-responsive"
						     src="<?php echo esc_url( $section['image'] ); ?>" alt=""/>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>