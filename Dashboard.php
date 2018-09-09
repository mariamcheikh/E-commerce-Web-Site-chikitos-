<?php session_start();
if (empty($_SESSION['admin_session'])) {
 echo "<h1>Not Authorized</h1>
<p>You do not have permission to do that!</p>
 ";
  exit; 
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Your description here">
    <meta name="author" content="Your Name">
    <title>Gerer les Comptes</title>
	<!-- Custom fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/basic-template.css" rel="stylesheet" />

	<!-- BootstrapValidator CSS -->
    <link href="css/bootstrapValidator.min.css" rel="stylesheet"/>

	<!-- Custom styles for this template -->
    <link href="css/account.css" rel="stylesheet">
	
    <!-- jQuery and Bootstrap JS -->
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
		
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php
require'Users_Class.php';
require'PDO_DB_Config.php';
$DBase=new DBase_Connection();
$User=new User();
$DB=$DBase->DB_Connection();
?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CHIKITOS</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="Admin_logout.php">Logout</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
        <li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span> Gerer les Comptes</a></li>
            <li><a href="affiche_commande.php"><span class="glyphicon glyphicon-list-alt"></span> Gerer les Commandes</a></li>
            <li><a href="afficheContact.php"><span class="glyphicon glyphicon-list"></span> Gérer les Contacts</a></li>
            <li><a href="admin/Gerer_Traiteur.php"><span class="glyphicon glyphicon-list-alt"></span> Espace Réservation</a></li>
            <li><a href="afficheReclammation.php"><span class="glyphicon glyphicon-cog"></span> Gerer les reclammations</a></li>
			 <li><a href="Dashboards.php"><span class="glyphicon glyphicon-cog"></span> Gerer les produits</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="panel panel-warning filterable">
          <div class="panel-heading">Gerer les Comptes
<div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
          </div>
			  <div class="panel-body">
			    <div class="table-responsive">
            <table class="table table-striped">
            <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="#" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Nom" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Prenom" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Adresse mail" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Date d'inscription" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Etat du compte" disabled></th>
                    </tr>
                </thead>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>Adresse mail</th>
                  <th>Date d'inscription</th>
                  <th>Etat du compte</th>
                  <th>Option</th>
                </tr>
              </thead>
              <tbody>
                <?php $User->user_display($DB);?>
                </tbody>
                </table>
                </div>
			  </div>
		   </div>



</div>
</body>
<script type="text/javascript">
  $(document).ready(function(){
    $('.filterable .btn-filter').click(function(){
        var $panel = $(this).parents('.filterable'),
        $filters = $panel.find('.filters input'),
        $tbody = $panel.find('.table tbody');
        if ($filters.prop('disabled') == true) {
            $filters.prop('disabled', false);
            $filters.first().focus();
        } else {
            $filters.val('').prop('disabled', true);
            $tbody.find('.no-result').remove();
            $tbody.find('tr').show();
        }
    });

    $('.filterable .filters input').keyup(function(e){
        /* Ignore tab key */
        var code = e.keyCode || e.which;
        if (code == '9') return;
        /* Useful DOM data and selectors */
        var $input = $(this),
        inputContent = $input.val().toLowerCase(),
        $panel = $input.parents('.filterable'),
        column = $panel.find('.filters th').index($input.parents('th')),
        $table = $panel.find('.table'),
        $rows = $table.find('tbody tr');
        /* Dirtiest filter function ever ;) */
        var $filteredRows = $rows.filter(function(){
            var value = $(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
        /* Clean previous no-result if exist */
        $table.find('tbody .no-result').remove();
        /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
        $rows.show();
        $filteredRows.hide();
        /* Prepend no-result row if all rows are filtered */
        if ($filteredRows.length === $rows.length) {
            $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
        }
    });
});
</script>
</html>