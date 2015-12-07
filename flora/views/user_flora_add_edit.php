<body>
<script src="../../libraries/js/datePicker.js"></script>
<script src="../../libraries/js/geoLocation.js"></script>
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
      <select class="form-control" id="soilType" name="soilType" value="<?= $flora->getSoilType() ?>" required>
        <option value="1">Sand</option>
        <option value="2">Silt</option>
        <option value="3">Clay</option>
        <option value="4">Loam</option>
        <option value="5">Peat</option>
        <option value="6">Gravel</option>
        <option value="7">Rocky</option>
      </select>
    </div><br>
      <label class="control-label" for="useGeoLocation">Use Geo Location:</label><br>

        <label class="radio-inline">
            <input name="useGeoLocation" id="useGeoLocationYes" type="radio" required value="yes" onclick="getLocation()">Yes
        </label>
        <label class="radio-inline">
            <input name="useGeoLocation" id="useGeoLocationNo" type="radio" value="no">No
        </label>
<br>

    <div class="form-group hidden">
      <br>
      <label class="control-label" for="geoLocation">Location Information:</label>
      <textarea class="form-control" rows="5" id="geoLocation" name="geoLocation" readonly></textarea>
    </div>


    <div class="form-group hidden">
      <label for="geoWeather">Weather Information:</label>
      <textarea class="form-control" rows="5" id="geoWeather" name="geoWeather" readonly></textarea>
    </div>



    <div class="form-group hidden" id="isCH">
    <br><label for="isCorrect">Is this information correct?</label>
    <div class="radio">
      <label><input type="radio" name="isCorrect" value="yes">Yes</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="isCorrect" value="additionalInfo">Yes, but I would like to add more Information:</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="isCorrect" value="no">No</label>
    </div>
    </div>


    <div class="form-group hidden">
      <br>
      <label for="additionalLocation">Additional Location Information:</label>
      <textarea class="form-control"  maxlength="130" rows="2" id="additionalLocation" name="additionalLocation"></textarea>
    </div>
    <div class="form-group hidden">
      <label for="additionalWeather">Additional Weather Information:</label>
      <textarea class="form-control"  maxlength="130" rows="2" id="additionalWeather" name="additionalWeather"></textarea>
    </div>
    <br>
    <div class="form-group hidden">
      <label for="location">Location Information:</label>
      <textarea class="form-control" maxlength="250" rows="3" id="userLocation" name="userLocation"></textarea>
    </div>
    <div class="form-group hidden">
      <label for="weather">Weather Information:</label>
      <textarea class="form-control" maxlength="250" rows="3" id="userWeather" name="userWeather"></textarea>
    </div>


    <div class="form-group">
      <label for="additionalInformation">Additional Information:</label>
      <textarea class="form-control" maxlength="250" placeholder=""
        rows="2" id="additionalNote" name="additionalNote" value="<?= $flora->getAdditionalNote() ?>"></textarea>
    </div>



    <div class="form-group hidden">
      <br>
      <label class="control-label" for="finalLocation">Location Information:</label>
      <textarea class="form-control" rows="5" id="location" name="location" value="<?= $flora->getLocation() ?>" readonly></textarea>
    </div>


    <div class="form-group hidden">
      <label for="finalWeather">Weather Information:</label>
      <textarea class="form-control" rows="5" id="weather" name="weather" value="<?= $flora->getWeather() ?>" readonly></textarea>
    </div>


    <br><input type="submit" value="Submit" class="btn btn-default btn-lg"></button>
  </form>
  <br>

</div>





<p id="demo"></p>

</body>
</html>
