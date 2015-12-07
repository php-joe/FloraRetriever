
<div class="container">
  <center><h2>Flora Retriever</h2></center><br>
  <table class="table table-striped">
    <tbody>
      <tr>
        <th>ID:</th>
        <td><?= $flora->getRID() ?></td>
      </tr>
      <tr>
        <th>Date:</th>
        <td><?= $flora->getDate() ?></td>
      </tr>
      <tr>
        <th>Weather Information:</th>
        <td><?= $flora->getWeather() ?></td>
      </tr>
      <tr>
        <th>Plant Name:</th>
        <td><?= $flora->getPlantName() ?></td>
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

<br><center><a href='../webprotect/user.php' class="btn btn-default btn-lg">View All Flora Records</button></a>
<a href='user.php?action=edit_flora&target=<?= $flora->getRID() ?>' class='btn btn-default btn-lg'>Edit This Flora</a>
<a href='user.php?action=delete_flora&target=<?= $flora->getRID() ?>' class='btn btn-default btn-lg'>Delete This Flora</a>
<a href="../../index.php?logout" class="btn btn-default btn-lg">Logout</a></center>
</div>
