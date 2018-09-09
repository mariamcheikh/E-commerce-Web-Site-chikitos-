<?php
//$auth = 0;
include '../lib/Include.php';
//include '../lib/Auth.php';
include 'lib/AuthAdmin.php';
include '../lib/session.php';
include '../Partials/admin_header.php';
include 'lib/CrudBackOff.php';
include 'lib/Traiteur.php';
//var_dump($_SESSION['Auth']);
   if (isset($_POST['cin']) && isset($_POST['non']) && isset($_POST['prenom']) && isset($_POST['Adresse'])
   && isset($_POST['telephone']) && isset($_POST['age']) && isset($_POST['dip']) && isset($_POST['email'])
   && isset($_POST['salaire'])) {
  //   checkCsrf();
  $c = new traiteur();
  $c->setCin($_POST['cin']);
  $c->setNom($_POST['non']);
  $c->setPrenom($_POST['prenom']);
  $c->setAdresse($_POST['Adresse']);
  $c->setNum_tele($_POST['telephone']);
  $c->setAge($_POST['age']);
  $c->setDiplome($_POST['dip']);
  $c->setEmail($_POST['email']);
  $c->setsalaire_plats($_POST['salaire']);
$cc = new CrudBackOff();
$conn = $cc->getConnexion();
if (isset($_GET['Var'])) {
//echo 'moooooooooooooooooooooooooooooooooooooooooooooooooooooooddddiiiiiiiiiiiiiiiiiiiiif';
}
else {
$cc->InsertTraiteur($conn,$c);
}
   }
   if (isset($_GET['Var'])) {
//echo 'dccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccs';
   }
 ?>
 <script type="text/javascript" language="Javascript" src="admin/js/jquery.js"></script>
 <script type="text/javascript" language="Javascript" src="js/ControlForms.js"></script>
 <style type="text/css">
 .Err_msg {
   color: #ff5b5b;
   display: inline;
  display: none;
 }
 </style>
 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
   <div class="panel panel-warning">
   <div class="panel-heading">Ajout un traiteur</div>
 <div class="panel-body">
   <div class="table-responsive">



     <div class="panel-body">
 				<form id="registration-form" method="POST" class="form-horizontal" action="Index.php">
 					<div class="form-group">
 						<label class="col-md-2 control-label" for="nom">Cin</label>
 						<div class="col-md-4">
 							<input type="text" class="form-control" id="cin" name="cin" placeholder="Votre Cin"  />
              <div class="Err_msg">Erreur</div>
 						</div>
 					</div>
 					<div class="form-group">
 						<label class="col-md-2 control-label" for="prenom">Nom</label>
 						<div class="col-md-4">
 							<input type="text" class="form-control" id="non" name="non" placeholder="Votre Nom"  />
              <div class="Err_msg">Erreur</div>
 						</div>
 					</div>
 					<div class="form-group">
 						<label class="col-md-2 control-label" for="birthday">Prenom</label>
 						<div class="col-md-4">
 							<input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre prenom" />
              <div class="Err_msg">Erreur</div>
 						</div>
 					</div>
 				    <div class="form-group">
 						<label class="col-md-2 control-label" for="mobile">Adresse</label>
 						<div class="col-md-4">
 							<input type="tel" class="form-control" id="adresse" name="Adresse" placeholder="Votre adresse"  />
              <div class="Err_msg">Erreur</div>
 						</div>
 					</div>
 				    <div class="form-group">
 						<label class="col-md-2 control-label" for="telephone">Téléphone</label>
 						<div class="col-md-4">
 							<input type="tel" class="form-control" id="telephone" name="telephone" placeholder="Votre Numéro Téléphone"  />
              <span class="Err_msg">Erreur</span>
 						</div>
 					</div>
 					<div class="form-group">
 						<label class="col-md-2 control-label" for="adresse1">Age </label>
 						<div class="col-md-4">
 							<input type="text" class="form-control" id="age" name="age" placeholder="Votre Age" />
              <div class="Err_msg">Erreur</div>
 						</div>
 					</div>
 					<div class="form-group">
 						<label class="col-md-2 control-label" for="adresse2">Diplome</label>
 						<div class="col-md-4">
 							<input type="text" class="form-control" id="dip" name="dip" placeholder="Votre Diplome" />
              <div class="Err_msg">Erreur</div>
 						</div>
 					</div>
          <div class="form-group">
            <label class="col-md-2 control-label" for="adresse2">Email</label>
            <div class="col-md-4">
              <input type="email" class="form-control" id="email" name="email" placeholder="Votre Email"  />
              <div class="Err_msg">Erreur</div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label" for="adresse2">Salaire par plat</label>
            <div class="col-md-4">
              <input type="number" class="form-control" id="sal" name="salaire" placeholder="Votre Salaire" />
              <div class="Err_msg">Erreur</div>
            </div>
            <?php echo csrfInput(); ?>
          </div>

 					<button type="submit" id="bt_enr" name="Engr" class="btn" style="margin-left:450px;">Enregistrer</button>
        </div>
 				</form>


         </div>
 </div>
</div>



</div>

</div>
</body>
</html>
