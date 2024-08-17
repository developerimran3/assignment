
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
	
	<div class="zerogrid">
		<div class="callbacks_container">
			<ul class="rslides" id="slider4">
				<!-- Slider item php code start here -->
				<?php foreach ($banner as $item):?>
				<li>
					<img src="<?php echo $item['image'];?>" alt="">
					<div class="caption">
						<h2><?php echo $item['title'];?></h2></br>
						<p><?php echo $item['disc'];?></p>
					</div>
				</li>
				<?php endforeach;?>
        		<!-- slider item php code ends here -->
				
			</ul>
		</div>
	</div>
	
<!--////////////////////////////////////Container-->
<section id="container" class="index-page">
	<div class="wrap-container zerogrid">
		<!-----------------content-box-1-------------------->
		<section class="content-box box-1">
			<div class="zerogrid">
				<div class="row box-item"><!--Start Box-->
					<h2><?php echo $headingText["title"]  ?></h2>
					<span><?php echo $headingText["subtitle"]  ?></span>
				</div>
			</div>
		</section>
		<!-----------------content-box-2-------------------->
		<section class="content-box box-2">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="header">
						<h2><?php echo $welcome ["title"]?></h2>
						<hr class="line">
						<span><?php echo $welcome ["subtitle"];?></span>
					</div>
					<div class="row">
					<?php foreach ($menucard as $item):?>
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="box-item">
									<span class="ribbon"><?php echo $item["card"]; ?><b></b></span>
									<img src="<?php echo $item["photo"]; ?>" alt="">
									<p><?php echo $item["desc"]; ?></p>
									<a href="<?php echo $item["btn"]["link"]; ?>" class="button button-1"><?php echo $item["btn"]["title"]; ?></a>
								</div>
							</div>
						</div>
						<?php endforeach;?>
					</div>
				</div>
			</div>
		</section>
	</div>
</section>

<!--////////////////////////////////////Footer-->
<footer class="zerogrid">
	<div class="wrap-footer">
		<div class="row">
			<div class="col-1-3">
				<div class="wrap-col">
					<h4><?php echo $homeFooter["side1"]['title'] ?></h4>
					<div class="row">
						<img src="images/a-1.jpg">
						<h5><?php echo $homeFooter["side1"]['name'] ?></h5>
						<p><?php echo $homeFooter["side1"]['desc'] ?>.</p>
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
					<h4><?php echo $homeFooter["side3"]["title"] ?></h4>
					<p><span>mon.</span> 17:00 - 21:00</p>
					<p><span>tue.-wed.</span> 16:30 – 21:00</p>
					<p><span>thu.-sat.</span> 16:30 – 21:00</p>
					<p><span>sun.</span> 11:00 – 21:00</p>
					<p><span><?php echo $homeFooter["side3"]["heading"] ?></span></br>
					<?php echo $homeFooter["side3"]["desc"] ?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="wrapper">
			Copyright 2015 - Designed by <a href="https://www.zerotheme.com">ZEROTHEME</a>
			<ul class="quick-link f-right">
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Terms of Use</a></li>
			</ul>
		</div>
	</div>
</footer>


	<!-- js -->
	<script src="js/classie.js"></script>
	<script src="js/demo.js"></script>

	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	<script>
	$(function () {
	  // Slideshow 4
	  $("#slider4").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 500,
		namespace: "callbacks",
		before: function () {
		  $('.events').append("<li>before event fired.</li>");
		},
		after: function () {
		  $('.events').append("<li>after event fired.</li>");
		}
	  });
	});
	</script>
</div>
</body></html>