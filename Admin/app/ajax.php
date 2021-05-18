
</!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php

if(isset($_POST['allview'])){
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
            <div class="col-md">
 
              <div class="card bd-0">
                <img  style="width: 12%; height: auto;" class="card-img-top img-fluid" src="http://localhost:3051/<?php echo $news->blog_image ?>" alt="Image">
                <div class="card-body bd bd-t-0 rounded-bottom">
                  <p><?php echo $news->blog_heading; ?></p>
                  <p class="card-text"><?php echo substr($news->blog_content, 0, 50); ?></p>
                  <form action="" method="" id='myformdelete'>
                  <button style="width: 60px;" class="success" id='delete'  type="button" onclick="mydelete('<?php echo $news->_id; ?>');">Delete</button>
                 
                </form>
               <button style="width: 60px;" class="success"   type="button"><a href="edit_news.php?_id=<?php echo $news->_id; ?>">Edit</a></button> 
                
                </div>

              </div>
            </div><!-- col -->
          
          
           
<?php } 
}
?>
</body>
<script src="../lib/jquery/jquery.js"></script>
    <script src="../lib/popper.js/popper.js"></script>
    <script src="../lib/bootstrap/bootstrap.js"></script>
<script type="text/javascript">  



function mydelete(id){
  // alert(id);
var answer = confirm ("Are you sure you want to Delete ?");

if (answer){   
  
       $.ajax({
      url:"http://localhost:3051/news/delete/"+id,
      method: 'DELETE',
      data:{"_id":id},
      success: function(data){
      console.log(data);  
//window.location.reload(true);     
      }
    });
     }

}
           </script>






</html>

