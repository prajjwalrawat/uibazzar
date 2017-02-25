<?php
/**
* Template Name: Blog Template
*
* @package WordPress
* @subpackage Twenty_Sixteen
* @since Twenty Sixteen 1.0
*/
get_header('blogTop'); ?>
<!-- Blog Content -->
<section class="blog-content-wrapper">
  <!-- Header Section Blog -->
  <section class="fullBlogMain_wrapper">
    <div class="container container-blog-main">
      <div class="row">
        <div class="col-md-8 blog-inner-wrapper respBlog-block">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <article class="freebiesmall-blog-card freebiesmall-blog-card-gaplg blog-card-h2">
            <div class="white-left-box">
              <div class="blog-content">
                <h2 class="blog-main-title">
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
                </h2>
                <span class="blogAuthor blogAuthor-innerblog meta-description-mainblog">
                  Published on <?php the_date('M j, Y'); ?>
                  in <?php the_category(', '); ?>
                  by <?php the_author(); ?>
                </span>
                <p> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(''); ?> </a> </p>
                <p><?php
                  $excerpt = get_the_excerpt();
                  echo string_limit_words($excerpt,38);
                ?>....</p>
                <a href="<?php the_permalink(); ?>" class="readmore-blog-card twoRadius animateAll"> Read More </a>
              </div>
            </div>
          </article>
          <?php endwhile;  endif;?>
          <div class="customPagination text-center">
            <?php kriesi_pagination(); ?>
          </div>
          <?php
          $wp_query = null;
          $wp_query = $temp;  // Reset
          ?>
          <?php wp_reset_query(); ?>
        </div>
        <div class="col-md-4 respBlog-block sbb02">
          <aside class="sidebar-blog">
            <section class="recentPosts-blog-wrapper">
              <?php dynamic_sidebar( 'connectwithus' ); ?>
            </section>
            <!-- Recent Posts -->
            <section class="recentPosts-blog-wrapper">
              <h5 class="latest_posts_blog_title"> #Trending Posts </h5>
              <?php
              $new_loop = new WP_Query( array(
              'posts_per_page' => 5 // put number of posts that you'd like to display
              ) );
              ?>
              <?php if ( $new_loop->have_posts() ) : ?>
              <?php while ( $new_loop->have_posts() ) : $new_loop->the_post(); ?>
              <h4><a href="<?php the_permalink(); ?>" class="recentPosts-blog"><?php the_title(); ?></a></h4>
              <?php endwhile;?>
              <?php else: ?>
              <?php endif; ?>
              <?php wp_reset_query(); ?>
            </section>
            <section class="blog-parters">
              <?php dynamic_sidebar( 'blog-advert-main' ); ?>
            </section>
          </aside>
        </div>
      </div>
    </div>
  </section>
</section>
<?php get_footer('blog'); ?>