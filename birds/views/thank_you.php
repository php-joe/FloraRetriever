<?php // load php-login class
require_once("../../PHPLogin.php");
// the login object will do all login/logout stuff automatically
// so this single line handles the entire login process.
$login = new PHPLogin();
?>

<div class="container">
  <center><h2>Bird Retriever</h2></center>
  <center><h3>Thank your for your submission!</h3><br></center>
    <table class="table table-striped">
    <tbody>
      <tr>
          <th>Date:</th>
          <td><?= $bird->getDate() ?></td>
        </tr>
        <tr>
          <th>Species:</th>
          <td><?= $bird->getSpecies() ?></td>
        </tr>
        <tr>
          <th>Distance:</th>
          <td><?= $bird->getDistance() ?></td>
        </tr>
        <tr>
          <th>Sex:</th>
          <td><?= $bird->getSex() ?></td>
        </tr>
        <tr>
          <th>Migrating:</th>
          <td><?= $bird->getMigrant() ?></td>
        </tr>
        <tr>
          <th>Nest:</th>
          <td><?= $bird->getNest() ?></td>
        </tr>
        <tr>
          <th>Eggs:</th>
          <td><?= $bird->getEggs() ?></td>
        </tr>

  </tbody>
  </table>

<br><center><a href='index.php' class="btn btn-default">Submit More Bird</button></a>
<a href="../../index.php" class="btn btn-default">Main Menu</button></a></center>
