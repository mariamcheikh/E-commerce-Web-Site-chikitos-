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
$req = $cc->DisplayTraiteur($conn);
 ?>
 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
   <div class="panel panel-warning">
   <div class="panel-heading">Gérer les traiteurs</div>
 <div class="panel-body">
   <div class="table-responsive">
     <div class="panel-body">
       <div ng-app="MonModule">
<div ng-controller="commentsCtrl">
<form >
Rechercher :<input type="text" ng-model="query" class="form-control" placeholder="Recherche">
Trier par :<select ng-model="order" class="form-control" name="field4">
<option value="Cin">Organiser par cin</option>
<option value="nom">Organiser par nom</option>
<option value="prenom">Organiser par prenom</option>
<option value="numero">Organiser par numero</option>
<option value="salaire">Organiser par salaire</option>
<option value="etat">Organiser par etat</option>
</select>
</form>
       <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Action</th>
                        <th>Cin</th>
                        <th>Non</th>
                        <th>Prenom</th>
                        <th>Téléphone</th>
                        <th>Salaire</th>
                        <th>état</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr ng-repeat="comment in comments | filter:query | orderBy:order">
                        <td>
                          <form id="registration-form" method="POST" class="form-horizontal" action="DeleteTraiteur.php" style="margin-left:7px;">
                   					<div class="form-group">
                              <button type="submit" id="Supp_b" name="Engr" class="btn" onclick="return confirm('Vous etes sur !!!!');" >Supprimer</button>
                              <input type="text" name="delete" value="{{comment.Id}}" hidden>
                            </div>
                          </form>
                          <form id="registration-form" method="GET" class="form-horizontal" action="Modifier_traiteur.php" style="margin-left:7px;">
                            <div class="form-group">
                            <button type="submit" id="Modif_b" name="Engr" class="btn" >Modifier</button>
                              <input type="text" name="Var" value="{{comment.Id}}" hidden>
                            </div>
                          </form>
                        </td>
                        <td>{{comment.Cin}}</td>
                        <td>{{comment.nom}}</td>
                        <td>{{comment.prenom}}</td>
                        <td>{{comment.numero}}</td>
                        <td>{{comment.salaire}}</td>
                        <td>{{comment.etat}}</td>
                      </tr>
                      </tbody>

                      </table>
                    <form method="POST" action="Excel.php">
                      <button type="submit" id="bt_enr" name="excel" class="btn" style="margin-left:400px;">Export Excel</button>
                    </form>
         </div>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.13/angular.min.js"></script>
<script src="https://code.angularjs.org/1.2.14/angular-route.min.js"></script>
<script>
var app = angular.module('MonModule',[]);
app.controller('commentsCtrl',function commentsCtrl ($scope) {console.log($scope);
$scope.comments = [
  <?php
  while ($data = $req->fetch()) {
    //var_dump($data);
  ?>
{
"Id":"<?php echo $data['Id_tra']; ?>",
"Cin":"<?php echo $data['Cin']; ?>",
"nom":"<?php echo $data['Nom']; ?>",
"prenom":"<?php echo $data['Prenom']; ?>",
"numero":"<?php echo $data['Num_tele']; ?>",
"salaire":"<?php echo $data['salaire_plats']; ?>",
"etat":"<?php echo $data['etat']; ?>",
},
<?php
}
 ?>
];

<?php
  $req->closeCursor();
  ?>
});
</script>
</div>
       </div>
 </div>
</div>
</div>
</div>
</body>
</html>
