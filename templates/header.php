
<?php

if ( file_exists( __DIR__ .'/../autoload.php')){
	 require_once __DIR__ .'/../autoload.php';
}

?>


<!DOCTYPE html>
<html lang="en"> 
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php echo $themeOption["title"] . " | ". $themeOption["subtitle"] ?></title>
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
	
</head>
<body>
<div class="wrap-body">
	<!--///////////////////////////////////////Top-->
	<div class="top">
		<div class="zerogrid">
			<ul class="number f-left">
				<li class="mail"><p><?php echo $themeOption['email']?></p></li>
				<li class="phone"><p><?php echo $themeOption['phone']?></p></li>
			</ul>
			<ul class="top-social f-right">
			<?php foreach($themeOption["social"] as $icon ): ?>
			<li><a href="<?php echo $icon["link"]?>"><i class="<?php echo $icon["className"]?>"></i></a></li>
			<?php endforeach; ?>
			</ul>
		</div>
	</div>
	<!--////////////////////////////////////Header-->
	<header>
		<div class="zerogrid">
			<a href="<?php echo $themeOption["logo"] ["link"]?>"> <center><div class="logo"><img src="<?php echo $themeOption["logo"]["image"] ?>" alt= "<?php echo $themeOption["logo"]["name"]?>" ></div></center></a>
		</div>
	</header>
	<div class="site-title">
		<div class="zerogrid">
			<div class="row">
				<h2 class="t-center"><?php echo $themeOption['text']?></h2>
			</div>
		</div>
	</div>
	 <!--//////////////////////////////////////Menu-->
	 <?php include_once __DIR__.'/menu.php'; ?>

