<?php
/**
* The template for displaying pages
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages and that
* other "pages" on your WordPress site will use a different template.
* @package WordPress
* @subpackage Twenty_Sixteen
* @since Twenty Sixteen 1.0
*/
get_header(); ?>
<section class="fullBlogMain_wrapper">
	<div class="container container-blog-main">
		<div class="row">
			<div class="respBlog-block">
				
				<div class="breadcrumbs">
					<?php
					if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('
					<p id="breadcrumbs">','</p>
					');
					}
					?>
				</div>
				<h1 class="catTitleLg"> <?php the_title(); ?></h1>
				<div class="col-md-12">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
<!-- Product cards with sidebar nav ends -->