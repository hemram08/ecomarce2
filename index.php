<?php 
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
  
      
   ?>
 

<!DOCTYPE HTML>
<head>
<title>Store Website</title>
<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all"/>
<!--bootstrap link-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="js/jquerymain.js"></script>
<script src="js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/nav.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script> 
<script type="text/javascript" src="js/nav-hover.js"></script>
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<script type="text/javascript">
  $(document).ready(function($){
    $('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
  });
</script>

<style>
.wrap{width: 100%;}
.grid_1_of_4:first-child {
    margin-left: 60;
}
.section.group {
    margin-left: 60px;
}
.images_1_of_4 img {
    width: 90%;
    height: 170px;
}
.register_account {
height: 320px;}
select#country {
width: 340px;
}
.listview_1_of_2.images_1_of_2 {
    margin-left: 0;
</style>
</head>
<body>

  <div class="wrap">
		<div class="header_top">

			<div class="logo">
				<a href="index.php"><img src="images/image.png" alt="" width="120px" height="100px"/></a>
			</div>
			  <div class="header_top_right">
			    <div class="search_box">

				    <form>
				    	<input type="text" value="Search for Products" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search for Products';}"><input type="submit" value="SEARCH">
				    </form>
			    </div>
			    <div class="shopping_cart">
					<div class="cart">
						<a href="#" title="View my shopping cart" rel="nofollow">
								<span class="cart_title">Cart</span>
								<span class="no_product">
								(2)
								</span>
							</a>
						</div>
			      </div>
				  
				  
				 
		   <div class="login btn btn-primary">
		  
		   
		   
		   
				<a href="login.php" style="text-decoration:none">Login</a>

		   
		   </div>
		 <div class="clear"></div>
	 </div>
	 <div class="clear"></div>
 </div>
<div class="menu">
	<ul id="dc_mega-menu-orange" class="dc_mm-orange">
	  <li><a href="index.php">Home</a></li>
	  <li><a href="products.php">Products</a> </li>
	  <li><a href="topbrands.php">Top Brands</a></li>
	   
		   <li><a href="cart.php">Cart</a></li>
		    <li><a href="savedproduct.php">compare</a></li>

	
	 
	  
		   <li><a href="profile.php">profile</a></li>


	  
	 
	  <li><a href="contact.php">Contact</a> </li>
	  <div class="clear"></div>
	</ul>
</div>




	 
	<div class="header_bottom">
		<div class="header_bottom_left">
		
			<div class="section group">
			
				<div class="listview_1_of_2 images_1_of_2">
				
					<div class="listimg listimg_2_of_1">
						 <a href="preview.php"> <img src="images/cloth.jpg" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>design cloths</h2>
						<p>Lorem ipsum dolor sit amet sed do eiusmod.</p>
						 <del>$70</del>
						 <p><span>$65</span></p>
						<div class="button"><span><a href="">Add to cart</a></span></div>
				   </div>
				   							 
			   </div>
			
			
			
			   <div class="listview_1_of_2 images_1_of_2">
				
					<div class="listimg listimg_2_of_1">
						 <a href="preview.php"> <img src="images/cloth1.jpg" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>product name</h2>
						<p>Lorem ipsum dolor sit amet sed do eiusmod.</p>
						 <del>$66</del>
						 <p><span>$58</span></p>
						<div class="button"><span><a href="">Add to cart</a></span></div>
				   </div>
				   							 
			   </div>
			   	
				
			   <div class="listview_1_of_2 images_1_of_2">
				
					<div class="listimg listimg_2_of_1">
						 <a href="preview.php"> <img src="images/cloth2.jpg" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>product name</h2>
						<p>Lorem ipsum dolor sit amet sed do eiusmod.</p>
						 <del>$80</del>
						 <p><span>$74</span></p>
						<div class="button"><span><a href="">Add to cart</a></span></div>
				   </div>
				   							 
			   </div>
			   	
			   
             <div class="listview_1_of_2 images_1_of_2">
				
					<div class="listimg listimg_2_of_1">
						 <a href="preview.php"> <img src="images/cloth3.jpg" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>product name</h2>
						<p>Lorem ipsum dolor sit amet sed do eiusmod.</p>
						 <del>$89</del>
						 <p><span>$80</span></p>
						<div class="button"><span><a href="#">Add to cart</a></span></div>
				   </div>
				   							 
			   </div>
			    
			</div>

		  <div class="clear"></div>
		</div>
			 <div class="header_bottom_right_images">
		   <!-- FlexSlider -->
             
			<section class="slider">
				  <div class="flexslider">
					<ul class="slides">
					     <li><img src="images/shos.jpg" alt="" height="450px"/></li>
						<li><img src="images/sari3.jpg" alt="" height="450px"/></li>
						<li><img src="images/sirt1.jpg" alt="" height="450px"/></li>
						<li><img src="images/sirt2.jpg" alt="" height="450px"/></li>
						<li><img src="images/sirt4.jpg" alt="" height="450px"/></li>
						<li><img src="images/download.png" alt="" height="450px"/></li>
						<li><img src="images/store.png" alt="" height="450px"/></li>
				    </ul>
				  </div>
	      </section>
<!-- FlexSlider -->
	    </div>
	  <div class="clear"></div>
  </div>	

 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Feature Products</h3>

    		</div>
    		<div class="clear"></div>
    	</div>
		
	      <div class="section group">
		  
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview.php"><img src="images/men1.jpg" alt="" /></a>
					 <h2>product name</h2>
					 <p>qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed  </p>
					 <p><span class="price">$55</span><span class="price">Rs.<del>$60</del></span></p>
				     <div class="button"><span><a href="#" class="details">Details</a></span></div>
				</div>

				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview.php"><img src="images/dress2.jpg" alt="" /></a>
					 <h2>product name</h2>
					 <p>typesetting, remaining essentially unchanged. It was popularised in</p>
					 <p><span class="price">$55</span><span class="price">Rs.<del>$60</del></span></p>
				     <div class="button"><span><a href="#" class="details">Details</a></span></div>
				</div>

				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview.php"><img src="images/men3.jpg" alt="" /></a>
					 <h2>product name</h2>
					 <p>text ever since the 1500s, when an unknown printer took a gallery</p>
					 <p><span class="price">$55</span><span class="price">Rs.<del>$60</del></span></p>
				     <div class="button"><span><a href="#" class="details">Details</a></span></div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview.php"><img src="images/dress4.jpg" alt="" /></a>
					 <h2>product name</h2>
					 <p>the more obscure Latin words, consectetur, from a Lorem Ipsum</p>
					 <p><span class="price">$55</span><span class="price">Rs.<del>$60</del></span></p>
				     <div class="button"><span><a href="#" class="details">Details</a></span></div>
				</div>



				  
				
				
			</div>
			
			<div class="content_bottom">
    		<div class="heading">
    		<h3>New Products</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
			
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview.php"><img src="images/dress1.jpg" alt="" /></a>
					 <h2>product name </h2>
					 <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
					 <p><span class="price">$34</span><span class="price"><del>$45</del></span></p>
				    <div class="button"><span><a href="#" class="details">Details</a></span></div>
				</div>

				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview.php"><img src="images/men2.jpg" alt="" /></a>
					 <h2>product name </h2>
					 <p>packages and web page editors now use Lorem Ipsum as their</p>
					 <p><span class="price">$34</span><span class="price"><del>$45</del></span></p>
				    <div class="button"><span><a href="#" class="details">Details</a></span></div>
				</div>

				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview.php"><img src="images/dress3.jpg" alt="" /></a>
					 <h2>product name </h2>
					 <p>believable. If you are going to use a passage of Lorem Ipsum,</p>
					 <p><span class="price">$34</span><span class="price"><del>$45</del></span></p>
				    <div class="button"><span><a href="#" class="details">Details</a></span></div>
				</div>

				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview.php"><img src="images/men4.jpg" alt="" /></a>
					 <h2>product name </h2>
					 <p>but the majority have suffered alteration in some form, </p>
					 <p><span class="price">$34</span><span class="price"><del>$45</del></span></p>
				    <div class="button"><span><a href="#" class="details">Details</a></span></div>
				</div>
				  
				
			</div>

<div class="content_bottom">
    		<div class="heading">
    		<h3>New Shoes</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
			
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview.php"><img src="images/shoes-img1.png" alt="" /></a>
					 <h2>new model</h2>
					 <p>There are many variations of passages of Lorem Ipsum</p>
					 <p><span class="price">$50</span><span class="price">$<del>60</del></span></p>
				     <div class="button"><span><a href="preview.php?detail=<?php 
				     //echo $val['id'];?>" class="details">Details</a></span></div>
				</div>

				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview.php"><img src="images/shoes-img2.png" alt="" /></a>
					 <h2>new model</h2>
					 <p>many web sites still in their infancy. Various versions have </p>
					 <p><span class="price">$50</span><span class="price">$<del>55</del></span></p>
				     <div class="button"><span><a href="preview.php?detail=<?php 
				     //echo $val['id'];?>" class="details">Details</a></span></div>
				</div>

				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview.php"><img src="images/shoes-img3.png" alt="" /></a>
					 <h2>new model</h2>
					 <p>need to be sure there isn't anything embarrassing hidden</p>
					 <p><span class="price">$50</span><span class="price">$<del>64</del></span></p>
				     <div class="button"><span><a href="preview.php?detail=<?php 
				     //echo $val['id'];?>" class="details">Details</a></span></div>
				</div>

				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview.php"><img src="images/shoes-img5.png" alt="" /></a>
					 <h2>new model</h2>
					 <p>There are many variations of passages of Lorem Ipsum available,</p>
					 <p><span class="price">$50</span><span class="price">$<del>70</del></span></p>
				     <div class="button"><span><a href="preview.php?detail=<?php 
				     //echo $val['id'];?>" class="details">Details</a></span></div>
				</div>
				  
				
			</div>



</div>
 </div>


</div>
   
   <div class="footer">
   	  <div class="wrapper">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4>Information</h4>
						<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Customer Service</a></li>
						<li><a href="#"><span>Advanced Search</span></a></li>
						<li><a href="#">Orders and Returns</a></li>
						<li><a href="#"><span>Contact Us</span></a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Why buy from us</h4>
						<ul>
						<li><a href="about.php">About Us</a></li>
						<li><a href="faq.php">Customer Service</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="contact.php"><span>Site Map</span></a></li>
						<li><a href="preview.php"><span><a href=" http://localhost/ecomarce-shop/admin/dasbord.php" >admin</a></span></a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>My account</h4>
						<ul>
							<li><a href="contact.php">Sign In</a></li>
							<li><a href="index.php">View Cart</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Track My Order</a></li>
							<li><a href="faq.php">Help</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Contact</h4>
						<ul>
							<li><span>+88-01713458599</span></li>
							<li><span>+88-01813458552</span></li>
						</ul>
						<div class="social-icons">
							<h4>Follow Us</h4>
					   		  <ul>
							      <li class="facebook"><a href="#" target="_blank"> </a></li>
							      <li class="twitter"><a href="#" target="_blank"> </a></li>
							      <li class="googleplus"><a href="#" target="_blank"> </a></li>
							      <li class="contact"><a href="#" target="_blank"> </a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>
				</div>
			</div>
			<div class="copy_right">
				<p>nhemram08@gmail.com &amp; All rights Reseverd </p>
		   </div>
     </div>
    </div>

    <script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
    <link href="css/flexslider.css" rel='stylesheet' type='text/css' />
	  <script defer src="js/jquery.flexslider.js"></script>
	  <script type="text/javascript">
		$(function(){
		  SyntaxHighlighter.all();
		});
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
</body>
</html>
