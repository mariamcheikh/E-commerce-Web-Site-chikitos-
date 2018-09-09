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
if (isset($_POST['Engr'])) {
  $cc->DeleteTable($conn,$_POST['delete']);
}

$req = $cc->DisplayTable($conn);
 ?>
 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
   <div class="panel panel-warning">
   <div class="panel-heading">Gérer les tables</div>
 <div class="panel-body">
   <div class="table-responsive">
     <div class="panel-body">
       <div ng-app="MonModule">
<div ng-controller="commentsCtrl">
<form>
Rechercher :<input type="text" ng-model="query" class="form-control" placeholder="Recherche">
Trier par :<select ng-model="order" class="form-control" name="field4">
<option value="Cin">Organiser par Numéro</option>
</select>
</form>
       <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Action</th>
                        <th>Numéro du table</th>
                        <th>Etat</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr ng-repeat="comment in comments | filter:query | orderBy:order">
                        <td>
                          <form id="registration-form" method="POST" class="form-horizontal" action="#" style="margin-left:7px;">
                   					<div class="form-group">
                              <button type="submit" id="Supp_b" name="Engr" class="btn" onclick="return confirm('Vous etes sur !!!!');" >Supprimer</button>
                              <input type="text" name="delete" value="{{comment.Id}}" hidden>
                            </div>
                          </form>
                          <form id="registration-form" method="GET" class="form-horizontal" action="Modifier_table.php" style="margin-left:7px;">
                            <div class="form-group">
                            <button type="submit" id="Modif_b" name="modif" class="btn" onclick="return confirm('Vous etes sur !!!!');" >Modifier</button>
                              <input type="text" name="Var" value="{{comment.Id}}" hidden>
                            </div>
                          </form>
                        </td>
                        <td>{{comment.Cin}}</td>
                        <td>{{comment.nom}}</td>
                      </tr>
                      </tbody>

                      </table>


                        <form method="POST" action="Excel1.php">
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

      ?>
    {
    "Id":"<?php echo $data['Id_table']; ?>",
    "Cin":"<?php echo $data['Numero_table']; ?>",
    "nom":"<?php echo $data['Etat_table']; ?>",
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
</div>
</body>
</html>
