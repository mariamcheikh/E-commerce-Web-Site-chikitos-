<?php
include 'lib/Auth.php';
include 'lib/session.php';
include 'CrudFrontOffice.php';
include 'lib/Resev_tab.php';
$c = new  CrudFrontOff();
$conn = $c->getConnexion();
if (isset($_POST['modif'])) {
    if (isset($_POST['date_res']) && isset($_POST['nbr_per'])) {
        $tab = new reser_tab();
        $tab->setId_table($_GET['Var']);
        $tab->setDate_reserv($_POST['date_res']);
        $tab->setNbr_pers($_POST['nbr_per']);
        $c->UpdateReserv_tab($conn, $tab);
    }
}
//var_dump($_SESSION);
$req = $c->SearchReserv_tab($conn,$_GET['Var']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Réservation</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Best Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- Custom fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
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
    <!--<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>-->
    <!-- animation-effect -->
    <link href="css/animate.min.css" rel="stylesheet">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!-- //animation-effect -->



    <!-- BootstrapValidator CSS -->
    <link href="css/bootstrapValidator.min.css" rel="stylesheet"/>

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- jQuery and Bootstrap JS -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <!-- BootstrapValidator -->
    <script src="js/bootstrapValidator.min.js" type="text/javascript"></script>
    <!-- reCaptchaValidator -->
    <script src="js/reCaptcha2.min.js" type="text/javascript"></script>
    <script src="js/reCaptcha2.js" type="text/javascript"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
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
                    <li class="active"><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="register.html">Register</a></li>
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
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Réservation<b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>Réservation traiteur</h6>

                                                <li><a href="Consul_Traiteur.php">Consulter les traiteur disponible</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>Réservation table</h6>

                                                <li><a href="Consul_Table.php">Consulter les tables disponible</a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="short-codes.html">Short Codes</a></li>
                            <li><a href="mail.html">Mail Us</a></li>
                            <?php
                            if (!empty($_SESSION)) { ?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bonjour <?php echo $_SESSION['user_name'];?><b class="caret"></b></a>
                                    <ul class="dropdown-menu ">
                                        <li><a href="User_Account.php"><span class="glyphicon glyphicon-user"></span> Mon Compte</a></li>
                                        <li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Mes Commandes</li>
                                        <li><a href="#"><span class="glyphicon glyphicon-barcode"></span> Mes Coupons</a></li>
                                        <li><a href="#"><span class="glyphicon glyphicon-list"></span> Gérer mes Avis</a></li>
                                        <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Mes Message</li>
                                        <li><a href="Reservation_traiteur.php"><span class="glyphicon glyphicon-list"></span> Mes réservation des traiteurs</li>
                                        <li><a href="Reservation_table.php"><span class="glyphicon glyphicon-list"></span> Mes réservation des tables</li>
                                        <li><a href="User_AccountSetting.php"><span class="glyphicon glyphicon-cog"></span> Parametre du compte</a></li>
                                        <li class="divider"></li>
                                        <li><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span>Déconnexion</a></li>

                                    </ul>
                                </li>
                            <?php } ?>
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
            <li class="active">Réservation traiteur</li>
            <li class="active">Ajout une réservation</li>
        </ol>
    </div>
</div>
<br>
<!-- //breadcrumbs -->
<!-- register -->

<div class="container">
    <div class="panel panel-default">
        <div class="panel-body">
            <?php $data = $req->fetch(); ?>
            <form id="registration-form" method="POST" class="form-horizontal" action="#">
                <div class="form-group">
                    <label class="col-md-2 control-label" for="firstname">Date de Réservation</label>
                    <div class="col-md-4">
                        <input type="date" class="form-control" id="firstname" name="date_res" value="<?php echo $data['Date_reserv']; ?>" required >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="lastname">Nombre de personne</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="lastname" name="nbr_per" value="<?php echo $data['Nbr_pers']; ?>" required>
                    </div>
                </div>
        </div>
        <button type="submit" id="bt_enr" name="modif" class="btn" style="margin-left:50px;">Enregistrer</button>
    </div>
    </form>
</div>

</div>

</div>
<!-- //register -->
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
            <div class="clearfix"> </div>
        </div>

        <div class="copy-right animated wow slideInUp" data-wow-delay=".5s">
            <p>&copy 2016 Best Store. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
        </div>
    </div>
</div>
<!-- //footer -->
</body>
</html>
