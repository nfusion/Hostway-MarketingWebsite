<?php if ( isset( $instance['socials'] ) && ! empty( $instance['socials'] ) ) : ?>
	<ol>
		<?php foreach ( $instance['socials'] AS $social ) : ?>
			<li class="<?php echo esc_attr( $social['classes'] ); ?>">
				<a href="<?php echo esc_url( $social['url'] ); ?>"></a>
			</li>
		<?php endforeach; ?>
	</ol>
<?php endif;