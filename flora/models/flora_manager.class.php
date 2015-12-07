<?php
require_once("../../PHPLogin.php");
// the login object will do all login/logout stuff automatically
// so this single line handles the entire login process.
$login = new PHPLogin();

class FloraManager extends Manager{

  public function getFlora($arg){

    if(!is_numeric($arg)) return FALSE;

      $db = new Db();

      $rid = $db -> quote($arg);
      $results = $db -> select("SELECT
        research.rid AS 'rid',
        research.date AS 'date',
        research.weather AS 'weather',
        research.plantName AS 'plantName',
        research.location AS 'location',
        research.additionalNote AS 'additionalNote',
        soiltype.soilName AS 'soilType_idsoilType',
        users.user_name as 'user_name',
        research.soiltype_idsoilType as 'soilID'
        FROM research
        INNER JOIN soiltype ON
        research.soilType_idsoilType = soiltype.idsoilType
        INNER JOIN users ON
        research.users_user_id = users.user_id

        WHERE rid = $rid limit 1");

      foreach($results as $result){
        $flora = new Flora();
        $flora->hydrate($result);
      }

      return $flora;

  }

  public function getMyFlora($arg){

      $db = new Db();
      $userID = $_SESSION['user_id'];

      $rid = $db -> quote($arg);
      $results = $db -> select("SELECT
        research.rid AS 'rid',
        research.date AS 'date',
        research.weather AS 'weather',
        research.plantName AS 'plantName',
        research.location AS 'location',
        research.additionalNote AS 'additionalNote',
        soiltype.soilName AS 'soilType_idsoilType',
        users.user_name AS 'user_name',
        users.user_id AS 'user_id'
        FROM research
        INNER JOIN soiltype ON
        research.soilType_idsoilType = soiltype.idsoilType
        INNER JOIN users ON
        research.users_user_id = users.user_id

        WHERE user_id = '" . mysql_real_escape_string($_SESSION['user_id']) . "' ");

        foreach($results as $result){
            $flora = new Flora();
            $flora->hydrate($result);
            $floras[] = $flora;
          }
        if (isset($floras)) {
          return $floras;
}
      }

  public function getLast(){


      $db = new Db();

      $results = $db -> select("SELECT
        research.rid AS 'rid',
        research.date AS 'date',
        research.weather AS 'weather',
        research.plantName AS 'plantName',
        research.location AS 'location',
        research.additionalNote AS 'additionalNote',
        soiltype.soilName AS 'soilType_idsoilType',
        research.users_user_id AS 'users_user_id'
        FROM research
        INNER JOIN soiltype ON
        research.soilType_idsoilType = soiltype.idsoilType
        ORDER BY rid DESC limit 1");

      foreach($results as $result){
        $flora = new Flora();
        $flora->hydrate($result);
      }

      return $flora;

  }

  public function getAllFloras(){

      $db = new Db();
      $floras = array();

      $results = $db -> select("SELECT
        research.rid AS 'rid',
        research.date AS 'date',
        research.weather AS 'weather',
        research.plantName AS 'plantName',
        research.location AS 'location',
        research.additionalNote AS 'additionalNote',
        soiltype.soilName AS 'soilType_idsoilType',
        research.users_user_id AS 'users_user_id',
        users.user_name as 'userName'
        FROM research
        INNER JOIN soiltype ON
        research.soilType_idsoilType = soiltype.idsoilType
        INNER JOIN users ON
        research.users_user_id = users.user_id
        ORDER BY rid DESC;");

    foreach($results as $result){
        $flora = new Flora();
        $flora->hydrate($result);
        $floras[] = $flora;
      }

      return $floras;

  }
  public function save($flora){

    if ($flora->getrid()) {
      $this->_update($flora);
    } else {
      $this->_add($flora);
    }
  }

  public function delete($flora){

    if(!is_numeric($flora)) return FALSE;

      $db = new Db();

      $rid = $db -> quote($flora);
      $results = $db -> query("DELETE from research where rid = $rid");
  }

  private function _add($flora){
    $db = new Db();

    $date = $db -> quote($flora->getDate());
    $weather = $db -> quote($flora->getWeather());
    $plantName = $db -> quote($flora->getPlantName());
    $location = $db -> quote($flora->getLocation());
    $additionalNote = $db -> quote($flora->getAdditionalNote());
    $soilType = $db -> quote($flora->getSoilType());
    $userID = $db -> quote($flora->getUserID());


    $results = $db -> query("insert into login.research (date, weather, plantName, location, additionalNote, soilType_idsoilType, users_user_id)
    values ($date, $weather, $plantName, $location, $additionalNote, $soilType, $userID);");

  }

  private function _update($flora){
  $db = new Db();

  $rid = $db -> quote($flora->getrid());
  $date = $db -> quote($flora->getDate());
  $weather = $db -> quote($flora->getWeather());
  $plantName = $db -> quote($flora->getPlantName());
  $location = $db -> quote($flora->getLocation());
  $additionalNote = $db -> quote($flora->getAdditionalNote());
  $soilType = $db -> quote($flora->getSoilType());
  $userID = $db -> quote($flora->getUserID());
  $soilID = $db -> quote($flora->getSoilID());

  $results = $db -> query("update login.research set date=$date, weather=$weather, plantName=$plantName, location=$location,
    additionalNote=$additionalNote, soiltype_idsoilType=$soilType where rid = $rid;");

}





}
