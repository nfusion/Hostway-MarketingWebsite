<?php get_header(); ?>

	<!-- Top banner -->
	<section class="sectionBlock notFound">
		<div class="container">
			<div class="sectionBlock-topSection">
				<h3 class="sectionBlock-heading">Oh no!</h3>
				<div class="row">
					<div class="col-sm-4 col-sm-push-8 text-center">
						<div class="notFound-image">
							<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/images/404.png" alt="" />
						</div>
					</div>
					<div class="col-sm-8 col-sm-pull-4">
						<h1 class="sectionBlock-subheading">We can’t find what you are searching for</h1>
						<p>
							Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.
						</p>
						<div class="sectionBlock-search">
							<div class="title">Or try searching again:</div>
							<div class="form">
								<?php get_search_form(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
