<body>
<script src="../webroot/js/datePicker.js"></script>
<script src="../webroot/js/geoLocation.js"></script>
<?php require_once("../../PHPLogin.php");
// the login object will do all login/logout stuff automatically
// so this single line handles the entire login process.
$login = new PHPLogin(); ?>


<div class="container">
  <center><h2>Flora Retriever</h2>
  <h3>We Care About Flora</h3></center>

    <form id="live_form" role="form" method="get" action="../webprotect/user.php">
    <input type="hidden" name="rid" value="<?= $flora->getRID() ?>">
    <input type="hidden" name="users_user_id" value="<?= $_SESSION['user_id']; $flora->getUserID() ?>">
    <input type="hidden" name="action" value="save_flora">

    <div class="form-group">
        <label class="control-label" for="date">Date:</label>
        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text" value="<?= $flora->getDate() ?>" required/><br>
    </div>
    <div class="form-group">
      <label for="plantName">Plant Name:</label>
      <input type="text" maxlength="150" class="form-control" placeholder="" id="plantName" name="plantName" value="<?= $flora->getPlantName() ?>" required /><br>
    </div>
    <div class="form-group">
      <label for="soilType">Soil Type:</label>
      <select class="form-control" id="soilType" name="soilType" required>
        <option value="1" <?php echo ($flora->getSoilID() == 1)?"selected":""; ?>>Sand</option>
        <option value="2" <?php echo ($flora->getSoilID() == 2)?"selected":""; ?>>Silt</option>
        <option value="3" <?php echo ($flora->getSoilID() == 3)?"selected":""; ?>>Clay</option>
        <option value="4" <?php echo ($flora->getSoilID() == 4)?"selected":""; ?>>Loam</option>
        <option value="5" <?php echo ($flora->getSoilID() == 5)?"selected":""; ?>>Peat</option>
        <option value="6" <?php echo ($flora->getSoilID() == 6)?"selected":""; ?>>Gravel</option>
        <option value="7" <?php echo ($flora->getSoilID() == 7)?"selected":""; ?>>Rocky</option>
      </select>
    </div><br>

    <div class="form-group">
      <label for="additionalInformation">Additional Information:</label>
      <textarea class="form-control" maxlength="250" placeholder=""
        rows="2" id="additionalNote" name="additionalNote"><?= $flora->getAdditionalNote() ?></textarea>
    </div>



    <div class="form-group">
      <br>
      <label class="control-label" for="finalLocation">Location Information:</label>
      <textarea class="form-control" rows="5" id="location" name="location"><?= $flora->getLocation() ?></textarea>
    </div>


    <div class="form-group">
      <label for="finalWeather">Weather Information:</label>
      <textarea class="form-control" rows="5" id="weather" name="weather"><?= $flora->getWeather() ?></textarea>
    </div>


    <br><input type="submit" value="Submit" class="btn btn-default btn-lg"></button>
  </form>
  <br>

</div>





<p id="demo"></p>

</body>
</html>
