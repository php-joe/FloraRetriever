
<div class="container">
  <center><h2>Flora Retriever</h2></center>
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

<center><a href='flora.php?action=edit_flora&target=<?= $flora->getRID() ?>' class='btn btn-default'>Edit This Flora</a>
<a href='flora.php?action=delete_flora&target=<?= $flora->getRID() ?>' class='btn btn-default'>Delete This Flora</a>
<a href='../webprotect/flora.php' class="btn btn-default">View All Flora Records</button></a>
<a href="../../index.php?logout" class="btn btn-default">Logout</a></center>
</div>
