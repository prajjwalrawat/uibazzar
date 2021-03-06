<?php
/**
* The template for displaying archive pages
*
* Used to display archive-type pages if nothing more specific matches a query.
* For example, puts together date-based pages if no date.php file exists.
*
* If you'd like to further customize these archive views, you may create a
* new template file for each one. For example, tag.php (Tag archives),
* category.php (Category archives), author.php (Author archives), etc.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage Twenty_Sixteen
* @since Twenty Sixteen 1.0
*/
get_header(); ?>
<section class="mainWrapper">
	<div class="contentBlocker">
		<!-- Category Navigation Block -->
		<aside id="sidebar" itemscope itemtype="http://schema.org/WPSideBar">
			<div class="fixedSidebar hideOnMobile-catnavDesktopView">
				<div class="categoryNavsm fullWidth">
					<?php dynamic_sidebar( 'catnavsidebar' ); ?>
				</div>
			</div>
		</aside>
		<!-- Category Navigation Block Ends -->
		<!-- Posts -->
		<div class="mainBlockCards-Outer">
			<div class="container-fluid">
				<div class="row">
					<div class="centerLayout">
						<div class="col-md-12">
							<div class="breadcrumbs fullWidth" itemprop="breadcrumb">
								<?php
								if ( function_exists('yoast_breadcrumb') ) {
								yoast_breadcrumb('
								<span id="breadcrumbs">','</span>
								');
								}
								?>
							</div>
							<h1 class="catTitleLg" itemprop="headline"> <?php single_cat_title( '', true ); ?> </h1>
							<!-- Advertisment Banner Large -->
							<!-- <div class="largeAdvertismentBanner twoRadius fullWidth text-center">
								<?php #dynamic_sidebar( 'horizontal-banner' ); ?>
							</div> -->
							</div><!-- breadcrumbs -->
							<!-- breadcrumbs -->
							<!-- Product cards with sidebar nav -->
							<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>
							<!-- Post loop -->
							<article class="col-md-4 col-sm-6 hentry productCards-lgDesk" itemscope itemtype="http://schema.org/Article">
								<div class="productCard">
									<div class="thumbnail twoRadius">
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" itemprop="mainEntityOfPage">
											<div class="blogBlock">
												<div class="imgBox">
													<?php the_post_thumbnail('thumbnail-product'); ?>
													<div class="overlay">
														<p class="freebiePara" itemprop="description">
															<?php echo wp_trim_words( get_the_content(), 15, '...' ); ?>
														</p>
														<time class="datePublished" itemprop="datePublished">
														<?php the_time( get_option( 'date_format' ) ); ?>
														</time>
														<div itemscope itemprop="publisher" itemtype="http://schema.org/Organization" class="hideOrgzArticle">
															<div itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
																<img src="<?php echo get_template_directory_uri(); ?>" alt="Freebies Mall Logo" itemprop="url">
															</div>
															<span itemprop="name">Freebies Mall</span>
														</div>
													</div>
													<!-- File Format Available -->
													<ul class="fileformat">
														<?php if( get_field('psd') ): ?>
														<li>
															<span> <?php the_field('psd'); ?> </span>
														</li>
														<?php endif; ?>
														<?php if( get_field('sketch') ): ?>
														<li>
															<span> <?php the_field('sketch'); ?> </span>
														</li>
														<?php endif; ?>
														<?php if( get_field('ai') ): ?>
														<li>
															<span> <?php the_field('ai'); ?> </span>
														</li>
														<?php endif; ?>
														<?php if( get_field('fonts') ): ?>
														<li>
															<span> <?php the_field('fonts'); ?></span>
														</li>
														<?php endif; ?>
														<?php if( get_field('wordpresstheme') ): ?>
														<li>
															<span> <?php the_field('wordpresstheme'); ?> </span>
														</li>
														<?php endif; ?>
													</ul>
												</div>
												<div class="animateAll toolsTitle">
													<h2 class="productTitle" itemprop="name headline">
													<?php the_title(); ?>
													</h2>
												</div>
											</div>
										</a>
									</div>
								</div>
							</article>
							<!-- Post loop ends -->
							<?php endwhile; endif; ?>
							<?php wp_reset_query(); ?>
							<div class="col-md-12 customPagination text-center">
								<?php kriesi_pagination(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php get_footer(); ?>
	<!-- Product cards with sidebar nav ends -->