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

      <title>Flora Retriever</title>

    </head>
  <head>
  <body>
    <br><br>
    <?php
      require_once('../../libraries/db.interface.php');
      require_once('../../libraries/db.class.php');
      require_once('../models/flora.class.php');
      require_once('../models/manager.abstract.php');
      require_once('../models/flora_manager.class.php');
      require_once("../../PHPLogin.php");
      require_once("../../libraries/checker.php");
      // the login object will do all login/logout stuff automatically
      // so this single line handles the entire login process.
      $login = new PHPLogin();
      check();



      $action = isset($_GET["action"])?$_GET["action"]:'';
      $target = isset($_GET["target"])?$_GET["target"]:'';


      switch ($action) {
        case 'view_flora':
          $floraManager = new FloraManager();
          $flora = $floraManager->getFlora($target);
          include('../views/user_flora_view.php');
          break;

        case 'add_flora':
          $floraManager = new FloraManager();
          $flora = new Flora();
          include('../views/user_flora_add_edit.php');
          break;

        case 'delete_flora':
          $floraManager = new FloraManager();
          $floraManager->delete($target);
          header('Location: user.php');
          break;

        case 'edit_flora':
          $floraManager = new FloraManager();
          $flora = $floraManager->getFlora($target);
          include('../views/user_flora_edit.php');
          break;

        case 'update_flora':
          $floraManager = new FloraManager();
          $arr = array();
          $arr["rid"] = isset($_GET["rid"])?$_GET["rid"]:'';
          $arr["users_user_id"] = isset($_GET["userID"])?$_GET["userID"]:'';
          $arr["date"] = isset($_GET["date"])?$_GET["date"]:'';
          $arr["weather"] = isset($_GET["weather"])?$_GET["weather"]:'';
          $arr["plantName"] = isset($_GET["plantName"])?$_GET["plantName"]:'';
          $arr["location"] = isset($_GET["location"])?$_GET["location"]:'';
          $arr["additionalNote"] = isset($_GET["additionalNote"])?$_GET["additionalNote"]:'';
          $arr["soilType_idsoilType"] = isset($_GET["soilType"])?$_GET["soilType"]:'';
          $arr["users_user_id"] = isset($_GET["users_user_id"])?$_GET["users_user_id"]:'';
          $flora = new Flora();
          $flora->hydrate($arr);
          $floraManager->_update($flora);
          header('Location: user.php');
          break;

        case 'save_flora':
          $floraManager = new FloraManager();
          $arr = array();
          $arr["rid"] = isset($_GET["rid"])?$_GET["rid"]:'';
          $arr["users_user_id"] = isset($_GET["userID"])?$_GET["userID"]:'';
          $arr["date"] = isset($_GET["date"])?$_GET["date"]:'';
          $arr["weather"] = isset($_GET["weather"])?$_GET["weather"]:'';
          $arr["plantName"] = isset($_GET["plantName"])?$_GET["plantName"]:'';
          $arr["location"] = isset($_GET["location"])?$_GET["location"]:'';
          $arr["additionalNote"] = isset($_GET["additionalNote"])?$_GET["additionalNote"]:'';
          $arr["soilType_idsoilType"] = isset($_GET["soilType"])?$_GET["soilType"]:'';
          $arr["users_user_id"] = isset($_GET["users_user_id"])?$_GET["users_user_id"]:'';
          $flora = new Flora();
          $flora->hydrate($arr);
          $floraManager->save($flora);
          header('Location: user.php');
          break;

        default:
          $floraManager = new FloraManager();
          $floras = $floraManager->getMyFlora($target);
          include('../views/user_flora_view_list.php');
          break;
      }
    ?>
</body>
</html>
