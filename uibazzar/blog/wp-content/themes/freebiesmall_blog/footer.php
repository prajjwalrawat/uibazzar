<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after
*
* @package WordPress
* @subpackage Twenty_Sixteen
* @since Twenty Sixteen 1.0
*/
?>
<!-- footer -->
<div class="clearfix"></div>
<footer class="page-footer page-footer-ga" id="footerInfo2">
	<div class="container container-blog-main">
		<div class="row">
			<div class="col-md-4 col-sm-4 sitelinksBlock footerNoneText">
				<h3 class="titleFooterSmall"> What is FreebiesMall ? </h3>
				<p itemprop="description" class="paraFooter">
					FreebiesMall is a blog site for designers &amp; developers.
					Our aim is to provide top quality design &amp; development resources.
					We offer Free Design Resources, WordPress Tips, Tricks &amp; Best Deals on Website design &amp; development products.
				</p>
			</div>
			<div class="col-md-4 col-sm-4 footerNavSitelinks">
				<h3 class="titleFooterSmall"> Sitelinks </h3>
				<ul id="menu-footer-2" class="primary-menu">
					<li><a href="https://www.freebiesmall.com/write-for-us/" class="writeforus-page-ga">Write For Us</a></li>
					<li id="menu-item-806" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-806"><a href="https://www.freebiesmall.com">Latest Freebies</a></li>
					<li id="menu-item-808" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-808"><a href="https://www.freebiesmall.com/privacy-policy/">Privacy Policy</a></li>
					<li id="menu-item-807" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-807"><a href="https://www.freebiesmall.com/contact-us/">Contact Us</a></li>
				</ul>
			</div>
			<div class="col-md-4 col-sm-4 sitelinksBlock">
				<div class="newsletterSubscription">
					<?php dynamic_sidebar( 'mailchimp' ); ?>
				</div>
			</div>
			<div class="clearfix"><!-- empty --></div>
		</div>
	</div>
</footer>
<footer class="main-footer text-center full-width">
	<p> Made with <span class="glyphicon glyphicon-heart" aria-hidden="true"></span> by <span itemprop="copyrightHolder" itemscope itemtype="http://schema.org/Organization"> Freebies Mall </span></p>
</footer>
<?php wp_footer(); ?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" async></script>
<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-88264969-1', 'auto');
ga('send', 'pageview');
</script>
<script>
$(".mobilemenu ul").addClass("nav navbar-nav navbar-right navHideDesktop");
$(".mobilemenu ul ul").removeClass("nav navbar-nav navbar-right navHideDesktop");
</script>
<!-- Begin comScore Tag -->
<script>
  var _comscore = _comscore || [];
  _comscore.push({ c1: "2", c2: "23582108" });
  (function() {
    var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
    s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
    el.parentNode.insertBefore(s, el);
  })();
</script>
<script type="text/javascript">
    (function(p,u,s,h){
        p._pcq=p._pcq||[];
        p._pcq.push(['_currentTime',Date.now()]);
        s=u.createElement('script');
        s.type='text/javascript';
        s.async=true;
        s.src='https://cdn.pushcrew.com/js/b0e66bde0fa6b377cd1f93d47fcf0ff5.js';
        h=u.getElementsByTagName('script')[0];
        h.parentNode.insertBefore(s,h);
    })(window,document);
</script>
<noscript>
  <img src="http://b.scorecardresearch.com/p?c1=2&c2=23582108&cv=2.0&cj=1" />
</noscript>
<!-- End comScore Tag -->
</body>
</html>