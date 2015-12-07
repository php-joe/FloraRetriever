<?php // load php-login class
require_once("../../PHPLogin.php");
// the login object will do all login/logout stuff automatically
// so this single line handles the entire login process.
$login = new PHPLogin();
?>

<div class="container">
  <center><h2>Flora Retriever</h2></center>
  <center><h3>Thank your for your submission!</h3><br></center>
    <table class="table table-striped">
    <tbody>
      <tr>
        <th>Date:</th>
        <td><?= $flora->getDate() ?></td>
      </tr>
      <tr>
        <th>Plant Name:</th>
        <td><?= $flora->getPlantName() ?></td>
      </tr>
      <tr>
        <th>Weather Information:</th>
        <td><?= $flora->getWeather() ?></td>
      </tr>
      <tr>
        <th>Location Information:</th>
        <td><?= $flora->getLocation() ?></td>
      </tr>
      <tr>
        <th>Additional Information:</th>
        <td><?= $flora->getAdditionalNote() ?></td>
      </tr>
      <tr>
        <th>Soil Type:</th>
        <td><?= $flora->getSoilType() ?></td>
      </tr>

</tbody>
</table>

<br><center><a href='index.php' class="btn btn-default">Submit More Flora</button></a>
<a href="../../index.php" class="btn btn-default">Main Menu</button></a></center>
