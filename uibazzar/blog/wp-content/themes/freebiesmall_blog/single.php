<?php
/**
* Template Name: Blog Front Template
*
* @package WordPress
* @subpackage Twenty_Sixteen
* @since Twenty Sixteen 1.0
*/
get_header(); ?>
<!-- Blog Content -->
<section class="blog-content-wrapper">
    <!-- Header Section Blog -->
    <section class="fullBlogMain_wrapper">
        <div class="container container-blog-main">
            <div class="row">
                <div class="col-md-8 blog-inner-wrapper respBlog-block">
                    <div class="white-left-box">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <article class="freebiesmall-blog-card blog-card-h2"><!-- updated class -->
                        <div class="blog-content">
                            <h1 class="blog-main-title">
                            <?php the_title(); ?>
                            </h1>
                            <span class="blogAuthor blogAuthor-innerblog meta-description-mainblog"> <!-- updated class -->
                            Published on <time> <?php the_date('M j, Y'); ?></time>
                            in <?php the_category(', '); ?>
                            Written by
                                <span><?php the_author(); ?></span>
                        </span>
                    </span>
                    
                    <p>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(''); ?> </a>
                    </p>
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="disqus-comments blog-full-view-ga">
                    <?php comments_template(); ?>
                </div>
            </article>
            <?php endwhile;  endif;?>
            <?php
            $wp_query = null;
            $wp_query = $temp;  // Reset
            ?>
            <?php wp_reset_query(); ?>
        </div>
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
<?php get_footer(); ?>