<?php
/**
 * The template for displaying pages
 * Template Name: Portfolio
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div id="pageContent">
<div class="logo2">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo1.png" alt="logo" />
</div>
<style>

.portfoliopage{transform:translate(0%, 0px) translate3d(0px, 0px, 0px); -moz-transform:translate(0%, 0px) translate3d(0px, 0px, 0px); -webkit-transform:translate(0%, 0px) translate3d(0px, 0px, 0px); -ms-transform:translate(0%, 0px) translate3d(0px, 0px, 0px); -o-transform:translate(0%, 0px) translate3d(0px, 0px, 0px); width: 100%; padding-left:6.2%; transition:all 1s ease-in-out 0s; -ms-transition: all 1s ease-in-out 0s; -moz-transition: all 1s ease-in-out 0s;-webkit-transition: all 1s ease-in-out 0s;-o-transition: all 1s ease-in-out 0s;}
.side{height: 100%; position: fixed; text-align: center; top: 0; z-index: 1000; width:6.25%; background:#fff;}
.side:hover .nav__wrapper{transform:translate3d(0px, 0px, 0px); -webkit-transform:translate3d(0px, 0px, 0px); -moz-transform:translate3d(0px, 0px, 0px); -ms-transform:translate3d(0px, 0px, 0px); -o-transform:translate3d(0px, 0px, 0px); transition: all 1s ease-in-out 0s; -ms-transition: all 1s ease-in-out 0s;-moz-transition: all 1s ease-in-out 0s;-webkit-transition: all 1s ease-in-out 0s;-o-transition: all 1s ease-in-out 0s;}
.side:hover .nav__translate{transform:translate3d(0px, 0px, 0px); -webkit-transform:translate3d(0px, 0px, 0px); -ms-transform:translate3d(0px, 0px, 0px); -o-transform:translate3d(0px, 0px, 0px); -moz-transform:translate3d(0px, 0px, 0px); transition: all 1s ease-in-out 0s; -ms-transition: all 1s ease-in-out 0s;-moz-transition: all 1s ease-in-out 0s;-webkit-transition: all 1s ease-in-out 0s;-o-transition: all 1s ease-in-out 0s;}
.side:hover .nav__top__item__title{transform: translate3d(0px, 0px, 0px); -moz-transform: translate3d(0px, 0px, 0px); -webkit-transform: translate3d(0px, 0px, 0px); -ms-transform: translate3d(0px, 0px, 0px); -o-transform: translate3d(0px, 0px, 0px); visibility:visible; opacity:1; }
.nav{border-bottom:0; height:100%; margin:0; transform: translate3d(-100%, 0px, 0px); -webkit-transform: translate3d(-100%, 0px, 0px); -moz-transform: translate3d(-100%, 0px, 0px); -ms-transform: translate3d(-100%, 0px, 0px); -o-transform: translate3d(-100%, 0px, 0px); transition: all 1s ease-in-out 0s; -ms-transition: all 1s ease-in-out 0s;-moz-transition: all 1s ease-in-out 0s; -webkit-transition: all 1s ease-in-out 0s;-o-transition: all 1s ease-in-out 0s; visibility: hidden; width: 100%;
}
.nav__wrapper {background:#fff; height: 100%; overflow:hidden; transform:translate3d(-75%, 0px, 0px); -moz-transform:translate3d(-75%, 0px, 0px); -ms-transform:translate3d(-75%, 0px, 0px); -webkit-transform:translate3d(-75%, 0px, 0px); -o-transform:translate3d(-75%, 0px, 0px); transition: all 1s ease-in-out 0s; -ms-transition: all 1s ease-in-out 0s; -moz-transition: all 1s ease-in-out 0s;-webkit-transition: all 1s ease-in-out 0s;-o-transition: all 1s ease-in-out 0s; width:400%;}
.nav__translate{height:100%; overflow:hidden; transform:translate3d(75%, 0px, 0px); -webkit-transform:translate3d(75%, 0px, 0px); -o-transform:translate3d(75%, 0px, 0px); -moz-transform:translate3d(75%, 0px, 0px); -ms-transform:translate3d(75%, 0px, 0px); transition: all 1s ease-in-out 0s; -ms-transition: all 1s ease-in-out 0s;-moz-transition: all 1s ease-in-out 0s;-webkit-transition: all 1s ease-in-out 0s;-o-transition: all 1s ease-in-out 0s; width:100%;}
.side .logo4{display:block; margin:6rem auto 0 12.5%; position:absolute; transform:translate3d(-3%, 0px, 0px); -webkit-transform:translate3d(-3%, 0px, 0px); -ms-transform:translate3d(-3%, 0px, 0px); -moz-transform:translate3d(-3%, 0px, 0px); -o-transform:translate3d(-3%, 0px, 0px); transition: all 1s ease-in-out 0s; -ms-transition: all 1s ease-in-out 0s; -moz-transition: all 1s ease-in-out 0s; -webkit-transition: all 1s ease-in-out 0s;-o-transition: all 1s ease-in-out 0s; width:75%; z-index:10;}
.c{position:absolute;}
.c--v{top: 50%; transform: translate(0px, -50%); -webkit-transform: translate(0px, -50%); -moz-transform: translate(0px, -50%); -ms-transform: translate(0px, -50%); -o-transform: translate(0px, -50%);}
.side .c--v {top: calc(50% - 3.25rem);}
.nav__top {width:25%; z-index:1;}
.nav--vol2 .nav__top__item{margin: 4rem 0;}
.nav__top__item{margin: 5rem 0; position: relative;}
.nav__top__item a {padding: 2rem;}
.a, a, a:visited {color: rgb(153, 153, 153); text-decoration: none; transition:color 500ms cubic-bezier(0.25, 0.46, 0.45, 0.94) 0s; -webkit-transition:color 500ms cubic-bezier(0.25, 0.46, 0.45, 0.94) 0s; -moz-transition:color 500ms cubic-bezier(0.25, 0.46, 0.45, 0.94) 0s; -ms-transition:color 500ms cubic-bezier(0.25, 0.46, 0.45, 0.94) 0s; -o-transition:color 500ms cubic-bezier(0.25, 0.46, 0.45, 0.94) 0s;}
.nav__top__item__index{/*font-family: 'Lato'; font-size:20px;*/ line-height: 100%;}
.nav__top__item__title{/*font-family:'Lato'; font-size:20px;*/ left:100%; line-height:180%; position:absolute; white-space:nowrap; z-index:1; transform: translate3d(-20px, 0px, 0px); -webkit-transform: translate3d(-20px, 0px, 0px); -moz-transform: translate3d(-20px, 0px, 0px); -o-transform: translate3d(-20px, 0px, 0px); -ms-transform: translate3d(-20px, 0px, 0px); transition: all 1s ease-in-out 0s; -ms-transition: all 1s ease-in-out 0s; -moz-transition: all 1s ease-in-out 0s; -webkit-transition: all 1s ease-in-out 0s; -o-transition: all 1s ease-in-out 0s; opacity:0;}
.portfoliopage.fullpage-wrapper{transform:translate(0%, 0px) translate3d(0px, 0px, 0px); transition: all 1s ease-in-out 0s; -ms-transition: all 1s ease-in-out 0s; -moz-transition: all 1s ease-in-out 0s;-webkit-transition: all 1s ease-in-out 0s; -o-transition: all 1s ease-in-out 0s;}
.side:hover + .worksidebar + .portfoliopage.fullpage-wrapper{transform: translate(8%, 0px) translate3d(0px, 0px, 0px);}
#workmenu1 li a{font-size:20px; color:#ababab; font-family: 'Lato';}
#workmenu1 li.active a{color:#444444; font-family: 'Roboto-Bold';}
</style>


<div class="side">
    <nav id="nav" class="nav" style="visibility: visible;transform: translate3d(0px, 0px, 0px);">
    	<div class="nav__wrapper">
    		<div class="nav__translate">
                <a class="logo4"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" class="logo--full hidden" />
                    <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/logo_s.svg" class="logo--s" />
                </a>   


        <?php $the_query = new WP_Query( array( 'post_type' => 'works', 'post_status' => 'publish' ) ); 
			  global $post;
			  $j=1;
			  if ( $the_query->have_posts() ) :
			  	echo '<ul id="workmenu1" class="nav__top c c--v nav--vol2">';
			  	while ( $the_query->have_posts() ) : $the_query->the_post(); 
           			echo '<li data-menuanchor="'.$post->post_name.'"><a href="#'.$post->post_name.'"><span class="nav__top__item__index">'.$j.'</span><span class="nav__top__item__title upper hidden">'.get_the_title().'</span></a></li>';
				$j++; endwhile;       
        	  	echo '</ul>';
				 wp_reset_postdata();
				endif;
	   ?>

                
<!--                <ul class="nav__top c c--v nav--vol2">
                    <li class="nav__top__item">
                        <a href="#">
                            <span class="nav__top__item__index">1</span>
                            <span class="nav__top__item__title upper hidden">
                                Through Their Eyes
                            </span>
                        </a>
                    </li>
                    <li class="nav__top__item">
                        <a href="#">
                            <span class="nav__top__item__index">2</span>
                            <span class="nav__top__item__title upper hidden">
                                Through Their Eyes
                            </span>
                        </a>
                    </li>
                    <li class="nav__top__item">
                        <a href="#">
                            <span class="nav__top__item__index">3</span>
                            <span class="nav__top__item__title upper hidden">
                                Through Their Eyes
                            </span>
                        </a>
                    </li>
                    <li class="nav__top__item">
                        <a href="#">
                            <span class="nav__top__item__index">4</span>
                            <span class="nav__top__item__title upper hidden">
                                Through Their Eyes
                            </span>
                        </a>
                    </li>    
                    <li class="nav__top__item">
                        <a href="#">
                            <span class="nav__top__item__index">5</span>
                            <span class="nav__top__item__title upper hidden">
                                Through Their Eyes
                            </span>
                        </a>
                    </li>
                    <li class="nav__top__item">
                        <a href="#">
                            <span class="nav__top__item__index">6</span>
                            <span class="nav__top__item__title upper hidden">
                                Through Their Eyes
                            </span>
                        </a>
                    </li>    
                </ul> -->              
        	</div>
        </div>
    </nav>
    
    <div class="mail">
    	<div class="verticalCenter">
    		<div class="verticalInner">
    			<div class="mail_inner">
                	<img src="<?php echo get_template_directory_uri(); ?>/images/email_icon.png" alt="thumb" />
                    <span>Like what you see? <a href="mailto:abc@test.com">Let's Talk</a></span>
                </div>
    		</div>
    	</div>
    </div><!--mail-->
</div><!--side-->

<div class="worksidebar" style="display:none!important;">
	<div class="workinner">
        <div class="logo1">
        	<img src="<?php echo get_template_directory_uri();?>/images/logo1.png" alt="logo" />
            <h6>WORK</h6>
        </div>        

        <?php $the_query = new WP_Query( array( 'post_type' => 'works', 'post_status' => 'publish' ) ); 
			  global $post;
			  $j=1;
			  if ( $the_query->have_posts() ) :
			  	echo '<ul id="workmenu1">';
			  	while ( $the_query->have_posts() ) : $the_query->the_post(); 
           			echo '<li data-menuanchor="'.$post->post_name.'"><a href="#'.$post->post_name.'">'.$j.'. <span>'.get_the_title().'</span></a></li>';
				$j++; endwhile;       
        	  	echo '</ul>';
				 wp_reset_postdata();
				endif;
	   ?>
                
        <div class="k">
            <ul>
                <?php 
                if (have_posts()) : query_posts('post_type=works','post_status=publish');
                $i = 1;
                while (have_posts()) : the_post();
                ?>         
                <li>
                    <a href="#section0">
                        <div class="slidenumbers">
                            <span><?php echo $i;?></span>
                        </div>
                        <div class="portfolio_lines">
                            <div class="line"></div>
                            <div class="activeline" style="height:50%;"></div>                    
                        </div><!--portfolio_lines-->
                        <div class="slideText">
                            <?php the_title(); ?>
                        </div>
                    </a>
                </li>
                <?php  $i++; endwhile; endif;?>
                <?php wp_reset_query(); ?>              
            </ul>
        </div>
    </div><!--workinner-->
    <div class="micon">
    	<img src="<?php echo get_template_directory_uri(); ?>/images/email_icon.png" alt="thumb" />
    </div>
    
     <div class="message1">
    	<div class="verticalCenter">
    		<div class="verticalInner">
            	<p>Like what you see? <a href="mailto:abc@test.com">Let's Talk</a></p>
            </div><!--verticalInner-->
        </div><!--verticalCenter-->
    </div><!--message-->   
</div><!--worksidebar-->

<div id="fullpage1" class="portfoliopage">
    <div class="works">
        <?php 
        $i=0;
        if (have_posts()) : query_posts('post_type=works');
        while (have_posts()) : the_post();
        ?>           
        <div class="section">
            <div class="entry">
                <?php the_content(); ?>
            </div>
        </div>
        <?php 
        $i++;
        endwhile;  endif;?>
        <?php wp_reset_query(); ?>		
    </div>
</div>
</div>
<?php get_footer(); ?>
