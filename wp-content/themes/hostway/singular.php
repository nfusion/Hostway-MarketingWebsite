<?php the_post(); ?>
<?php get_header(); ?>

<!-- Top banner -->
<section class="sectionBlock topBanner"
         style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/top_banner_bg-emaillanding.jpg');"></section>

<section class="sectionBlock mBottom">
	<div class="container">
		<div class="sectionBlock-topSection">
			<h2 class="sectionBlock-subheading"><?php the_title() ?></h2>
		</div>

		<div class="row">
			<div class="col-mxs-12">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
