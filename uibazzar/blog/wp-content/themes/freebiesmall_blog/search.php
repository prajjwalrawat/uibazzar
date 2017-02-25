<?php
/**
* The template for displaying search results pages.
*
* @package pacify
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
                        <h1 class="title"><?php printf( __( 'Search Results for : %s', 'pacify' ), '<span class="search-tag-blog">' . get_search_query() . '</span>' ); ?></h1>
                        <div class="text search-result-blog">
                            <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                            <div <?php post_class() ?>>
                                <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php echo wp_trim_words( get_the_content(), 35, '...' ); ?></p>
                            </div>
                            <?php endwhile; ?>
                            <div class="customPagination text-center">
                                <?php kriesi_pagination(); ?>
                            </div>
                            <?php else : ?>
                            <h2 class="title">No posts found. Try a different search?</h2>
                            <?php get_search_form(); ?>
                            <?php endif; ?>
                        </div>
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