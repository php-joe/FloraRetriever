<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/s/bs/jszip-2.5.0,pdfmake-0.1.18,dt-1.10.10,b-1.1.0,b-flash-1.1.0,b-html5-1.1.0,r-2.0.0/datatables.min.css"/>
<link rel="stylesheet" type="text/css" href="../../libraries/css/custom.css" />
<script type="text/javascript" src="https://cdn.datatables.net/s/bs/jszip-2.5.0,pdfmake-0.1.18,dt-1.10.10,b-1.1.0,b-flash-1.1.0,b-html5-1.1.0,r-2.0.0/datatables.min.js"></script>
<script type="text/javascript" src="../../libraries/js/buttons.js"></script>

<div class="container">
<center><h2>Flora Retriever</h2></center>
<div class="table-responsive">
<table id="listView" class="table table-striped" data-page-length='25'>
  <thead>
    <tr>
      <th>ID</th>
      <th>Date</th>
      <th>Plant</th>
      <th>Weather</th>
      <th>Location</th>
      <th>Additional Notes</th>
      <th>Soil</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  <?php require_once("../../PHPLogin.php");
  // the login object will do all login/logout stuff automatically
  // so this single line handles the entire login process.
  $login = new PHPLogin();
  foreach($floras as $flora){ ?>
  <tr>
    <td><?= $flora->getUserName() ?></td>
    <td width ="100px"><?= $flora->getDate() ?></td>
    <td><?= ((strlen($flora->getPlantName()) > 20) ? substr($flora->getPlantName(), 0, 17) . "...": $flora->getPlantName()) ?></td>
    <td><?= ((strlen($flora->getWeather()) > 25) ? substr($flora->getWeather(), 0, 20) . "..." : $flora->getWeather())  ?></td>
    <td><?= ((strlen($flora->getLocation()) > 25) ? substr($flora->getLocation(), 0, 20) . "..." : $flora->getLocation()) ?></td>
    <td><?= ((strlen($flora->getAdditionalNote()) > 10) ? substr($flora->getAdditionalNote(), 0, 7) . "..." : $flora->getAdditionalNote()) ?></td>
    <td><?= $flora->getSoilType() ?></td>
    <td><a href='flora.php?action=view_flora&target=<?= $flora->getRID() ?>' class="btn btn-default">View Full Record</button></a>
  </tr>
  <?php } ?>
</tbody>
</table>
</div>
<br>
<br>
<center><a href='flora.php?action=add_flora' class="btn btn-default btn-lg">Add New Flora Records</button></a>
  <a href="../lib/exportCVS.php" class="btn btn-default btn-lg">Export The Database Table</button></a>
  <a href="../../index.php" class="btn btn-default btn-lg">Main Menu</button></a>
  <a href="../../index.php?logout" class="btn btn-default btn-lg">Logout</a></center>
</div>
