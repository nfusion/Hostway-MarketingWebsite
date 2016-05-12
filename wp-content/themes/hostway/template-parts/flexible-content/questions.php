<?php if ( is_404() || is_search()) {
	$section = get_defined_section( array( 'section_defined' => 'questions' ) );
} ?>

<?php if ( isset( $section ) && is_array( $section ) ) : ?>
	<section class="sectionBlock questions">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-7">
					<div class="sectionBlock-topSection">
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
			<div class="question-section">
				<div class="row">
					<div class="question-section-left col-sm-8 col-md-7">
						<form method="POST">
							<div class="question-form">
								<div class="question-form-top">
									<div class="row">
										<div class="col-xs-6">
											<input type="text" class="form-control" id="firstname"
											       placeholder="First Name"/>
										</div>
										<div class="col-xs-6">
											<input type="text" class="form-control" id="lastname"
											       placeholder="Last Name"/>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<input type="email" class="form-control" id="email" placeholder="Email"/>
										</div>
										<div class="col-xs-6">
											<input type="text" class="form-control" id="phone" placeholder="Phone #"/>
										</div>
									</div>
								</div>
								<div class="question-form-bottom">
									<div class="checkbox">
										<label>
											<input type="checkbox">
											<span class="chech-icon"></span>
											Yes! Duis autem vel eum iriure dolor in hendrerit.
										</label>
									</div>
									<button type="submit" class="btn btn-primary">Lorem ipsum</button>
								</div>

							</div>
						</form>
					</div>
					<div class="question-section-right col-sm-4 col-md-offset-1">
						<div class="questions-rightSection">
							<?php dynamic_sidebar( 'top_left' ); ?>

							<?php if ( isset( $section['questions_label'] ) && ! empty( $section['questions_label'] ) ) : ?>
								<div class="chat">
									<a href="<?php echo esc_url( $section['questions_url'] ); ?>"
									   class="base-link big-link">
										<?php echo $section['questions_label']; ?>
									</a>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>