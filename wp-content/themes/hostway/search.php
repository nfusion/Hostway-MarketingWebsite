<?php global $wp_query;
get_header(); ?>

	<!-- Search -->
	<section class="sectionBlock searchResult">
		<div class="container">
			<div class="sectionBlock-topSection">
				<div class="row">
					<div class="searchResultTop-left col-xs-6">
						<h3 class="sectionBlock-subheading">Search results</h3>
					</div>

					<div class="searchResultTop-right col-xs-6">
						<div class="sectionBlock-search">
							<div class="form">
								<?php get_search_form(); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="searchResultTop-left col-xs-6">
						<div class="sectionBlock-searchResult-result">
							<span class="count"><?php echo $wp_query->found_posts; ?></span> results for <span class="words"><?php echo ic_get_search_words_url(); ?></span>
						</div>
					</div>
					<div class="searchResultTop-right col-xs-6">
						<div class="sectionBlock-searchResult-title text-right">
							Showing results for 
							<span class="words">
								<a href="<?php echo add_query_arg( 's', get_search_query(), home_url() ); ?>">
									<?php the_search_query(); ?>
								</a>
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="search-content">
				<?php if ( have_posts() ) : ?>
					<div class="search-list">
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="search-item">
								<div <?php post_class(); ?>>
									<div class="title"><?php the_title(); ?></div>
									<div class="link"><a href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a></div>
									<div class="text"><?php the_excerpt(); ?></div>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
					<div class="search-pagination">
						<?php if ( $wp_query->max_num_pages > 1 ): ?>
							<?php $args = array(
								'prev_text'          => __('prev'),
								'next_text'          => __('next'),
							); ?>
							<?php echo paginate_links($args); ?>
						<?php endif; ?>
					</div>
				<?php else : ?>
					<div class="search-notFound">
						<div class="row">
							<div class="col-xs-12 col-sm-11 col-sm-offset-1">
								<div class="title">No Results for <span class="words"><?php the_search_query(); ?></span></div>
								<div class="text">
									<p><strong>Search tips</strong></p>
									<ul>
										<li>Reduce the number of words</li>
										<li>Try alternate spellings</li>
										<li>Try different search terms</li>
										<li>Check your spelling</li>
									</ul>
								</div>
								<div class="searchUorWebArchive">
									<div class="subTitle">Or search our WebArchive</div>
									<div class="searchUorWebArchive-form">
										<form action="<?php echo esc_url( home_url( 'search-results' ) ); ?>" method="get">
											<div class="searchUorWebArchive-input"><input type="text" name="q" placeholder="e.g. Hosting Solutions" ></div>
											<div class="searchUorWebArchive-button"><input type="submit" name="search" value=""/></div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>

<?php get_footer();
