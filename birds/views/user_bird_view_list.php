<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/s/bs-3.3.5/dt-1.10.10,r-2.0.0/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/s/bs-3.3.5/dt-1.10.10,r-2.0.0/datatables.min.js"></script>

<script>$(document).ready( function () {
    $('#listView').DataTable();
} );</script>

<div class="container">
<center><h2>Bird Retriever</h2></center><br>
<div class="table-responsive">
<table id="listView" class="table table-striped" data-page-length='25'>
  <thead>
    <tr>
      <th>User</th>
      <th>Date</th>
      <th>Species</th>
      <th>Distance</th>
      <th>Sex</th>
      <th>Migrant</th>
      <th>Nest</th>
      <th>Egs</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  <?php require_once("../../PHPLogin.php");
  // the login object will do all login/logout stuff automatically
  // so this single line handles the entire login process.
  $login = new PHPLogin();
  if(!empty($birds)) {
  foreach($birds as $bird){ ?>
  <tr>
    <td><?= $bird->getBID() ?></td>
    <td width ="100px"><?= $bird->getDate() ?></td>
    <td><?= $bird->getSpecies() ?></td>
    <td><?= $bird->getDistance()  ?></td>
    <td><?= $bird->getSex() ?></td>
    <td><?= $bird->getMigrant() ?></td>
    <td><?= $bird->getnest() ?></td>
    <td><?= $bird->getEggs() ?></td>
    <td><a href='user.php?action=view_bird&target=<?= $bird->getBID() ?>' class="btn btn-default">View Full Record</button></a>
  </tr>
  <?php } }
  else {
    echo "<br><center><h4>No Records Available. Records will be available after they have added.</h4></center><br>";
  }?>
</tbody>
</table>
</div>
<br>
<center><a href='user.php?action=add_bird' class="btn btn-default btn-lg">Add New Bird Records</button></a>
<a href="../../index.php" class="btn btn-default btn-lg">Main Menu</button></a>
<a href="../../index.php?logout" class="btn btn-default btn-lg">Logout</a></center>
</div>
