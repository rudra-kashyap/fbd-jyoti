<?php

if(isset($_POST['mostview'])){
$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "http://localhost:3051/news/");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl,CURLOPT_USERPWD,"demo:demo");

	$data = curl_exec($curl); 
	
	 curl_close( $curl );    
		$alldata= json_decode($data);
			
?>
<div class="single_post2_carousel">
<?php	
$i='1';
	foreach ($alldata as $key => $news) {
	
?>
<div class="single_post widgets_small type8">
<div class="post_img">
<div class="img_wrap">
<img src="http://localhost:3051/<?php echo $news->blog_image ?>" alt="">
</div> <span class="tranding">
<i class="fas fa-bolt"></i>
</span>
</div>
<div class="single_post_text">
<div class="meta2"> <a href="http://localhost/faridabad/details_id.php?_id=<?php echo $news->_id; ?>"><?php echo $news->blog_heading; ?></a>
<a href="http://localhost/faridabad/details_id.php?_id=<?php echo $news->_id; ?>"><?php echo $news->publish_timestamp; ?></a>
</div>
<h4><a href="http://localhost/faridabad/details_id.php?_id=<?php echo $news->_id; ?>"><?php echo substr($news->blog_content, 0, 50); ?></a></h4>
</div>
<div class="type8_count">
<h2><?php echo $i++;?></h2>
</div>
</div>
<?php } 
}
?>


<?php
if(isset($_POST['popularview'])){
$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "http://localhost:3051/news/latest/blogs");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl,CURLOPT_USERPWD,"demo:demo");

	$data = curl_exec($curl); 
	
	 curl_close( $curl );    
		$alldata= json_decode($data);
			
?>
<div class="popular_items">
<div class="single_post type10 widgets_small mb15">
<div class="post_img">
<div class="img_wrap">
	<?php	
$i='1';
	foreach ($alldata as $key => $popularnews) {
	
?>
<a href="#">
<img  src="http://localhost:3051/<?php echo $popularnews->blog_image ?>" alt="">
</a>
</div> <span class="tranding tranding_border">
1
</span>
</div>
<div class="single_post_text">
<h4><a href="http://localhost/faridabad/details_id.php?_id=<?php echo $popularnews->_id; ?>"><?php echo substr($popularnews->blog_content, 0, 50); ?></a></h4>
<div class="meta4"> <a href="http://localhost/faridabad/details_id.php?_id=<?php echo $popularnews->_id; ?>"><?php echo $popularnews->blog_heading; ?></a>
</div>
<div class="meta4"> <a href="http://localhost/faridabad/details_id.php?_id=<?php echo $popularnews->_id; ?>"><?php echo $popularnews->news_category; ?></a>
</div>
<!-- <button class="sucess">Delete</button> -->
</div>
</div>
</div>
<?php } 
}
?>





