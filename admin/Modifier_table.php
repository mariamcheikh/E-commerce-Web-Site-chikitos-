<?php
//$auth = 0;
include '../lib/Include.php';
//include '../lib/Auth.php';
include 'lib/AuthAdmin.php';
include '../lib/session.php';
include '../Partials/admin_header.php';
include 'lib/CrudBackOff.php';
//include 'lib/Traiteur.php';
include 'lib/table.php';
$cc = new CrudBackOff();
$conn = $cc->getConnexion();
if (isset($_POST['Engr'])) {
$cc->EditTable($conn,$_POST['num_tab'],$_POST['Var']);
header('Location:Gerer_table.php');
die();
}
$req = $cc->SearchTable($conn,$_GET['Var']);
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
   <div class="panel-heading">Modifier une table</div>
 <div class="panel-body">
   <div class="table-responsive">



     <div class="panel-body">
 				<form id="registration-form" method="POST" class="form-horizontal" action="Modifier_table.php">
            <?php    $data = $req->fetch(); ?>
 					<div class="form-group">
 						<label class="col-md-2 control-label" for="nom">Numéro du table</label>
 						<div class="col-md-4">
 							<input type="text" class="form-control" id="Nume_tab" name="num_tab" value="<?php echo $data['Numero_table']; ?>" placeholder="Entre numéro du table" required >
                <input type="text" name="Var" value="<?php echo $data['Id_table']; ?>" hidden>
              <div class="Err_msg">Erreur</div>
 						</div>
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
