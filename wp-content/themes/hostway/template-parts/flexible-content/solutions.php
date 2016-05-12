<section class="sectionBlock solutions">
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

		<?php if ( isset( $section['solutions'] ) && ! empty( $section['solutions'] ) ) : ?>
			<div class="solutions-items">
				<?php $i = 0; ?>
				<?php echo "<div class='row'>"; ?>
					<?php foreach ( $section['solutions'] AS $solution ) : ?>
						<?php $i++; ?>
						<div class="solutions-itemWr col-sm-6">
							<div class="solutions-item">
								<div class="solutions-item-title">
									<?php echo esc_html( $solution['title'] ); ?>
								</div>

								<?php if ( isset( $solution['icon'] ) && ! empty( $solution['icon'] ) ) : ?>
									<div class="solutions-item-icon">
										<img src="<?php echo esc_url( $solution['icon'] ); ?>" alt=""/>
									</div>
								<?php endif; ?>


								<div class="solutions-item-content">
									<?php if ( isset( $solution['content'] ) && ! empty( $solution['content'] ) ) : ?>
										<div class="solutions-item-text">
											<p>
												<?php echo esc_html( $solution['content'] ); ?>
											</p>
										</div>
									<?php endif; ?>

									<div class="solutions-item-bottom">
										<?php if ( isset( $solution['content'] ) && ! empty( $solution['content'] ) ) : ?>
											<div class="solutions-item-bottom-more">
												<a href="<?php echo esc_url( $solution['url'] ); ?>"
												   class="base-link ttUpercase">
													<?php echo esc_html( $solution['label'] ); ?>
												</a>
											</div>
										<?php endif; ?>

										<?php if ( isset( $solution['icons'] ) && ! empty( $solution['icons'] ) ) : ?>
											<div class="solutions-item-bottom-icons">
												<ul>
													<?php foreach ( $solution['icons'] AS $icon ) : ?>
														<li>
															<img src="<?php echo esc_url( $icon['url'] ); ?>" alt=""/>
														</li>
													<?php endforeach; ?>
												</ul>
											</div>
										<?php endif; ?>
									</div>

								</div>
							</div>
						</div>
						<?php
							if($i % 2 == 0) { 
						        echo "</div><div class='row'>";
						        $i = 0 ;
						    }
						?>
					<?php endforeach; ?>
					<?php echo "</div>"; ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>