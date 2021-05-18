<!DOCTYPE html>
<html lang="en">
<head>
<title>FARIDABADJYOTI</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="icon" href="assets/img/icon/fabicon.png">

<link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/plugins/animate.min.css">
<link rel="stylesheet" href="assets/css/plugins/fontawesome.css">
<link rel="stylesheet" href="assets/css/plugins/modal-video.min.css">
<link rel="stylesheet" href="assets/css/plugins/owl.carousel.css">
<link rel="stylesheet" href="assets/css/plugins/slick.css">
<link rel="stylesheet" href="assets/css/plugins/stellarnav.css">
<link rel="stylesheet" href="assets/css/theme.css">
</head>
<body class="theme-1">


<div class="searching">
<div class="container">
<div class="row">
<div class="col-8 text-center m-auto">
<div class="v1search_form">
<form action="#">
<input type="search" placeholder="Search Here...">
<button type="submit" class="cbtn1">Search</button>
</form>
</div>
</div>
</div>
</div>
<div class="close_btn"> <i class="fal fa-times"></i>
</div>
</div>


<div class="topbar white_bg" id="top">
<div class="container">
<div class="row">
<div class="col-md-6 col-lg-8 align-self-center">
<div class="trancarousel_area">
<p class="trand">BREAKING</p>
<div class="trancarousel owl-carousel nav_style1">
<div class="trancarousel_item">
<p><a href="#">फरीदाबाद - कृष्णपाल चाहते तो 2018 में ही बन गई होती हार्डवेयर प्याली रोड : नीरज शर्मा</a>
</p>
</div>
<div class="trancarousel_item">
<p><a href="#">Faridabad- कोरोना के खिलाफ लड़ाई में चिकित्सकों की सबसे बड़ी जिम्मेदारी : डॉ. गरिमा मित्तल</a>
</p>
</div>
<div class="trancarousel_item">
<p><a href="#">Faridabad- डीसीपी हेडक्वार्टर अंशु सिंगला ने फील्ड में जाकर की पुलिस नाकों की चेकिंग</a>
</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 align-self-center">
<div class="top_date_social text-right">
<div class="paper_date">
<p>Thursday, March 26, 2020</p>
</div>
<div class="social1">
<ul class="inline">
<li><a href="#"><i class="fab fa-twitter"></i></a>
</li>
<li><a href="#"><i class="fab fa-facebook-f"></i></a>
</li>
<li><a href="#"><i class="fab fa-youtube"></i></a>
</li>
<li><a href="#"><i class="fab fa-instagram"></i></a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="border_black"></div>

<div class="logo_area white_bg">
<div class="container">
<div class="row">
<div class="col-lg-4 align-self-center">
<div class="logo">
<a href="index.html">
<img src="assets/img/logo.png" alt="image">
</a>
</div>
</div>
<div class="col-lg-8 align-self-center">
<div class="banner1">
<a href="#">
<img src="assets/img/ads.jpg" alt="">
</a>
</div>
</div>
</div>
</div>
</div>


<div class="main-menu" id="header"> <a href="#top" class="up_btn up_btn1"><i class="far fa-chevron-double-up"></i></a>
<div class="main-nav clearfix is-ts-sticky">
<div class="container">
<div class="row justify-content-between">

<div class="col-6 col-lg-8">
<div class="newsprk_nav stellarnav">
<ul id="newsprk_menu" id='category'>
<li><a href="#">Home</a></li>
<li><a href='http://localhost/faridabad/details.php?cat=national' itemprop='url'>द&#2375;श</a></li>
<li><a href='http://localhost/faridabad/details.php?cat=crime' itemprop='url'>र&#2366;जन&#2368;त&#2368;</a></li>
<li><a href='http://localhost/faridabad/details.php?cat=haryana' itemprop='url'>हर&#2367;य&#2366;ण&#2366;</a></li>
<li><a href='http://localhost/faridabad/details.php?cat=haryana' itemprop='url'>फर&#2368;द&#2366;ब&#2366;द</a></li>
<li><a href='http://localhost/faridabad/details.php?cat=Delhi' itemprop='url'>द&#2367;ल&#2381;ल&#2368;-एनस&#2368;आर</a></li>
<li><a href='http://localhost/faridabad/details.php?cat=Business' itemprop='url'>व&#2381;य&#2366;प&#2366;र</a></li>
<li><a href='http://localhost/faridabad/details.php?cat=crime' itemprop='url'>क&#2381;र&#2366;इम</a></li>
</ul>
</div>
</div>


<div class="col-6 col-lg-4 align-self-center">
<div class="menu_right">
<div class="users_area">
<ul class="inline">
<li class="search_btn"><i class="far fa-search"></i>
</li>
<li><i class="fal fa-user-circle"></i>
</li>
</ul>
</div>

<div class="temp d-none d-lg-block">
<div class="temp_wap">
<div class="temp_icon">
<img src="assets/img/icon/temp.png" alt="">
</div>
<h3 class="temp_count">13</h3>
<p>San Francisco</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="fifth_bg">
<div class="container">
<div class="row">
<div class="col-12">
<div class="carousel_posts1 owl-carousel nav_style2 mb40 mt30">


<?php


	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "http://localhost:3051/news/fetch/brief");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl,CURLOPT_USERPWD,"demo:demo");
	$data = curl_exec($curl); 
	curl_close( $curl );    
	$alldata= json_decode($data);
			
	foreach ($alldata as $key => $briefnews) {
		// print_r($briefnews);
	
?> 

<div class="single_post widgets_small post_type5">
<div class="post_img">
<div class="img_wrap">
<a href="#">
<img src="http://localhost:3051/<?php echo $briefnews->blog_image ?>" alt="">
</a>
</div>
</div>
<div class="single_post_text">
<h4><a href="post1.html"><?php echo $briefnews->publish_timestamp; ?></a></h4>
<p><?php echo $briefnews->blog_heading;?></p>
</div>

</div>
<?php } 

?>

</div>

</div>
</div>
</div>
</div>


<div class="post_gallary_area fifth_bg mb40">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="row">
<div class="col-xl-8">
<div class="slider_demo2">

<?php
// if(isset($_POST['popularview'])){
$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "http://localhost:3051/news/fetch/latest-news/single");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl,CURLOPT_USERPWD,"demo:demo");

	$data = curl_exec($curl); 
	
	 curl_close( $curl );    
		$alldata= json_decode($data);
			
?>

	<?php	
$i='1';
	foreach ($alldata as $key => $popularnews) {
	
?>
<div class="single_post post_type6 xs-mb30">
<div class="post_img gradient1">
<img src="http://localhost:3051/<?php echo $popularnews->blog_image ?>" alt=""> <span class="tranding">
<i class="fas fa-play"></i>
</span>
</div>
<div class="single_post_text">
<div class="meta meta_separator1"> <a href='http://localhost/faridabad/details_id.php?_id=<?php echo $popularnews->_id; ?>'><?php echo $popularnews->news_category; ?></a>
<a href="http://localhost/faridabad/details_id.php?_id=<?php echo $popularnews->_id; ?>"><?php echo $popularnews->publish_timestamp; ?></a>
</div>
<h4><a class="play_btn" href="http://localhost/faridabad/details_id.php?_id=<?php echo $popularnews->_id; ?>"><?php echo $popularnews->blog_heading; ?></a></h4>
<div class="space-10"></div>
<!-- <p class="post-p"><?php echo $popularnews->blog_content; ?></p> -->
</div>
</div>
<?php }?>

<!-- <div class="single_post post_type6 xs-mb30">
<div class="post_img gradient1">
<img src="assets/img/slider.jpg" alt=""> <span class="tranding">
<i class="fas fa-play"></i>
</span>
</div>
<div class="single_post_text">
<div class="meta meta_separator1"> <a href="#">Faridabad Jyoti</a>
<a href="#">Apr 23, 2021</a>
</div>
<h4><a class="play_btn" href="video_post1.html">Faridabad- कोरोना के खिलाफ लड़ाई में चिकित्सकों की सबसे बड़ी जिम्मेदारी : डॉ. गरिमा मित्तल</a></h4>
<div class="space-10"></div>
<p class="post-p">फरीदाबाद ज्योति/ आशीष सिंह : फरीदाबाद, उपायुक्त डॉ. गरिमा मित्तल ने कहा कि चिकित्सक बड़ी मेहनत ...</p>
</div>
</div> -->
<!-- <div class="single_post post_type6 xs-mb30">
<div class="post_img gradient1">
<img src="assets/img/slider.jpg" alt=""> <span class="tranding">
<i class="fas fa-play"></i>
</span>
</div>
<div class="single_post_text">
<div class="meta meta_separator1"> <a href="#">Faridabad Jyoti</a>
<a href="#">Apr 23, 2021</a>
</div>
<h4><a class="play_btn" href="video_post1.html">Faridabad- कोरोना के खिलाफ लड़ाई में चिकित्सकों की सबसे बड़ी जिम्मेदारी : डॉ. गरिमा मित्तल</a></h4>
<div class="space-10"></div>
<p class="post-p">फरीदाबाद ज्योति/ आशीष सिंह : फरीदाबाद, उपायुक्त डॉ. गरिमा मित्तल ने कहा कि चिकित्सक बड़ी मेहनत ...</p>
</div>
</div> -->
<!-- <div class="single_post post_type6 xs-mb30">
<div class="post_img gradient1">
<img src="assets/img/slider.jpg" alt=""> <span class="tranding">
<i class="fas fa-play"></i>
</span>
</div>
<div class="single_post_text">
<div class="meta meta_separator1"> <a href="#">Faridabad Jyoti</a>
<a href="#">Apr 23, 2021</a>
</div>
<h4><a class="play_btn" href="video_post1.html">Faridabad- कोरोना के खिलाफ लड़ाई में चिकित्सकों की सबसे बड़ी जिम्मेदारी : डॉ. गरिमा मित्तल</a></h4>
<div class="space-10"></div>
<p class="post-p">फरीदाबाद ज्योति/ आशीष सिंह : फरीदाबाद, उपायुक्त डॉ. गरिमा मित्तल ने कहा कि चिकित्सक बड़ी मेहनत ...</p>
</div>
</div> -->
<!-- <div class="single_post post_type6 xs-mb30">
<div class="post_img gradient1">
<img src="assets/img/slider.jpg" alt=""> <span class="tranding">
<i class="fas fa-play"></i>
</span>
</div>
<div class="single_post_text">
<div class="meta meta_separator1"> <a href="#">Faridabad Jyoti</a>
<a href="#">Apr 23, 2021</a>
</div>
<h4><a class="play_btn" href="video_post1.html">Faridabad- कोरोना के खिलाफ लड़ाई में चिकित्सकों की सबसे बड़ी जिम्मेदारी : डॉ. गरिमा मित्तल</a></h4>
<div class="space-10"></div>
<p class="post-p">फरीदाबाद ज्योति/ आशीष सिंह : फरीदाबाद, उपायुक्त डॉ. गरिमा मित्तल ने कहा कि चिकित्सक बड़ी मेहनत ...</p>
</div>
</div> -->
<!-- <div class="single_post post_type6 xs-mb30">
<div class="post_img gradient1">
<img src="assets/img/slider.jpg" alt=""> <span class="tranding">
<i class="fas fa-play"></i>
</span>
</div>
<div class="single_post_text">
<div class="meta meta_separator1"> <a href="#">Faridabad Jyoti</a>
<a href="#">Apr 23, 2021</a>
</div>
<h4><a class="play_btn" href="video_post1.html">Faridabad- कोरोना के खिलाफ लड़ाई में चिकित्सकों की सबसे बड़ी जिम्मेदारी : डॉ. गरिमा मित्तल</a></h4>
<div class="space-10"></div>
<p class="post-p">फरीदाबाद ज्योति/ आशीष सिंह : फरीदाबाद, उपायुक्त डॉ. गरिमा मित्तल ने कहा कि चिकित्सक बड़ी मेहनत ...</p>
</div>
</div> -->
<!-- <div class="single_post post_type6 xs-mb30">
<div class="post_img gradient1">
<img src="assets/img/slider.jpg" alt=""> <span class="tranding">
<i class="fas fa-play"></i>
</span>
</div>
<div class="single_post_text">
<div class="meta meta_separator1"> <a href="#">Faridabad Jyoti</a>
<a href="#">Apr 23, 2021</a>
</div>
<h4><a class="play_btn" href="video_post1.html">Faridabad- कोरोना के खिलाफ लड़ाई में चिकित्सकों की सबसे बड़ी जिम्मेदारी : डॉ. गरिमा मित्तल</a></h4>
<div class="space-10"></div>
<p class="post-p">फरीदाबाद ज्योति/ आशीष सिंह : फरीदाबाद, उपायुक्त डॉ. गरिमा मित्तल ने कहा कि चिकित्सक बड़ी मेहनत ...</p>
</div>
</div> -->
<!-- <div class="single_post post_type6 xs-mb30">
<div class="post_img gradient1">
<img src="assets/img/slider.jpg" alt=""> <span class="tranding">
<i class="fas fa-play"></i>
</span>
</div>
<div class="single_post_text">
<div class="meta meta_separator1"> <a href="#">Faridabad Jyoti</a>
<a href="#">Apr 23, 2021</a>
</div>
<h4><a class="play_btn" href="video_post1.html">Faridabad- कोरोना के खिलाफ लड़ाई में चिकित्सकों की सबसे बड़ी जिम्मेदारी : डॉ. गरिमा मित्तल</a></h4>
<div class="space-10"></div>
<p class="post-p">फरीदाबाद ज्योति/ आशीष सिंह : फरीदाबाद, उपायुक्त डॉ. गरिमा मित्तल ने कहा कि चिकित्सक बड़ी मेहनत ...</p>
</div>
</div> -->
<!-- <div class="single_post post_type6 xs-mb30">
<div class="post_img gradient1">
<img src="assets/img/slider.jpg" alt=""> <span class="tranding">
<i class="fas fa-play"></i>
</span>
</div>
<div class="single_post_text">
<div class="meta meta_separator1"> <a href="#">Faridabad Jyoti</a>
<a href="#">Apr 23, 2021</a>
</div>
<h4><a class="play_btn" href="video_post1.html">Faridabad- कोरोना के खिलाफ लड़ाई में चिकित्सकों की सबसे बड़ी जिम्मेदारी : डॉ. गरिमा मित्तल</a></h4>
<div class="space-10"></div>
<p class="post-p">फरीदाबाद ज्योति/ आशीष सिंह : फरीदाबाद, उपायुक्त डॉ. गरिमा मित्तल ने कहा कि चिकित्सक बड़ी मेहनत ...</p>
</div>
</div> -->
</div>
<div class="slider_demo1">
<div class="single_gallary_item">
<img src="assets/img/blog/post_gsi1.jpg" alt="image">
</div>
<div class="single_gallary_item">
<img src="assets/img/blog/post_gsi2.jpg" alt="image">
</div>
<div class="single_gallary_item">
<img src="assets/img/blog/post_gsi3.jpg" alt="image">
</div>
<div class="single_gallary_item">
<img src="assets/img/blog/post_gsi4.jpg" alt="image">
</div>
<div class="single_gallary_item">
<img src="assets/img/blog/post_gsi5.jpg" alt="image">
</div>
<div class="single_gallary_item">
<img src="assets/img/blog/post_gsi6.jpg" alt="image">
</div>
<div class="single_gallary_item">
<img src="assets/img/blog/post_gsi7.jpg" alt="image">
</div>
<div class="single_gallary_item">
<img src="assets/img/blog/post_gsi4.jpg" alt="">
</div>
<div class="single_gallary_item">
<img src="assets/img/blog/post_gsi3.jpg" alt="">
</div>
</div>
</div>
<div class="col-xl-4">
<div class="widget_tab md-mt-30">
<ul class="nav nav-tabs">
<li><a class="active" data-toggle="tab" href="#post1">POPULAR</a>
</li>
<!-- <li><a data-toggle="tab" href="#post2">RELATED</a>
</li>
<li><a data-toggle="tab" href="#post3">POPULAR</a>
</li> -->
</ul>
<div class="tab-content">
<div id="post1" class="tab-pane fade show in active">

	<?php
// if(isset($_POST['popularview'])){
$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "http://localhost:3051/news/latest/blogs");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl,CURLOPT_USERPWD,"demo:demo");

	$data = curl_exec($curl); 
	
	 curl_close( $curl );    
		$alldata= json_decode($data);
			
?>

	<?php	
$i='1';
	foreach ($alldata as $key => $popularnews) {
	
?>
<div class="widget tab_widgets mb30">
<div class="single_post widgets_small">
<div class="post_img">
<div class="img_wrap">
<a href="#">
<img src="http://localhost:3051/<?php echo $popularnews->blog_image ?>" alt="">
</a>
</div>
</div>
<div class="single_post_text">
<div class="meta2 meta_separator1"> <a href="#"><?php echo $popularnews->news_category; ?></a>
<a href="http://localhost/faridabad/details_id.php?_id=<?php echo $popularnews->_id; ?>"><?php echo $popularnews->publish_timestamp; ?></a>
</div>
<h4><a href="http://localhost/faridabad/details_id.php?_id=<?php echo $popularnews->_id; ?>"><?php echo $popularnews->blog_heading; ?></a></h4>
</div>
</div>


</div>
<?php }?>


<!-- <div class="widget tab_widgets mb30">
<div class="single_post widgets_small">
<div class="post_img">
<div class="img_wrap">
<a href="#">
<img src="assets/img/header/widget/tab1.jpg" alt="">
</a>
</div>
</div>
<div class="single_post_text">
<div class="meta2 meta_separator1"> <a href="#">Faridabad Jyoti</a>
<a href="#">March 26, 2020</a>
</div>
<h4><a href="post1.html">Copa America: Luis Suarez from devastated US</a></h4>
</div>
</div>


</div> -->
</div>


</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="feature_carousel_area mb40">
<div class="container">
<div class="row">
<div class="col-12">
<div class="heading">
<h2 class="widget-title">कोरोना</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="feature_carousel owl-carousel nav_style1">

<?php


	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "http://localhost:3051/news/category/corona");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl,CURLOPT_USERPWD,"demo:demo");
	$data = curl_exec($curl); 
	curl_close( $curl );    
	$alldata= json_decode($data);
			
	foreach ($alldata as $key => $briefnews) {
	 // print_r($briefnews);
	
?> 

<div class="single_post post_type6 post_type7">

<div class="post_img gradient1">
<a href="http://localhost/faridabad/details_id.php?_id=<?php echo $briefnews->_id; ?>">
<img src="http://localhost:3051/<?php echo $briefnews->blog_image ?>" alt="">
</a>
</div>
<div class="single_post_text">
<div class="meta5"> <a href="http://localhost/faridabad/details_id.php?_id=<?php echo $briefnews->_id; ?>"><?php echo $briefnews->blog_heading; ?></a>
<a href="http://localhost/faridabad/details_id.php?_id=<?php echo $briefnews->_id; ?>"><?php echo $briefnews->publish_timestamp; ?></a>
</div>
<h4>
<!-- <a href="post1.html"><?php echo $briefnews->blog_content; ?></a> -->
</h4>
</div>
</div>
<?php }?>


</div>

</div>
</div>
</div>
</div>


<div class="container">
<div class="row">
<div class="col-lg-6 col-lg-8">
<h2 class="widget-title">दिल्ली</h2>
<?php


	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "http://localhost:3051/news/category/delhi");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl,CURLOPT_USERPWD,"demo:demo");
	$data = curl_exec($curl); 
	curl_close( $curl );    
	$alldata= json_decode($data);
			
	foreach ($alldata as $key => $briefnews) {
		 // print_r($briefnews);
	
?> 
<div class="carousel_post2_type3 nav_style1 owl-carousel">
<div class="single_post post_type3">
<div class="post_img">
<div class="img_wrap">
<img src="http://localhost:3051/<?php echo $briefnews->blog_image ?>" alt="">
</div> <span class="tranding">
<i class="fas fa-bolt"></i>
</span>
</div>
<div class="single_post_text">
<div class="meta3"> <a href="http://localhost/faridabad/details_id.php?_id=<?php echo $briefnews->_id; ?>"><?php echo $briefnews->author; ?></a>
<a href="http://localhost/faridabad/details_id.php?_id=<?php echo $briefnews->_id; ?>"><?php echo $briefnews->publish_timestamp; ?></a>
</div>
<h4><a href="http://localhost/faridabad/details_id.php?_id=<?php echo $briefnews->_id; ?>"><?php echo $briefnews->blog_heading; ?> </a></h4>
<div class="space-10"></div>
<p class="post-p"><?php echo $briefnews->blog_content; ?></p>
</div>
</div>
</div>

<?php }?>
<div class="border_black"></div>
<div class="space-30"></div>
<div class="row">
<div class="col-lg-6">
<div class="single_post widgets_small">
<div class="post_img">
<div class="img_wrap">
<img src="assets/img/img6.jpg" alt="">
</div> <span class="tranding">
<i class="fas fa-bolt"></i>
</span>
</div>
<div class="single_post_text">
<div class="meta2"> <a href="#"> Faridabad Jyoti </a>
<a href="#">April 08, 2021</a>
</div>
<h4><a href="post1.html">Gangster से इश्क की सजा! डॉक्टर की बेटी गैंगस्टर को दे बैठी दिल, 2 माह रही जेल में…जानिए ये पूरी कहानी</a></h4>
</div>
</div>
<div class="space-15"></div>
<div class="border_black"></div>
<div class="space-15"></div>
<div class="single_post widgets_small">
<div class="post_img">
<div class="img_wrap">
<img src="assets/img/img7.jpg" alt="">
</div> <span class="tranding">
<i class="fas fa-bolt"></i>
</span>
</div>
<div class="single_post_text">
<div class="meta2"> <a href="#">Faridabad Jyoti</a>
<a href="#"> March 18, 2021</a>
</div>
<h4><a href="post1.html">Faridabad: विद्या मंदिर पब्लिक स्कूल की मनमानी, बकाया ड्यूज क्लीयर करो, तभी मिलेगा रिजल्ट...</a></h4>
</div>
</div>
<div class="space-15"></div>
<div class="border_black"></div>
<div class="space-15"></div>
<div class="single_post widgets_small">
<div class="post_img">
<div class="img_wrap">
<img src="assets/img/img7.jpg" alt="">
</div> <span class="tranding">
<i class="fas fa-bolt"></i>
</span>
</div>
<div class="single_post_text">
<div class="meta2"> <a href="#">Faridabad Jyoti</a>
<a href="#">March 18, 2021</a>
</div>
<h4><a href="post1.html">Faridabad: 36 लाख 40 हजार की लूट, CIA- बॉर्डर इंस्पेक्टर मलिक़ की टीम ने 7 लुटेरों को दबोचा, 31,72,000 रु बरामद</a></h4>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="single_post widgets_small">
<div class="post_img">
<div class="img_wrap">
<img src="assets/img/img8.jpg" alt="">
</div> <span class="tranding">
<i class="fas fa-bolt"></i>
</span>
</div>
<div class="single_post_text">
<div class="meta2"> <a href="#">Faridabad Jyoti</a>
<a href="#">March 18, 2021</a>
 </div>
<h4><a href="post1.html">Faridabad: दिल्ली-मुंबई वडोदरा एक्सप्रेस वे में बाधक बने फरीदाबाद बाईपास पर 143 अवैध निर्माण ढहाए जाएंगे</a></h4>
</div>
</div>
<div class="space-15"></div>
<div class="border_black"></div>
<div class="space-15"></div>
<div class="single_post widgets_small">
<div class="post_img">
<div class="img_wrap">
<img src="assets/img/img9.jpg" alt="">
</div> <span class="tranding">
<i class="fas fa-bolt"></i>
</span>
</div>
<div class="single_post_text">
<div class="meta2"> <a href="#">Faridabad Jyoti</a>
<a href="#">March 13, 2021</a>
</div>
<h4><a href="post1.html">Panipat: नाजुक हालत में अकेला छोड़ा भागा पति, महिला बैंक मैनेजर की मौत, दहेज प्रताड़ना का आरोप</a></h4>
</div>
</div>
<div class="space-15"></div>
<div class="border_black"></div>
<div class="space-15"></div>
<div class="single_post widgets_small">
<div class="post_img">
<div class="img_wrap">
<img src="assets/img/img10.jpg" alt="">
</div> <span class="tranding">
<i class="fas fa-bolt"></i>
</span>
</div>
<div class="single_post_text">
<div class="meta2"> <a href="#">Faridabad Jyoti</a>
<a href="#">February 03, 2021</a>
</div>
<h4><a href="post1.html">Haryana: टिकैत ने जींद में भरी हुंकार, कमजोर विपक्ष और राहुल गांधी की कमजोरी के कारण नहीं झुक रही है सरकार...</a></h4>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-12 col-lg-4">
<div class="follow_box widget mb30 mt-md-60">
<h2 class="widget-title">Follow Us</h2>
<div class="social_shares">
<a class="single_social social_facebook" href="#"> <span class="follow_icon"><i class="fab fa-facebook-f"></i></span>
34,456 <span class="icon_text">Fans</span>
</a>
<a class="single_social social_twitter" href="#"> <span class="follow_icon"><i class="fab fa-twitter"></i></span>
34,456 <span class="icon_text">Followers</span>
</a>
<a class="single_social social_youtube" href="#"> <span class="follow_icon"><i class="fab fa-youtube"></i></span>
34,456 <span class="icon_text">Subscribers</span>
</a>
<a class="single_social social_instagram" href="#"> <span class="follow_icon"><i class="fab fa-instagram"></i></span>
34,456 <span class="icon_text">Followers</span>
</a>
<a class="single_social social_vimeo" href="#"> <span class="follow_icon"><i class="fab fa-vimeo-v"></i></span>
34,456 <span class="icon_text">Followers</span>
</a>
<a class="single_social social_medium" href="#"> <span class="follow_icon"><i class="fab fa-medium-m"></i></span>
34,456 <span class="icon_text">Followers</span>
</a>
</div>
</div>

<div class="widget tab_widgets mb30">
<h2 class="widget-title">Most View</h2>
<div class="post_type2_carousel owl-carousel nav_style1" id='news'>



</div>

</div>

</div>
</div>
</div>
</div>





<div class="video_posts pt30 half_bg60">
<div class="container">
<div class="row">
<div class="col-12">
<div class="heading white">
<h2 class="widget-title">Video News</h2>
</div>
</div>
</div>
<div class="space-50"></div>
<div class="viceo_posts_wrap">
<div class="row">
<div class="col-lg-8">
<div class="single_post post_type3 post_type11 margintop-60- xs-mb30">
<div class="post_img">
<div class="img_wrap">
<a href="#" class="play_btn">
<img src="assets/img/video/video1.jpg" alt="">
</a>
</div> <a href="#" class="youtube_middle"><i class="fab fa-youtube"></i></a>
</div>
<div class="single_post_text padding30 fourth_bg">
<div class="meta3"> <a href="#">Faridabad Jyoti</a>
<a href="#">March 26, 2020</a>
</div>
<h4><a href="post1.html">Riots Report Shows London Needs To Maintain Police Numbers, Says Mayor</a></h4>
</div>
</div>
</div>


<div class="col-lg-4">
<div class="popular_carousel_area mb30 md-mt-30">
<h2 class="widget-title">Popular Posts</h2>
<div class="popular_carousel owl-carousel nav_style1" id='popular'>



</div>

</div>
</div>
</div>
</div>
</div>
</div>


<div class="entertrainments">
<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="row">
<div class="col-12">
<div class="heading">
<h2 class="widget-title">Entertrainment News</h2>
</div>
</div>
</div>
<div class="entertrainment_carousel mb30">

<div class="entertrainment_item">
<div class="row justify-content-center">
	<?php


	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "http://localhost:3051/news/category/Entertrainment");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl,CURLOPT_USERPWD,"demo:demo");
	$data = curl_exec($curl); 
	curl_close( $curl );    
	$alldata= json_decode($data);
			
	foreach ($alldata as $key => $briefnews) {
		 // print_r($briefnews);
	
?> 
<div class="col-md-6">
<div class="single_post post_type3 mb30">
<div class="post_img">
<div class="img_wrap">
<a href="#">
<img src="http://localhost:3051/<?php echo $briefnews->blog_image ?>" alt="">
</a>
</div>
</div>
<div class="single_post_text">
<div class="meta3"> <a href="http://localhost/faridabad/details_id.php?_id=<?php echo $briefnews->_id; ?>"><?php echo $briefnews->news_category; ?></a>
<a href="http://localhost/faridabad/details_id.php?_id=<?php echo $briefnews->_id; ?>"><?php echo $briefnews->publish_timestamp; ?></a>
</div>
<h4><a href="http://localhost/faridabad/details_id.php?_id=<?php echo $briefnews->_id; ?>"><?php echo $briefnews->blog_heading; ?></a></h4>
<div class="space-10"></div>
<p class="post-p"><?php echo substr($briefnews->blog_content, 0, 50); ?></p>
</div>
</div>
</div>
<?php }?>
</div>
</div>

<div class="row">
<div class="col-12">
<div class="sports">
<div class="row">
<div class="col-12">
<div class="heading">
<h2 class="widget-title">Sports News</h2>
</div>


</div>
</div>
<div class="row">

<div class="col-md-6">
<div class="single_post post_type3 mb30">
<div class="post_img">
<a href="#">
<img src="assets/img/sports/sportsbig1.jpg" alt="">
</a> <span class="tranding">
<i class="fas fa-bolt"></i>
</span>
</div>
<div class="single_post_text">
<div class="meta3"> <a href="#">Faridabad Jyoti</a>
<a href="#">March 26, 2020</a>
</div>
<h4><a href="post1.html">Copa America: Luis Suarez from devastated US</a></h4>
<div class="space-10"></div>
<p class="post-p">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
<div class="space-20"></div> <a href="#" class="readmore">Read More</a>
</div>
</div>
</div>

<div class="col-md-6">
<div class="sports_carousel owl-carousel nav_style1">

<div class="sports_carousel_item">
 <?php
$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "http://localhost:3051/news/category/Sports");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl,CURLOPT_USERPWD,"demo:demo");
	$data = curl_exec($curl); 
	curl_close( $curl );    
	$alldata= json_decode($data);

	
foreach ($alldata as $key => $briefnews) {
		 // print_r($briefnews);
	
?> 
<div class="single_post widgets_small">
<div class="post_img">
<div class="img_wrap">
<a href="http://localhost/faridabad/details_id.php?_id=<?php echo $briefnews->_id; ?>">
<img src="http://localhost:3051/<?php echo $briefnews->blog_image ?>" alt="">
</a>
</div>
</div>
<div class="single_post_text">
<div class="meta2"> <a href="http://localhost/faridabad/details_id.php?_id=<?php echo $briefnews->_id; ?>"><?php echo $briefnews->news_category; ?></a>
<a href="#"><?php echo $briefnews->publish_timestamp; ?></a>
</div>
<h4><a href="http://localhost/faridabad/details_id.php?_id=<?php echo $briefnews->_id; ?>"><?php echo $briefnews->blog_heading; ?></a></h4>
</div>
</div>
<?php }?>

</div>
<div class="sports_carousel_item">
	<?php foreach ($alldata as $key => $briefnews) {
		 // print_r($briefnews);
	
?> 
<div class="single_post widgets_small">
<div class="post_img">
<div class="img_wrap">
<a href="http://localhost/faridabad/details_id.php?_id=<?php echo $briefnews->_id; ?>">
<img src="assets/img/blog/blog_small1.jpg" alt="">
</a>
</div>
</div>
<div class="single_post_text">
<div class="meta2"> <a href="http://localhost/faridabad/details_id.php?_id=<?php echo $briefnews->_id; ?>"><?php echo $briefnews->news_category; ?></a>
<a href="http://localhost/faridabad/details_id.php?_id=<?php echo $briefnews->_id; ?>"><?php echo $briefnews->publish_timestamp; ?></a>
</div>
<h4><a href="http://localhost/faridabad/details_id.php?_id=<?php echo $briefnews->_id; ?>"><?php echo $briefnews->blog_heading; ?></a></h4>
</div>
</div>
<?php }?>

</div>
</div>

</div>
</div>
</div>
</div>
</div>
<div class="banner_area mt50 mb60 xs-mt60">
<a href="#">
<img src="assets/img/bg/banner1.png" alt="">
</a>
</div>
<div class="row">
<div class="col-12">
<div class="businerss_news">
<div class="row">
<div class="col-6 align-self-center">
<h2 class="widget-title">Business News</h2>
</div>
<div class="col-6 text-right align-self-center"> <a href="#" class="see_all mb20">See All</a>
</div>
</div>
<div class="row">
<div class="col-12">
	<?php


	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "http://localhost:3051/news/category/Business");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl,CURLOPT_USERPWD,"demo:demo");
	$data = curl_exec($curl); 
	curl_close( $curl );    
	$alldata= json_decode($data);
			
	foreach ($alldata as $key => $briefnews) {
		 // print_r($briefnews);
	
?> 
<div class="single_post post_type3 post_type12 mb30">
<div class="post_img">
<div class="img_wrap">
<a href="#">
<img src="assets/img/business/business1.jpg" alt="">
</a>
</div>
</div>
<div class="single_post_text">
<div class="meta3"> <a href="#">uiux.subash</a>
<a href="http://localhost/faridabad/details_id.php?_id=<?php echo $briefnews->_id; ?>"><?php echo $briefnews->publish_timestamp; ?></a>
</div>
<h4><a href="http://localhost/faridabad/details_id.php?_id=<?php echo $briefnews->_id; ?>"><?php echo $briefnews->blog_heading; ?></a></h4>
<div class="space-10"></div>
<p class="post-p"><?php echo substr($briefnews->blog_content, 0, 100); ?></p>
<div class="space-20"></div> <a href="http://localhost/faridabad/details_id.php?_id=<?php echo $briefnews->_id; ?>" class="readmore">Read more</a>
</div>
</div>
<?php }?>

</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="row">
<div class="col-lg-6 col-lg-12">

<div class="widget mb30">
<h2 class="widget-title">Most share</h2>

<div class="widget4_carousel owl-carousel nav_style1">


<div class="carousel_items">
	<?php

// if(isset($_POST['trendview'])){
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "http://localhost:3051/news/trending/blogs");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl,CURLOPT_USERPWD,"demo:demo");
	$data = curl_exec($curl); 
	curl_close( $curl );    
	$alldata= json_decode($data);
	$i='1';		
	foreach ($alldata as $key => $trending) {
	
?> 
<div class="single_post widgets_small widgets_type4">
<div class="post_img number">
<h2><?php echo $i++;?></h2>
</div>
<div class="single_post_text">
<div class="meta2"> <a href="#"><?php echo $trending->blog_heading; ?></a>
<a href="http://localhost/faridabad/details_id.php?_id=<?php echo $briefnews->_id; ?>"><?php echo $trending->publish_timestamp; ?></a>
</div>
<h4><a href="http://localhost/faridabad/details_id.php?_id=<?php echo $briefnews->_id; ?>"><?php echo substr($trending->blog_content, 0, 50); ?></a></h4>
<ul class="inline socail_share">
<li> <a href="http://localhost/faridabad/details_id.php?_id=<?php echo $briefnews->_id; ?>"><i class="fab fa-twitter"></i>2.2K</a>
</li>
<li> <a href="http://localhost/faridabad/details_id.php?_id=<?php echo $briefnews->_id; ?>"><i class="fab fa-facebook-f"></i>2.2K</a>
</li>
</ul>
<div class="space-15"></div>
<div class="border_black"></div>
</div>
</div>
<?php } 
// }
?>

</div>


<div class="carousel_items">


<?php

// if(isset($_POST['trendview'])){
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "http://localhost:3051/news/trending/blogs");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl,CURLOPT_USERPWD,"demo:demo");
	$data = curl_exec($curl); 
	curl_close( $curl );    
	$alldata= json_decode($data);
	$i='1';		
	foreach ($alldata as $key => $trending) {
	
?> 
<div class="single_post widgets_small widgets_type4">
<div class="post_img number">
<h2><?php echo $i++;?></h2>
</div>
<div class="single_post_text">
<div class="meta2"> <a href="#"><?php echo $trending->blog_heading; ?></a>
<a href="#"><?php echo $trending->publish_timestamp; ?></a>
</div>
<h4><a href="post1.html"><?php echo substr($trending->blog_content, 0, 50); ?></a></h4>
<ul class="inline socail_share">
<li> <a href="#"><i class="fab fa-twitter"></i>2.2K</a>
</li>
<li> <a href="#"><i class="fab fa-facebook-f"></i>2.2K</a>
</li>
</ul>
<div class="space-15"></div>
<div class="border_black"></div>
</div>
</div>
<?php } 
// }
?>
</div>
</div>

</div>

</div>
<div class="col-lg-6 col-lg-12">

<div class="widget upcomming_macth mb30">
<div class="row">
<div class="col-8 align-self-center">
<h2 class="widget-title">Upcoming Matches</h2>
</div>
<div class="col-4 text-right align-self-center"> <a href="#" class="see_all mb20">See All</a>
</div>
</div>
<div class="single_post post_type13 widgets_small">
<div class="post_img">
<a href="#">
<img src="assets/img/flag/match1.png" alt="">
</a>
</div>
<div class="single_post_text">
<h4><a href="#" class="playing_teams">Germany <span>VS &nbsp;</span>France</a></h4>
<p class="meta macth_meta">Tomorrow &nbsp;|&nbsp;<span> M22:30 (CST) </span> &nbsp;</p>
</div>
<div class="circle_match_time">
<div class="first_circle circle"></div>
</div>
</div>
<div class="space-10"></div>
<div class="border_black"></div>
<div class="space-10"></div>
<div class="single_post post_type13 widgets_small">
<div class="post_img">
<a href="#">
<img src="assets/img/flag/match2.png" alt="">
</a>
</div>
<div class="single_post_text">
<h4><a href="#" class="playing_teams">Spain <span>VS &nbsp;</span>Portugal</a></h4>
<p class="meta macth_meta">Tomorrow&nbsp;|&nbsp;<span> M22:30 (CST) </span> &nbsp;</p>
</div>
<div class="circle_match_time">
<div class="second_circle circle"></div>
</div>
</div>
<div class="space-10"></div>
<div class="border_black"></div>
<div class="space-10"></div>
<div class="single_post post_type13 widgets_small">
<div class="post_img">
<a href="#">
<img src="assets/img/flag/match3.png" alt="">
</a>
</div>
<div class="single_post_text">
<h4><a href="#" class="playing_teams">Russia <span>VS &nbsp;</span>Italy</a></h4>
<p class="meta macth_meta">Tomorrow&nbsp;|&nbsp;<span> M22:30 (CST) </span> &nbsp;</p>
</div>
<div class="circle_match_time">
<div class="third_circle circle"></div>
</div>
</div>
<div class="space-10"></div>
<div class="border_black"></div>
<div class="space-10"></div>
<div class="single_post post_type13 widgets_small">
<div class="post_img">
<a href="#">
<img src="assets/img/flag/match4.png" alt="">
</a>
</div>
<div class="single_post_text">
<h4><a href="#" class="playing_teams">Croatia <span>VS &nbsp;</span>England</a></h4>
<p class="meta macth_meta">Tomorrow&nbsp;|&nbsp;<span> M22:30 (CST) </span> &nbsp;</p>
</div>
<div class="circle_match_time">
<div class="fourth_circle circle"></div>
</div>
</div>
<div class="space-10"></div>
<div class="border_black"></div>
<div class="space-10"></div>
<div class="single_post post_type13 widgets_small">
<div class="post_img">
<a href="#">
<img src="assets/img/flag/match5.png" alt="">
</a>
</div>
<div class="single_post_text">
<h4><a href="#" class="playing_teams">Germany <span>VS &nbsp;</span>France</a></h4>
<p class="meta macth_meta">Tomorrow&nbsp;|&nbsp;<span> M22:30 (CST) </span> &nbsp;</p>
</div>
<div class="circle_match_time">
<div class="fifth_circle circle"></div>
</div>
</div>
</div>

</div>
<div class="col-lg-6 col-lg-12">
<div class="box widget news_letter mb30">
<h2 class="widget-title">News Letter</h2>
<p>Your email address will not be this published. Required fields are News Today.</p>
<div class="space-20"></div>
<div class="signup_form">
<form action="https://quomodosoft.com/html/newsprk/index.html">
<input class="signup" type="email" placeholder="Your email">
<input type="button" class="cbtn" value="sign up">
</form>
<div class="space-10"></div>
<p>We hate spam as much as you do</p>
</div>
</div>
</div>
<div class="col-lg-6 col-lg-12">
<div class="widget category mb30">
<div class="row">
<div class="col-6 align-self-center">
<h2 class="widget-title">Categories</h2>
</div>
<div class="col-6 text-right align-self-center"> <a href="#" class="see_all mb20">See All</a>
</div>
</div>
<ul>
<li>
<a href="#" style="background: url(assets/img/categories/category1.jpg);"> <span>Restaurant</span>
<img src="assets/img/icon/union.png" alt="">
</a>
</li>
<li>
<a href="entertrainment.html" style="background: url(assets/img/categories/category2.jpg);"> <span>Entertainment</span>
<img src="assets/img/icon/union.png" alt="">
</a>
</li>
<li>
<a href="feature.html" style="background: url(assets/img/categories/category3.jpg);"> <span>Feature</span>
<img src="assets/img/icon/union.png" alt="">
</a>
</li>
<li>
<a href="business.html" style="background: url(assets/img/categories/category4.jpg);"> <span>Business</span>
<img src="assets/img/icon/union.png" alt="">
</a>
</li>
<li>
<a href="trending.html" style="background: url(assets/img/categories/category5.jpg);"> <span>Trending</span>
<img src="assets/img/icon/union.png" alt="">
</a>
</li>
<li>
<a href="sports.html" style="background: url(assets/img/categories/category6.jpg);"> <span>Sports</span>
<img src="assets/img/icon/union.png" alt="">
</a>
</li>
</ul>
</div>
</div>
<div class="col-lg-6 col-lg-12">
<div class="banner2 mb30">
<a href="#">
<img src="assets/img/bg/sidebar-1.png" alt="">
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="space-70"></div>

<div class="footer footer_area1 primay_bg">
<div class="container">
<div class="cta">
<div class="row">
<div class="col-md-6 align-self-center">
<div class="footer_logo logo">
<a href="index.html">
<img src="assets/img/footer_logo.png" alt="logo">
</a>
</div>
<div class="social2">
<ul class="inline">
<li><a href="#"><i class="fab fa-instagram"></i></a>
</li>
<li><a href="#"><i class="fab fa-facebook-f"></i></a>
</li>
<li><a href="#"><i class="fab fa-youtube"></i></a>
</li>
<li><a href="#"><i class="fab fa-instagram"></i></a>
</li>
</ul>
</div>
</div>
<div class="col-md-6 col-lg-4 offset-lg-2 align-self-center">
<div class="signup_form">
<form action="https://quomodosoft.com/html/newsprk/index.html" method="post">
<input class="signup" type="email" placeholder="Your email address">
<input type="button" class="cbtn" value="sign up">
</form>
<p>We hate spam as much as you do</p>
</div>
</div>
</div>
</div>
<div class="border_white"></div>
<div class="space-40"></div>
<div class="row justify-content-center">
<div class="col-lg-8">
<div class="row">
<div class="col-sm-6 col-lg">
<div class="single_footer_nav border_white_right">
<h3 class="widget-title2">News categories</h3>
<div class="row">
<div class="col-lg-6">
<ul>
<li><a href="#">Politics</a>
</li>
<li><a href="#">Business</a>
</li>
<li><a href="#">Faridabad Jyoti</a>
</li>
<li><a href="#">Science</a>
</li>
<li><a href="#">Health</a>
</li>
<li><a href="#">Sports</a>
</li>
<li><a href="#">Entertainment</a>
</li>
</ul>
</div>
<div class="col-lg-6">
<ul>
<li><a href="#">Education</a>
</li>
<li><a href="#">Obituaries</a>
</li>
<li><a href="#">Corrections</a>
</li>
<li><a href="#">Education</a>
</li>
<li><a href="#">Today’s Paper</a>
</li>
<li><a href="#">Corrections</a>
</li>
<li><a href="#">Foods</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg">
<div class="single_footer_nav">
<h3 class="widget-title2">Living</h3>
<div class="row">
<div class="col-lg-6">
<ul>
<li><a href="#">Crossword</a>
</li>
<li><a href="#">Food</a>
</li>
<li><a href="#">Automobiles</a>
</li>
<li><a href="#">Education</a>
</li>
<li><a href="#">Health</a>
</li>
<li><a href="#">Magazine</a>
</li>
<li><a href="#">Weddings</a>
</li>
</ul>
</div>
<div class="col-lg-6">
<ul>
<li><a href="#">Classifieds</a>
</li>
<li><a href="#">Photographies</a>
</li>
<li><a href="#">NYT Store</a>
</li>
<li><a href="#">Journalisms</a>
</li>
<li><a href="#">Public Editor</a>
</li>
<li><a href="#">Tools & Services</a>
</li>
<li><a href="#">My Account</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="space-40"></div>
<div class="border_white"></div>
<div class="space-40"></div>
<div class="row">
<div class="col-sm-6 col-lg-5">
<div class="single_footer_nav border_white_right">
<h3 class="widget-title2">Opinion</h3>
 <div class="row">
<div class="col-lg-6">
<ul>
<li><a href="#">Today’s Opinion</a>
</li>
<li><a href="#">Op-Ed Contributing</a>
</li>
<li><a href="#">Contributing Writers</a>
</li>
<li><a href="#">Business News</a>
</li>
<li><a href="#">Collections</a>
</li>
<li><a href="#">Today’s Paper</a>
</li>
<li><a href="#">Saturday Review</a>
</li>
<li><a href="#">Product Review</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-7">
<div class="twitter_feeds">
<h3 class="widget-title2">Twitter feed</h3>
<div class="single_twitter_feed border_white_bottom">
<div class="twitter_feed_icon"> <i class="fab fa-twitter"></i>
</div>
<h6>Cyber Monday Sale, Save 33% on Jannah theme during our year-end Sale, Purchase a new license for your next project… <span>@Faridabad Jyoti #Faridabad Jyoti https://dribbble.com/subash_chandra</span></h6>
<p>March 26, 2020</p>
</div>
<div class="single_twitter_feed">
<div class="twitter_feed_icon"> <i class="fab fa-twitter"></i>
</div>
<h6>Cyber Monday Sale, Save 33% on Jannah theme during our year-end Sale, Purchase a new license for your next project… <span>@Faridabad Jyoti #Faridabad Jyoti https://dribbble.com/subash_chandra</span></h6>
<p>March 26, 2020</p>
</div>
<div class="single_twitter_feed">
<div class="twitter_feed_icon"> <i class="fab fa-twitter"></i>
</div>
<h6>Cyber Monday Sale, Save 33% on Jannah theme during our year-end Sale, Purchase a new license for your next project… <span>@Faridabad Jyoti #Faridabad Jyoti https://dribbble.com/subash_chandra</span></h6>
<p>March 26, 2020</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="extra_newss border_white_left pl-4">
<h3 class="widget-title2">More news</h3>
<div class="single_extra_news border_white_bottom">
<p>Faridabad Jyoti <span> / March 26, 2020</span>
</p> <a href="#">Nancy zhang a chinese busy woman and dhaka</a>
<span class="news_counter">1</span>
</div>
<div class="single_extra_news border_white_bottom">
<p>Faridabad Jyoti <span> / March 26, 2020</span>
</p> <a href="#">Nancy zhang a chinese busy woman and dhaka</a>
<span class="news_counter">2</span>
</div>
<div class="single_extra_news border_white_bottom">
<p>Faridabad Jyoti <span> / March 26, 2020</span>
</p> <a href="#">Nancy zhang a chinese busy woman and dhaka</a>
<span class="news_counter">3</span>
</div>
<div class="single_extra_news border_white_bottom">
<p>Faridabad Jyoti <span> / March 26, 2020</span>
</p> <a href="#">Nancy zhang a chinese busy woman and dhaka</a>
<span class="news_counter">4</span>
</div>
<div class="single_extra_news">
<p>Faridabad Jyoti <span> / March 26, 2020</span>
</p> <a href="#">Nancy zhang a chinese busy woman and dhaka</a>
<span class="news_counter">5</span>
</div>
<div class="space-40"></div>
<div class="border_white_bottom"></div>
<div class="space-40"></div>
<div class="footer_contact">
<h3 class="widget-title2">Faridabad Jyoti news services</h3>
<div class="single_fcontact">
<div class="fcicon">
<img src="assets/img/icon/mobile.png" alt="">
</div> <a href="#">On your mobile</a>
</div>
<div class="single_fcontact">
<div class="fcicon">
<img src="assets/img/icon/speacker.png" alt="">
</div> <a href="#">On smart speakers</a>
</div>
<div class="single_fcontact">
<div class="fcicon">
<img src="assets/img/icon/evelope.png" alt="">
 </div> <a href="#">Contact Faridabad Jyoti news</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="copyright">
<div class="container">
<div class="row">
<div class="col-lg-6 align-self-center">
<p>&copy; Copyright 2020, All Rights Reserved</p>
</div>
<div class="col-lg-6 align-self-center">
<div class="copyright_menus text-right">
<div class="language"></div>
<div class="copyright_menu inline">
<ul>
<li><a href="#">About</a>
</li>
<li><a href="#">Advertise</a>
</li>
<li><a href="#">Privacy & Policy</a>
</li>
<li><a href="#">Contact Us</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		var mostview='yes';
$.ajax({ 
	url: "ajax.php",
	method: 'post',
	data:{mostview:mostview},
    context: document.body,
        success: function(data){
           $("#news").html(data);
        }});
});

</script>

<script type="text/javascript">
	$(document).ready(function(){
		var popularview='yes';
$.ajax({ 
	url: "ajax.php",
	method: 'post',
	data:{popularview:popularview},
    context: document.body,
        success: function(data){
           $("#popular").html(data);
        }});
});

</script>



<script type="text/javascript">
	$(document).ready(function(){
		var categoryview='yes';
$.ajax({ 
	url: "ajax.php",
	method: 'post',
	data:{categoryview:categoryview},
    context: document.body,
        success: function(data){
           $("#category").html(data);
        }});
});

</script>


<script type="text/javascript">
	$(document).ready(function(){
		var briefview='yes';
$.ajax({ 
	url: "ajax.php",
	method: 'post',
	data:{briefview:briefview},
    context: document.body,
        success: function(data){
           $("#brief").html(data);
        }});
});

</script>


<script src="assets/js/plugins/jquery.2.1.0.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/plugins/jquery.nav.js"></script>
<script src="assets/js/plugins/jquery.waypoints.min.js"></script>
<script src="assets/js/plugins/jquery-modal-video.min.js"></script>
<script src="assets/js/plugins/owl.carousel.js"></script>
<script src="assets/js/plugins/popper.min.js"></script>
<script src="assets/js/plugins/circle-progress.js"></script>
<script src="assets/js/plugins/slick.min.js"></script>
<script src="assets/js/plugins/stellarnav.js"></script>
<script src="assets/js/plugins/wow.min.js"></script>
<script src="assets/js/main.js"></script>
<script defer src="../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"si":10,"rayId":"644dd22c9ad9e920","r":1,"version":"2021.4.0"}'></script>
</body>

</html>