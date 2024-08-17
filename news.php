<?php

if ( file_exists( __DIR__ .'/autoload.php')){
	 require_once __DIR__ .'/autoload.php';
}

?>


<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php echo "zItalyFood | Free Restaurant Food"?></title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/slide.css">
	<link rel="stylesheet" href="css/menu.css">
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
    
</head>
<body>
<div class="wrap-body">
	<!--///////////////////////////////////////Top-->
	<div class="top">
		<div class="zerogrid">
			<ul class="number f-left">
				<li class="mail"><p><?php echo $top_ber['email']?></p></li>
				<li class="phone"><p><?php echo $top_ber['phone']?></p></li>
			</ul>
			<ul class="top-social f-right">
				<li><a href="<?php echo $top_ber['socialLink']['twitter']?>"><i class="fa fa-twitter"></i></a></li>
				<li><a href="<?php echo $top_ber['socialLink']['facebook']?>"><i class="fa fa-facebook"></i></a></li>
				<li><a href="<?php echo $top_ber['socialLink']['g+']?>"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="<?php echo $top_ber['socialLink']['linkedin']?>"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="<?php echo $top_ber['socialLink']['instagram']?>"><i class="fa fa-instagram"></i></a></li>
			</ul>
		</div>
	</div>
	<!--////////////////////////////////////Header-->
	<header>
		<div class="zerogrid">
			<center><div class="logo"><img src="<?php echo $headerImage['image']?>"></div></center>
		</div>
	</header>
	<div class="site-title">
		<div class="zerogrid">
			<div class="row">
				<h2 class="t-center"><?php echo $headerImage['titel']?></h2>
			</div>
		</div>
	</div>
    <!--//////////////////////////////////////Menu-->
    <a href="#" class="nav-toggle">Toggle Navigation</a>
    <nav class="cmn-tile-nav">
		<ul class="clearfix">
			<li class="colour-1"><a href="<?php echo $Menu["home"]?>">Home</a></li>
			<li class="colour-2"><a href="<?php echo $Menu["menu"]?>">Menu</a></li>
			<li class="colour-3"><a href="<?php echo $Menu["location"]?>">Location</a></li>
			<li class="colour-4"><a href="<?php echo $Menu["blog"]?>">Blog</a></li>
			<li class="colour-5"><a href="<?php echo $Menu["reservation"]?>">Reservation</a></li>
			<li class="colour-6"><a href="<?php echo $Menu["staff"]?>">Our Staff</a></li>
			<li class="colour-7"><a href="<?php echo $Menu["news"]?>">News</a></li>
			<li class="colour-8"><a href="<?php echo $Menu["gallery"]?>">Gallery</a></li>
		</ul>
    </nav>


<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="news.html">News</a></li>
			</ul>
		</div>
		<div id="main-content" class="col-2-3">
			<div class="wrap-content">
				<article>
					<div class="art-header">
						<div class="entry-title"> 
							<h2>Sharing Your Explorer’s Story: Man and Mother Nature</h2>
						</div>
						<div class="info">By <a href="#">Danny</a> on April 14, 2015</div>
					</div>
					<div class="art-content">
						<img src="images/14.jpg" />
						<div class="excerpt"><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum exercitation ullamco laboris nisi ut aliquip.</p></div>
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
						<blockquote><p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet vultatup duista.</p></blockquote>
						<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril.</p>
						<h2>Heading 1</h2>
						<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse lorem ipsum dolor sit amet.</p>
						<h2>Heading 2</h2>
						<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. At vero eos et accusam et justo.</p>
						<h2>Heading 3</h2>
						<p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum hendrerit in vulputate velit esse molestie.</p>
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
						<p><code>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</code></p>
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
						<div class="note">
						  <ol>
							<li>Lorem ipsum</li>
							<li>Sit amet vultatup nonumy</li>
							<li>Duista sed diam</li>
						  </ol>
						  <div class="clear"></div>
						</div>
						<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						<p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores.</p>
					</div>
				</article>
				<div class="widget wid-related">
					<div class="wrap-col">
						<div class="wid-header">
							<h5>Related Post</h5>
						</div>
						<div class="wid-content">
							<div class="row">
								<div class="col-1-3">
									<div class="wrap-col">
										<a href="#"><img src="images/10.jpg" /></a>
										<h4><a href="#">Vero eros et accumsan et iusto odio </a></h4>
									</div>
								</div>
								<div class="col-1-3">
									<div class="wrap-col">
										<a href="#"><img src="images/7.jpg" /></a>
										<h4><a href="#">Vero eros et accumsan et iusto odio </a></h4>
									</div>
								</div>
								<div class="col-1-3">
									<div class="wrap-col">
										<a href="#"><img src="images/8.jpg" /></a>
										<h4><a href="#">Vero eros et accumsan et iusto odio </a></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="sidebar" class="col-1-3">
			<div class="wrap-sidebar">
				<!---- Start Widget ---->
				<div class="widget wid-about">
					<div class="wid-header">
						<h5>About Us</h5>
					</div>
					<div class="wid-content">
						<img src="images/15.jpg"/>
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
					</div>
				</div>
				<!---- Start Widget ---->
				<div class="widget wid-post">
					<div class="wid-header">
						<h5>Latest Posts</h5>
					</div>
					<div class="wid-content">
						<div class="post">
							<a href="#"><img src="images/15.jpg"/></a>
							<div class="wrapper">
							  <h5><a href="#">Lorem ipsum dolor</a></h5>
							   <span>$25 - $26</span>
							</div>
						</div>
						<div class="post">
							<a href="#"><img src="images/14.jpg"/></a>
							<div class="wrapper">
							  <h5><a href="#">Lorem ipsum dolor</a></h5>
							  <span>$25 - $26</span>
							</div>
						</div>
						<div class="post">
							<a href="#"><img src="images/13.jpg"/></a>
							<div class="wrapper">
							  <h5><a href="#">Lorem ipsum dolor</a></h5>
							   <span>$25 - $26</span>
							</div>
						</div>
					</div>
				</div>
				<!---- Start Widget ---->
				<div class="widget wid-tag">
					<div class="wid-header">
						<h5>Tags</h5>
					</div>
					<div class="wid-content">
						<a href="#">animals ,</a>
						<a href="#">cooking ,</a>
						<a href="#">countries ,</a>
						<a href="#">home ,</a>
						<a href="#">likes ,</a>
						<a href="#">photo ,</a>
						<a href="#">travel ,</a>
						<a href="#">video </a>
					</div>
				</div>
				<!---- Start Widget ---->
				<div class="widget wid-gallery">
					<div class="wid-header">
						<h5>Gallery</h5>
					</div>
					<div class="wid-content">
						<a href="#"><img src="images/11.jpg"></a>
						<a href="#"><img src="images/10.jpg"></a>
						<a href="#"><img src="images/9.jpg"></a>
						<a href="#"><img src="images/8.jpg"></a>
						<a href="#"><img src="images/7.jpg"></a>
						<a href="#"><img src="images/6.jpg"></a>
					</div>
				</div>
			</div>
		</div>
	</div>	
</section>

<!--////////////////////////////////////Footer-->
<footer class="zerogrid">
	<div class="wrap-footer">
		<div class="row">
			<div class="col-1-3">
				<div class="wrap-col">
					<h4><?php echo $footer["side1"]['title'] ?></h4>
					<div class="row">
						<img src="images/a-1.jpg">
						<h5><?php echo $footer["side1"]['name'] ?></h5>
						<p><?php echo $footer["side1"]['desc'] ?>.</p>
					</div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<h4>Location</h4>
					<div class="wrap-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1845.5111719192994!2d91.80343153155684!3d22.314994710354654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acdf68eb9f2c75%3A0xae327aac9854c0f1!2sM%2FS.%20Recent%20Trading%20Agency!5e0!3m2!1sen!2sbd!4v1723876676776!5m2!1sen!2sbd" width="100%" height="200" frameborder="0" style="border:0"></iframe></div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<h4><?php echo $footer["side3"]["title"] ?></h4>
					<p><span>mon.</span> 17:00 - 21:00</p>
					<p><span>tue.-wed.</span> 16:30 – 21:00</p>
					<p><span>thu.-sat.</span> 16:30 – 21:00</p>
					<p><span>sun.</span> 11:00 – 21:00</p>
					<p><span><?php echo $footer["side3"]["heading"] ?></span></br>
					<?php echo $footer["side3"]["desc"] ?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="wrapper">
				<?php echo $footer["copyright"]["text"] ?> <a href="<?php echo $footer["copyright"]["link"] ?>"><?php echo $footer["copyright"]["title"] ?></a>
			<ul class="quick-link f-right">
				<?php foreach ($quicklink as $item):?>
				<li><a href="<?php echo $item["link"] ?>"> <?php echo $item["title"] ?></a></li>
				<?php endforeach;?>
			</ul>
		</div>
	</div>
</footer>

	<!-- js -->
	<script src="js/classie.js"></script>
	<script src="js/demo.js"></script>
	
</div>
</body></html>