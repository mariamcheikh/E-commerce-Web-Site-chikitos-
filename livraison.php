<?php 
session_start();
//$_SESSION['user_session']=11;
include("config.php");
include("commande.php");
include("ligne.php");


class produit{
	private $idproduit;
	private $prixproduit;
	
	function __construct($idproduit,$prixproduit){
		$this->idproduit=$idproduit;
		$this->prixproduit=$prixproduit;
	}
}
$produit=new produit(0,0);
$comm=new commande($_SESSION['user_session'],0,0,0,0,0);
$DB_cnx = new DBase_Connection();
$DB=$DB_cnx->PDO_DBconnc();
$prodd=$comm->fiche($DB,$comm->recupercommande($DB,$_SESSION['user_session']));
?>

<!DOCTYPE html>
<html>
<head>
<title>livraison</title>

<link href="css3/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css3/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Google Maps and Places API -->
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&sensor=false"></script>

<!-- js -->
<script src="js/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript"></script>
<!-- cart -->
	<script src="js/simpleCart.min.js" > </script>
<!-- cart -->
<link rel="stylesheet" type="text/css" href="css3/jquery-ui.css">
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->

<!-- animation-effect -->
<link href="css3/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
<!-- geolocation doing -->
<script>


	<!--//excel-->

	   function fnExcelReport()
         {
               var tab_text="<table border='2px'><tr bgcolor='#87AFC6'>";
               var textRange; var j=0;
               tab = document.getElementById('MyTable'); // id of table
  
               for(j = 0 ; j < tab.rows.length ; j++)
               {    
                     tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";
                     //tab_text=tab_text+"</tr>";
               }
  
               tab_text=tab_text+"</table>";
   
               var ua = window.navigator.userAgent;
               var msie = ua.indexOf("MSIE ");
  
               if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
               {
                  txtArea1.document.open("txt/html","replace");
                  txtArea1.document.write(tab_text);
                  txtArea1.document.close();
                  txtArea1.focus();
                  sa=txtArea1.document.execCommand("SaveAs",true,"Global View Task.xls");
               } 
               else //other browser not tested on IE 11
                  sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text)); 
                 return (sa);
            }
	<!--//excel-->
function initGeolocation()
    {
            if( navigator.geolocation )
            {

              // Call getCurrentPosition with success and failure callbacks
              navigator.geolocation.getCurrentPosition( success, fail );
        }
        else
        {
              alert("Sorry, your browser does not support geolocation services.");
        }
    }

     var map;
     function success(position)
     {
           // Define the coordinates as a Google Maps LatLng Object
           var coords = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

           // Prepare the map options
           var mapOptions =
          {
                      zoom: 15,
                      center: coords,
                      mapTypeControl: false,
                      navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                      mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            // Create the map, and place it in the map_canvas div
            map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
			
            // Place the initial marker
            var marker = new google.maps.Marker({
                      position: coords,
                      map: map,
                      title: "votre position actuelle!"
            });
			
        }

        function fail()
        {
              // Could not obtain location
        }		
		        google.maps.event.addListener(map, 'click', function(event) {
		    placeMarker(event.latLng);
		  });
		 
		
			document.getElementById("latitude").value=position.latLng();
		
        </script>
</head>
	
<body onload="initGeolocation();">
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
				<a href="index.html"><img src="images/chikitos1.png" alt=" " class="img-responsive" /></a>
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
								<ul class="dropdown-menu multi-column columns-3">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Men's Wear</h6>
												<li><a href="products.html">Clothing</a></li>
												<li><a href="products.html">Wallets</a></li>
												<li><a href="products.html">Shoes</a></li>
												<li><a href="products.html">Watches</a></li>
												<li><a href="products.html">Accessories</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Women's Wear</h6>
												<li><a href="products.html">Clothing</a></li>
												<li><a href="products.html">Wallets,Bags</a></li>
												<li><a href="products.html">Footwear</a></li>
												<li><a href="products.html">Watches</a></li>
												<li><a href="products.html">Accessories</a></li>
												<li><a href="products.html">Jewellery</a></li>
												<li><a href="products.html">Beauty & Grooming</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Kid's Wear</h6>
												<li><a href="products.html">Kids Home Fashion</a></li>
												<li><a href="products.html">Boy's Clothing</a></li>
												<li><a href="products.html">Girl's Clothing</a></li>
												<li><a href="products.html">Shoes</a></li>
												<li><a href="products.html">Brand Stores</a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<li class="dropdown active">
								<a href="#" class="dropdown-toggle act" data-toggle="dropdown">Furniture <b class="caret"></b></a>
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
								<span><?php echo $comm->calcultotal($DB,$_SESSION['user_session']) ?> DNT</span></br> (<span ><?php echo $comm->getnumberproduit($DB,$_SESSION['user_session']) ; ?></span> items)</div>
								<img src="images/bag.png" alt="" />
							</h3>
						</a>
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
				<li class="active">Furniture</li>
			</ol>
		</div>
	</div>



<div class="mail animated wow zoomIn" data-wow-delay=".5s">
		<div class="container">
			<h3>Livraison</h3>
			<p class="est">l'emplacement exact ou vous voulez recevez votre commande</p>
		</br>
		</div>
		<iframe  style="margin-bottom:15px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3190.930365991079!2d10.179693114822893!3d36.89201407022662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2cb7aaac9f153%3A0x1115a29d11509fa0!2sSchool+Wafa!5e0!3m2!1sen!2stn!4v1458843557805" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	<div class="col-md-8 mail-grid-left animated wow slideInLeft" data-wow-delay=".5s">

	<div class="container">

		<table class="table">
			<tr>
				<td>
					<table class="table">
						<tr><h4><mark>VOTRE COMMANDE</mark></h4></tr>
						<?php
								foreach ($prodd  as  $donnees) {
								   
								?>
						<tr>
							<td width="130px"><?php echo $donnees['0']?></td>
							<td><?php echo "  ".$donnees['1']?></td>
							
						</tr>
						<?PHP } ?>
						<tr>
							<td>TOTAL</td>
							<td><?php echo $comm->calcultotal($DB,$_SESSION['user_session']); ?></td>
						</tr>	
						<br>
 						
					</table>
					<table  id="MyTable" hidden class="table">
						
						<?php
								foreach ($prodd  as  $donnees) {
								   
								?>
						<tr>
							<td width="130px"><?php echo $donnees['0']?></td>
							<td><?php echo "  ".$donnees['1']?></td>
							
						</tr>
						<?PHP } ?>
						<tr>
							<td>TOTAL</td>
							<td><?php echo $comm->calcultotal($DB,$_SESSION['user_session']); ?></td>
						</tr>	
						<br>
 						<a href="javascript:fnExcelReport()">Exporter en Excel</a><br>
					</table>
			    </td>
				<td>
			<div class="clearfix"> </div>
		
					<h4><mark>Coordonnées de livraison</mark></h4>
				</br>

<script type="text/javascript">
	
	function syncDates()

    { 
    	document.getElementById('date').value = document.getElementById('selecteurdemadate').value;
    	// console.log("==> Valeur de selecteurdemadate : " + document.getElementById('selecteurdemadate').value + " !");
        //console.log("==> Valeur de dateHidden : " + document.getElementById('date').value + " !");
    }

</script>
					<form method="POST" action="modifier.php">
					  <div class="form-group">
					    <label for="exampleInputEmail1">Adresse de livraison</label>
					    <input type="text" class="form-control" name="adresse" Only letters pattern="[a-zA-Z]+" value="<?php echo $comm->getbaseadresselivraison($DB,$_SESSION['user_session']);?>"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'adresse';}">
					  </div>
					  <div class="form-group">
					  <p id="demo"></p>

						

					    <label for="exampleInputPassword1">Date de livraison</label>

					    <input type="date" id="selecteurdemadate" class="form-control" name="dateSaisie"  onchange="syncDates();" >

					    <input type="hidden" id="date" name="date" >

					  </div>
					  <div class="form-group">
					    <label for="exampleInputFile">Mode de paiement</label>
					    <select class="form-control" name="choix">
						  <option value="a la livraison">à la livraison</option>
						  <option value="en ligne">en ligne</option>
						</select>
					  </div>
					  	<input type="submit" value="valider" name="valider" class="btn btn-danger">

					</form>
<script>									
									document.getElementById('selecteurdemadate').valueAsDate = new Date();
									// console.log('====> SALUT <=====');
	</script>
				</td>
				</tr>
			
</table>
</div>
</div>
				<div class="clearfix"> </div>
				
        <p class="bg-info" style="
    margin-right: 700px;
    margin-left: 30px;"> 
    Vous pouvez vérifier votre position actuelle </p>
        <br>
					<div id="map_canvas" style="height:500px" width="600" height="450" frameborder="0" style="border:0" allowfullscreen ></div>

			</div>
								

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
						<a href="single.html"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/16.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/16.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/16.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".8s">
					<h3>Blog Posts</h3>
					<div class="footer-grid-sub-grids">
						<div class="footer-grid-sub-grid-left">
							<a href="single.html"><img src="images/9.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grid-sub-grid-right">
							<h4><a href="single.html">culpa qui officia deserunt</a></h4>
							<p>Posted On 25/3/2016</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="footer-grid-sub-grids">
						<div class="footer-grid-sub-grid-left">
							<a href="single.html"><img src="images/10.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grid-sub-grid-right">
							<h4><a href="single.html">Quis autem vel eum iure</a></h4>
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
</body>
</html>