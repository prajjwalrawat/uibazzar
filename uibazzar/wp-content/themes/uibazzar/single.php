<?php
/**
* The template for displaying all single posts and attachments
*
* @package WordPress
* @subpackage Twenty_Sixteen
* @since Twenty Sixteen 1.0
*/
get_header(); ?>
<div class="singleBg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="breadcrumbs fullWidth pdpBreadcrumbs" itemprop="breadcrumb">
                    <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb('
                    <span id="breadcrumbs">','</span>
                    ');
                    }
                    ?>
                </div>
            </div>      
              
            <div class="col-md-9 col-sm-8">
            	<div class="singleLeft">
        			<h1 class="pageTitle">
                        <span itemprop="headline" itemprop="headline"> <?php the_title(); ?> </span>
                        <span class="in"> in </span>
                        <span class="cat"><?php the_category(', '); ?></span>
                    </h1>
            	
                	<div class="row">
                    	<div class="col-md-7 col-sm-12 col-xs-12">
							<div class="singleBanner">
								<?php the_post_thumbnail(''); ?>
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
							</div><!--fullwidth-->                    		
                    	</div>
                        <div class="col-md-5 col-sm-12 col-xs-12">
							<div class="fullwidth">
								<a id="total-downloads-ga" class="btn1 block animateAll" href="<?php the_field(download_link); ?>" target="_blank" >
									<span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> Download Freebie
								</a>
								<div class="autorBlock fullWidth">
									<small class="introTextAuthor freebies-info-seo" itemprop="description">
									<?php the_content(''); ?>
									</small>
									<div class="socialShare fullWidth">
										<div class="shareThis-block">
											<ul>
												<li class="share-facebook">
													<a rel="nofollow" class="share-facebook shareThis-btn" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share on Facebook" target="_blank">
														<i class="fa fa-facebook-square" aria-hidden="true"></i>
														<span>Facebook</span>
													</a>
												</li>
												<li class="share-twitter">
													<a rel="nofollow" class="share-twitter shareThis-btn" href="http://www.twitter.com/share?url=<?php echo
														get_permalink($post->ID);?>" target="_blank" title="Share on Twitter">
														<i class="fa fa-twitter" aria-hidden="true"></i>
														<span>Twitter</span>
													</a>
												</li>
												<li class="share-googlePlus">
													<a rel="nofollow" class="share-google-plus-1 shareThis-btn" href="https://plus.google.com/share?url=<?php echo
														get_permalink($post->ID);?>" target="_blank" title="Share on Google+">
														<i class="fa fa-google-plus" aria-hidden="true"></i>
														<span>Google</span>
													</a>
												</li>
												<li class="share-pinterest">
													<a rel="nofollow" class="share-pinterest shareThis-btn" href="http://pinterest.com/pin/create/button/?url=<?php echo
														get_permalink($post->ID);?>" target="_blank" title="Share on Pinterest">
														<i class="fa fa-pinterest" aria-hidden="true"></i>
														<span>Pinterest</span>
													</a>
												</li>
											</ul>
										</div><!--socialShare-->
									</div><!--socialShare-->
									<div class="connectAuthourBlock">
										<ul class="authorConnect fullWidth">
											<li>Connect with Designer:</li>
											<?php if( get_field('author_wesite_url') ): ?>
											<li>
												<a href="<?php the_field('author_wesite_url'); ?>" title="Visit author's Website" target="_blank">
													<i class="fa fa-globe" aria-hidden="true"></i>
													<small> Website </small>
												</a>
											</li>
											<?php endif; ?>
											<?php if( get_field('author_behance_url') ): ?>
											<li>
												<a href="<?php the_field('author_behance_url'); ?>" title="Visit author's Behance Profile" target="_blank">
													<i class="fa fa-behance" aria-hidden="true"></i>
													<small> Behance </small>
												</a>
											</li>
											<?php endif; ?>
											<?php if( get_field('author_dribbble_url') ): ?>
											<li>
												<a href="<?php the_field('author_dribbble_url'); ?>" title="Visit author's Dribbble Profile" target="_blank">
													<i class="fa fa-dribbble" aria-hidden="true"></i>
													<small> Dribbble </small>
												</a>
											</li>
											<?php endif; ?>
										</ul>
									</div><!--connectAuthourBlock-->
								</div><!--autorBlock-->
							</div><!--fullwidth-->
                            
							<!-- tags block -->
							<?php if ($tags) {?>
							<div class="tagsOuter text-left adjustDescSingle fullwidth relatedTagsBlockFull">
								<h6> Browse by Related Tags </h6>
								<nav id="relatedTags">
									<?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
								</nav>
							</div><!--tagsOuter-->
							<?php }?>
							<!-- tags block -->                        		
                        </div><!--col-md-5 col-sm-12 col-xs-12-->
                    </div><!--innerrow-->
                </div><!--singleLeft-->
            </div><!--col-sm-9-->
            
            <aside class="col-md-3 col-sm-4" itemscope itemtype="http://schema.org/WPSideBar">
                <div class="sidebarSingle">
                    <div class="ydntTry">
                        <div class="clearfix"><!-- empty --></div>
                        <nav id="categoryAll">
                            <?php dynamic_sidebar( 'catnav' ); ?>
                        </nav>
                    </div>
                    <div class="fullwidth twoRadius">
                        <?php dynamic_sidebar( 'common-advert1' ); ?>
                    </div>
                    <div class="fullwidth twoRadius">
                        <?php dynamic_sidebar( 'pdp-category-nav' ); ?>
                    </div>
                </div>
            </aside>           
        </div><!--row-->
    </div><!--container-->
</div><!--singleBg-->

<div class="singlePageFooterGap fullwidth"><!-- empty --></div>
<?php get_footer(); ?>