<?php session_start();
if (empty($_SESSION['user_session'])) {
header ('location:login.php');
  exit; 
}
 ?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Best Store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Best Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->
<!-- cart -->
	<script src="js/simpleCart.min.js"> </script>
<!-- cart -->
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
</head>
	
<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-grid">
				<div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<ul>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 <span>567</span> 892</li>
						<li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="login.html">Login</a></li>
						<li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="register.html">Register</a></li>
					</ul>
				</div>
				<div class="header-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<ul class="social-icons">
						<li><a href="#" class="facebook"></a></li>
						<li><a href="#" class="twitter"></a></li>
						<li><a href="#" class="g"></a></li>
						<li><a href="#" class="instagram"></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="logo-nav">
				<div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
					<h1><a href="index.html">Best Store <span>Shop anywhere</span></a></h1>
				</div>
				<div class="logo-nav-left1">
					<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li><a href="index.html">Home</a></li>	
							<!-- Mega Menu -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
								
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Furniture <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Home Collection</h6>
												<li><a href="furniture.html">Cookware</a></li>
												<li><a href="furniture.html">Sofas</a></li>
												<li><a href="furniture.html">Dining Tables</a></li>
												<li><a href="furniture.html">Shoe Racks</a></li>
												<li><a href="furniture.html">Home Decor</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Office Collection</h6>
												<li><a href="furniture.html">Carpets</a></li>
												<li><a href="furniture.html">Tables</a></li>
												<li><a href="furniture.html">Sofas</a></li>
												<li><a href="furniture.html">Shoe Racks</a></li>
												<li><a href="furniture.html">Sockets</a></li>
												<li><a href="furniture.html">Electrical Machines</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Decorations</h6>
												<li><a href="furniture.html">Toys</a></li>
												<li><a href="furniture.html">Wall Clock</a></li>
												<li><a href="furniture.html">Lighting</a></li>
												<li><a href="furniture.html">Top Brands</a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<li><a href="short-codes.html">Short Codes</a></li>
							<li><a href="mail.html">Mail Us</a></li>
						</ul>
					</div>
					</nav>
				</div>
				<div class="logo-nav-right">
					<div class="search-box">
						<div id="sb-search" class="sb-search">
							<form>
								<input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
							</form>
						</div>
					</div>
						<!-- search-scripts -->
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
							<script>
								new UISearch( document.getElementById( 'sb-search' ) );
							</script>
						<!-- //search-scripts -->
				</div>
				<div class="header-right">
					<div class="cart box_1">
						<a href="checkout.html">
							<h3> <div class="total">
								<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
								<img src="images/bag.png" alt="" />
							</h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
						<div class="clearfix"> </div>
					</div>	
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //header -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Single Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- single -->
	<div class="single">
		<div class="container">
			<div class="col-md-4 products-left">
				<div class="filter-price animated wow slideInUp" data-wow-delay=".5s">
					<h3>Filter By Price</h3>
					<ul class="dropdown-menu1">
							<li><a href="">								               
							<div id="slider-range"></div>							
							<input type="text" id="amount" style="border: 0" />
							</a></li>	
					</ul>
						<script type='text/javascript'>//<![CDATA[ 
						$(window).load(function(){
						 $( "#slider-range" ).slider({
								range: true,
								min: 0,
								max: 100000,
								values: [ 10000, 60000 ],
								slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
								}
					 });
					$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );


						});//]]>
						</script>
						<script type="text/javascript" src="js/jquery-ui.min.js"></script>
					 <!---->
				</div>
				<div class="categories animated wow slideInUp" data-wow-delay=".5s">
					<h3>Categories</h3>
					<ul class="cate">
						<li><a href="products.html">Best Selling</a> <span>(15)</span></li>
						<li><a href="products.html">Home Collections</a> <span>(16)</span></li>
							<ul>
								<li><a href="products.html">Cookware</a> <span>(2)</span></li>
								<li><a href="products.html">New Arrivals</a> <span>(0)</span></li>
								<li><a href="products.html">Home Decore</a> <span>(1)</span></li>
							</ul>
						<li><a href="products.html">Decorations</a> <span>(15)</span></li>
							<ul>
								<li><a href="products.html">Wall Clock</a> <span>(2)</span></li>
								<li><a href="products.html">New Arrivals</a> <span>(0)</span></li>
								<li><a href="products.html">Lighting</a> <span>(1)</span></li>
								<li><a href="products.html">Top Brands</a> <span>(0)</span></li>
							</ul>
					</ul>
				</div>
				<div class="men-position animated wow slideInUp" data-wow-delay=".5s">
					<a href="single.php"><img src="images/29.jpg" alt=" " class="img-responsive" /></a>
					<div class="men-position-pos">
						<h4>Summer collection</h4>
						<h5><span>55%</span> Flat Discount</h5>
					</div>
				</div>
			</div>
			
			
			
			
<?PHP
include_once ("crudProduit.php");
$cc=new crudProduit();

if (isset($_POST['enregistrerModif'])){
	$newProduit=new Produit($_POST['taille'],$_GET['nom'],$_POST['description'],$_POST['image'],$_POST['prixproduit'],$_POST['categorie']);
	$cc->afficheProduit1($newProduit,$cc->conn);
	header('location:single.php');
}
else{
$nom=$_GET['nom'];
$produit=$cc->recupererProduit($nom,$cc->conn);
//var_dump($produit);
?>
			
			
			
			
			
			
			<div class="col-md-8 single-right">
				<div class="col-md-5 single-right-left animated wow slideInUp" data-wow-delay=".5s">
					<div class="flexslider">
						<ul class="slides">
						
						<?PHP foreach ($produit as $ch){ ?>
						
							<li>
							
								<div class="thumb-image"><?php echo '<img src="data:image;base64,'.base64_encode($ch['image']).'" data-imagezoom="true" class="img-responsive" />'; ?></div>
							</li>
							
						
						</ul>
					</div>
					<!-- flixslider -->
						<script defer src="js/jquery.flexslider.js"></script>
						<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
						<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
						</script>
					<!-- flixslider -->
				</div>
				<div class="col-md-7 single-right-left simpleCart_shelfItem animated wow slideInRight" data-wow-delay=".5s">
					<h3>Produits :</h3>
					<!--raiting-->
					
					<?php
include_once ("crudRating.php");
$cc=new crudRating();

if (isset($_POST["supprimer"])){
	$cc->supprimerRating($_POST["user_id"],$cc->conn);
	
}


$list=$cc->afficheRating($cc->conn);
	//var_dump($list);
	
	?> 
				
					
					<!--rating-->
				<form method="POST" action="ajoutRating.php">
					<input type="text" name="user_id" hidden >
					<input type="text" name="idproduit" hidden >

					<div class="rating1">
						<span class="starRating">
	
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					 <input type="submit" value="aimer" >
					  <input type="text" value="<?PHP echo $_GET['nom'] ?>" name="nom" hidden>
				</form>
                     <!--raiting-->
					 
					 
					 
					 <form method="POST" action="afficheRating.php">
					<input type="text" name="user_id" hidden >
					<input type="text" name="idproduit" hidden >

					<div class="rating1">
						<span class="starRating">
	
							<input id="rating5" type="radio" name="rating" value="<?php echo $l['rating']?>">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="<?php echo $l['rating']?>">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="<?php echo $l['rating']?>">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="<?php echo $l['rating']?>">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="<?php echo $l['rating']?>">
							<label for="rating1">1</label>
						</span>
					</div>
				
				</form>	
					 
					 
						<h5>Taille :</h5>
						<p> <?php echo $ch['taille']?></p>
					
					
						
						<h5>Nom : </h5>
                        <p><?php echo $ch['nom']?></p>						
						
						
						<h5>Description :</h5>
						<p><?php echo $ch['description']?></p>
						
				
				
						<h5>Prix :</h5>
						<p><?php echo $ch['prixproduit']?></p>
						
						<h5>Categorie :</h5>
						<p><?php echo $ch['categorie']?></p>
						
					
					<?PHP } ?>
					<?PHP } ?>
				
					<div class="occasion-cart">
					
						<b><a class="item_add" href="#">add to cart </a></b>
					</div>
					<div class="social">
						<div class="social-left">
							<p>Share On :</p>
						</div>
						<div class="social-right">
							<ul class="social-icons">
								<li><a href="#" class="facebook"></a></li>
								<li><a href="#" class="twitter"></a></li>
								<li><a href="#" class="g"></a></li>
								<li><a href="#" class="instagram"></a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
				<div class="bootstrap-tab animated wow slideInUp" data-wow-delay=".5s">
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							
							<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Commentaires</a></li>
							<li role="presentation" class="dropdown"></li>
						</ul>
						
						<?php
include_once ("crudCommentaires.php");
$cc=new crudCommentaires();
$list=$cc->afficheCommentaires($cc->conn);
	//var_dump($list);
	?> 
	
	
	
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="profile" aria-labelledby="profile-tab">
								<div class="bootstrap-tab-text-grids">
									<div class="bootstrap-tab-text-grid">
										
	                                    <?php
	                               foreach ($list as $l){
									   
                                         ?>
										<div class="bootstrap-tab-text-grid-right">
										<hr style="width:200px; color:red; background-color:black;" /> 



									<tr>
									
											<td><?php echo $l['description']?></td></tr>
											


	
										
										</div>
	                                <?php
	                                      }
	                                  ?>
										<div class="clearfix"> </div>
									</div>
									<div class="bootstrap-tab-text-grid">
										<div class="bootstrap-tab-text-grid-left">	
										</div>
										
										<div class="clearfix"> </div>
									</div>
									<div class="add-review">
									<tr>
									


										<h4>Ajouter un commentaire</h4>
										<form  id = "com" action="ajoutCommentaires.php" method="POST">
											<textarea type="text" name="description" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
										<input type="text" value="<?PHP echo $l['user_id'] ?>" name="user_id" hidden>
                                        <input type="text" value="<?PHP echo $l['idproduit'] ?>" name="idproduit"hidden>
										<input type="text" value="<?PHP echo $_GET['nom'] ?>" name="nom"hidden>
										   
											<input type="submit" value="ajouter un commentaire" >
										</form>
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="dropdown1" aria-labelledby="dropdown1-tab">
								<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
							</div>
							<div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="dropdown2" aria-labelledby="dropdown2-tab">
								<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //single -->
<!-- single-related-products -->
	<div class="single-related-products">
		<div class="container">
			<h3 class="animated wow slideInUp" data-wow-delay=".5s">Related Products</h3>
			<p class="est animated wow slideInUp" data-wow-delay=".5s">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
				deserunt mollit anim id est laborum.</p>
			<div class="new-collections-grids">
				<div class="col-md-3 new-collections-grid">
					<div class="new-collections-grid1 animated wow slideInLeft" data-wow-delay=".5s">
						<div class="new-collections-grid1-image">
							<a href="single.php" class="product-image"><img src="images/8.jpg" alt=" " class="img-responsive"></a>
							<div class="new-collections-grid1-image-pos">
								<a href="single.php">Quick View</a>
							</div>
							<div class="new-collections-grid1-right">
								<div class="rating">
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive">
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<h4><a href="single.php">Running Shoes</a></h4>
						<p>Vel illum qui dolorem eum fugiat.</p>
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p><i>$280</i> <span class="item_price">$150</span><a class="item_add" href="#">add to cart </a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 new-collections-grid">
					<div class="new-collections-grid1-sub">
						<div class="new-collections-grid1 animated wow slideInLeft" data-wow-delay=".6s">
							<div class="new-collections-grid1-image">
								<a href="single.php" class="product-image"><img src="images/6.jpg" alt=" " class="img-responsive"></a>
								<div class="new-collections-grid1-image-pos">
									<a href="single.php">Quick View</a>
								</div>
								<div class="new-collections-grid1-right">
									<div class="rating">
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
							<h4><a href="single.php">Wall Lamp</a></h4>
							<p>Vel illum qui dolorem eum fugiat.</p>
							<div class="new-collections-grid1-left simpleCart_shelfItem">
								<p><i>$480</i> <span class="item_price">$400</span><a class="item_add" href="#">add to cart </a></p>
							</div>
						</div>
					</div>
					<div class="new-collections-grid1-sub">
						<div class="new-collections-grid1 animated wow slideInLeft" data-wow-delay=".7s">
							<div class="new-collections-grid1-image">
								<a href="single.php" class="product-image"><img src="images/9.jpg" alt=" " class="img-responsive"></a>
								<div class="new-collections-grid1-image-pos">
									<a href="single.php">Quick View</a>
								</div>
								<div class="new-collections-grid1-right">
									<div class="rating">
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/1.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/1.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/1.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/1.png" alt=" " class="img-responsive">
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
							<h4><a href="single.php">Wall Lamp</a></h4>
							<p>Vel illum qui dolorem eum fugiat.</p>
							<div class="new-collections-grid1-left simpleCart_shelfItem">
								<p><i>$280</i> <span class="item_price">$150</span><a class="item_add" href="#">add to cart </a></p>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-3 new-collections-grid">
					<div class="new-collections-grid1 animated wow slideInLeft" data-wow-delay=".8s">
						<div class="new-collections-grid1-image">
							<a href="single.php" class="product-image"><img src="images/11.jpg" alt=" " class="img-responsive"></a>
							<div class="new-collections-grid1-image-pos">
								<a href="single.php">Quick View</a>
							</div>
							<div class="new-collections-grid1-right">
								<div class="rating">
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive">
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<h4><a href="single.php">Stones Bangles</a></h4>
						<p>Vel illum qui dolorem eum fugiat.</p>
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p><i>$340</i> <span class="item_price">$257</span><a class="item_add" href="#">add to cart </a></p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //single-related-products -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
					<h3>About Us</h3>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse.<span>Excepteur sint occaecat cupidatat 
						non proident, sunt in culpa qui officia deserunt mollit.</span></p>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".6s">
					<h3>Contact Info</h3>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".7s">
					<h3>Flickr Posts</h3>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/16.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/16.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/16.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".8s">
					<h3>Blog Posts</h3>
					<div class="footer-grid-sub-grids">
						<div class="footer-grid-sub-grid-left">
							<a href="single.php"><img src="images/9.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grid-sub-grid-right">
							<h4><a href="single.php">culpa qui officia deserunt</a></h4>
							<p>Posted On 25/3/2016</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="footer-grid-sub-grids">
						<div class="footer-grid-sub-grid-left">
							<a href="single.php"><img src="images/10.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grid-sub-grid-right">
							<h4><a href="single.php">Quis autem vel eum iure</a></h4>
							<p>Posted On 25/3/2016</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-logo animated wow slideInUp" data-wow-delay=".5s">
				<h2><a href="index.html">Best Store <span>shop anywhere</span></a></h2>
			</div>
			<div class="copy-right animated wow slideInUp" data-wow-delay=".5s">
				<p>&copy 2016 Best Store. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- zooming-effect -->
	<script src="js/imagezoom.js"></script>
<!-- //zooming-effect -->
</body>
</html>