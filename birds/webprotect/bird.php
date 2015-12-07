<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
      <script src="../../libraries/js/bootstrap.min.js"></script>
      <script src="../../libraries/js/conditional.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="../../libraries/css/custom.css">

      <title>Bird Retriever</title>

    </head>
  <head>
  <body>
    <br><br>
    <?php
      require_once('../../libraries/db.interface.php');
      require_once('../../libraries/db.class.php');
      require_once('../models/bird.class.php');
      require_once('../models/manager.abstract.php');
      require_once('../models/bird_manager.class.php');
      require_once("../../PHPLogin.php");
      require_once("../../libraries/checker.php");
      // the login object will do all login/logout stuff automatically
      // so this single line handles the entire login process.
      $login = new PHPLogin();
      check2();



      $action = isset($_GET["action"])?$_GET["action"]:'';
      $target = isset($_GET["target"])?$_GET["target"]:'';


      switch ($action) {
        case 'view_bird':
          $birdManager = new BirdManager();
          $bird = $birdManager->getBird($target);
          include('../views/bird_view.php');
          break;

        case 'add_bird':
          $birdManager = new BirdManager();
          $bird = new Bird();
          include('../views/bird_add_edit.php');
          break;

        case 'delete_bird':
          $birdManager = new BirdManager();
          $birdManager->delete($target);
          header('Location: bird.php');
          break;

        case 'edit_bird':
          $birdManager = new BirdManager();
          $bird = $birdManager->getBird($target);
          include('../views/bird_edit.php');
          break;

        case 'update_bird':
          $birdManager = new BirdManager();
          $arr = array();
          $arr["bid"] = isset($_GET["bid"])?$_GET["bid"]:'';
          $arr["users_user_id"] = isset($_GET["userID"])?$_GET["userID"]:'';
          $arr["date"] = isset($_GET["date"])?$_GET["date"]:'';
          $arr["species"] = isset($_GET["species"])?$_GET["species"]:'';
          $arr["eggs"] = isset($_GET["eggs"])?$_GET["eggs"]:'';
          $arr["nest"] = isset($_GET["nest"])?$_GET["nest"]:'';
          $arr["distance"] = isset($_GET["distance"])?$_GET["distance"]:'';
          $arr["migrant"] = isset($_GET["migrant"])?$_GET["migrant"]:'';
          $arr["sex"] = isset($_GET["sex"])?$_GET["sex"]:'';
          $arr["users_user_id"] = isset($_GET["users_user_id"])?$_GET["users_user_id"]:'';
          $bird = new Bird();
          $bird->hydrate($arr);
          $birdManager->_update($bird);
          header('Location: bird.php');
          break;

        case 'save_bird':
          $birdManager = new BirdManager();
          $arr = array();
          $arr["bid"] = isset($_GET["bid"])?$_GET["bid"]:'';
          $arr["users_user_id"] = isset($_GET["userID"])?$_GET["userID"]:'';
          $arr["date"] = isset($_GET["date"])?$_GET["date"]:'';
          $arr["species"] = isset($_GET["species"])?$_GET["species"]:'';
          $arr["eggs"] = isset($_GET["eggs"])?$_GET["eggs"]:'';
          $arr["nest"] = isset($_GET["nest"])?$_GET["nest"]:'';
          $arr["distance"] = isset($_GET["distance"])?$_GET["distance"]:'';
          $arr["migrant"] = isset($_GET["migrant"])?$_GET["migrant"]:'';
          $arr["sex"] = isset($_GET["sex"])?$_GET["sex"]:'';
          $arr["users_user_id"] = isset($_GET["users_user_id"])?$_GET["users_user_id"]:'';


          $bird = new Bird();
          $bird->hydrate($arr);
          $birdManager->save($bird);
          header('Location: bird.php');
          break;

        default:
          $birdManager = new BirdManager();
          $birds = $birdManager->getAllBirds($target);
          include('../views/bird_view_list.php');
          break;
      }
    ?>
</body>
</html>
