<body>
  <script src="../../libraries/js/datePicker.js"></script>
  <script src="../../libraries/js/geoLocation.js"></script>
  <?php require_once("../../PHPLogin.php");
  // the login object will do all login/logout stuff automatically
  // so this single line handles the entire login process.
  $login = new PHPLogin(); ?>

<div class="container">
<center><h2>Bird Retriever</h2>
<h3>We Care About Bird</h3></center>

    <form id="live_form" role="form" method="get" action="index.php">
      <input type="hidden" name="bid" value="<?= $bird->getBID() ?>">
      <input type="hidden" name="users_user_id" value="<?= $_SESSION['user_id']; $bird->getUserID() ?>">
      <input type="hidden" name="action" value="save_bird">

      <div class="form-group">
          <label class="control-label" for="date">Date:</label>
          <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text" value="<?= $bird->getDate() ?>" required/><br>
      </div>

          <div class="form-group">
            <label for="species">Species:</label>
            <input type="text" maxlength="150" class="form-control" placeholder="" id="species" name="species" value="<?= $bird->getSpecies() ?>" required /><br>
          </div>

          <div class="form-group">
            <label for="distance">Distance in feet:</label>
            <input type="text" maxlength="20" class="form-control" placeholder="" id="distance" name="distance" value="<?= $bird->getDistance() ?>" required /><br>
          </div>

          <div class="form-group">
            <label for="sex">Sex:</label>
            <select class="form-control" id="sex" name="sex" value="<?= $bird->getSex() ?>" required>
              <option value="M">Male</option>
              <option value="F">Female</option>
              <option value="U">Uknown</option>
            </select>
          </div><br>

          <div class="form-group">
            <label for="migrant">Migrating:</label>
            <select class="form-control" id="migrant" name="migrant" value="<?= $bird->getMigrant() ?>" required>
              <option value="M">Migrant</option>
              <option value="N">Non-Migrant</option>
              <option value="U">Uknown</option>
            </select>
          </div><br>

          <div class="form-group">
            <label for="nest">Nest:</label>
            <select class="form-control" id="nest" name="nest" value="<?= $bird->getNest() ?>" required>
              <option value="Y">Yes</option>
              <option value="N">No</option>
            </select>
          </div><br>

          <div class="form-group">
            <label for="eggs">Eggs:</label>
            <input type="text" maxlength="20" class="form-control" placeholder="0" id="eggs" name="eggs" value="<?= $bird->getEggs() ?>" required /><br>
          </div>

          <br/><img src="../../tools/showCaptcha.php" alt="captcha" />

      		<div class="form-group">
      			<label><?php echo WORDING_REGISTRATION_CAPTCHA; ?></label>
      			<input type="text" class="form-control" name="captcha" required autocomplete="off" />
      		</div>


      <br><input type="submit" value="Submit" class="btn btn-default btn-lg"></button>
      <a href="../../index.php" class="btn btn-default btn-lg">Main Menu</button></a>
    </form>
    <br>

  </div>






  </body>
  </html>
