
<div class="container">
  <center><h2>Bird Retriever</h2></center><br>
  <table class="table table-striped">
    <tbody>
      <tr>
        <th>ID:</th>
        <td><?= $bird->getBID() ?></td>
      </tr>
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

<br><center><a href='../webprotect/user.php' class="btn btn-default btn-lg">View All Bird Records</button></a>
<a href='user.php?action=edit_bird&target=<?= $bird->getBID() ?>' class='btn btn-default btn-lg'>Edit This Bird</a>
<a href='user.php?action=delete_bird&target=<?= $bird->getBID() ?>' class='btn btn-default btn-lg'>Delete This Bird</a>
<a href="../../index.php?logout" class="btn btn-default btn-lg">Logout</a></center>
</div>
