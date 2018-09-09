<?php
include '../lib/Include.php';
//include '../lib/Auth.php';
include 'lib/AuthAdmin.php';
include '../lib/session.php';
include '../Partials/admin_header.php';
include 'lib/CrudBackOff.php';
include 'lib/Traiteur.php';
$cc = new CrudBackOff();
$conn = $cc->getConnexion();
//$cc->DeleteTraiteur($conn,$_POST['Var']);
//$req = $cc->DisplayReservTrait($conn);
if (isset($_POST['Engr'])) {
  $cc->ConfReservTrait($conn,$_POST['delete']);
}
if (isset($_POST['Engr2'])) {
  $cc->AnnulReservTrait($conn,$_POST['Var']);
}

$req = $cc->DisplayReservTrait($conn);
 ?>
 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
   <div class="panel panel-warning">
   <div class="panel-heading">Gérer les réservations des traiteurs</div>
 <div class="panel-body">
   <div class="table-responsive">
     <div class="panel-body">

       <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Action</th>
                        <th>Date de réservation</th>
                        <th>Prix de réservation</th>
                        <th>Periode</th>
                        <th>Confirmation</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
  while ($data = $req->fetch()) {

  ?>
                      <tr>
                        <td>
                          <form id="registration-form" method="POST" class="form-horizontal" action="ConfirmReservTrai.php" style="margin-left:7px;">
                   					<div class="form-group">
                              <button type="submit" id="Conf_b" name="Engr" class="btn" onclick="return confirm('Vous etes sur !!!!');" >Confirmer</button>
                              <input type="text" name="delete" value="<?php echo $data['Id_tra']; ?>" hidden>
                            </div>
                          </form>
                          <form id="registration-form" method="POST" class="form-horizontal" action="#" style="margin-left:7px;">
                            <div class="form-group">
                            <button type="submit" id="Modif_b" name="Engr2" class="btn" onclick="return confirm('Vous etes sur !!!!');" >Annuler</button>
                              <input type="text" name="Var" value="<?php echo $data['Id_tra']; ?>" hidden>
                            </div>
                          </form>
                        </td>
                        <td><?php echo $data['Date_reserv']; ?></td>
                        <td><?php echo $data['Prix_reserv']; ?></td>
                        <td><?php echo $data['Periode']; ?></td>
                        <td><?php echo $data['Confirmation']; ?></td>
                      </tr>
                      </tbody>
                      <?php
                   }
				?>
                      </table>
                      <?php
                      	$req->closeCursor();
                      	?>
         </div>
 </div>
</div>
</div>
</div>
</body>
</html>
