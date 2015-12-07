<?php
require_once("../../PHPLogin.php");
// the login object will do all login/logout stuff automatically
// so this single line handles the entire login process.
$login = new PHPLogin();

class BirdManager extends Manager{

  public function getBird($arg){

    if(!is_numeric($arg)) return FALSE;

      $db = new Db();

      $bid = $db -> quote($arg);
      $results = $db -> select("SELECT
        birds.bid AS 'bid',
        birds.date AS 'date',
        birds.species AS 'species',
        birds.distance AS 'distance',
        birds.migrant AS 'migrant',
        birds.sex AS 'sex',
        birds.nest AS 'nest',
        birds.eggs as 'eggs',
        users.user_name as 'user_name'
        FROM birds
        INNER JOIN users ON
        birds.users_user_id = users.user_id

        WHERE bid = $bid limit 1");

      foreach($results as $result){
        $bird = new Bird();
        $bird->hydrate($result);
      }

      return $bird;

  }

  public function getMyBird($arg){

      $db = new Db();
      $userID = $_SESSION['user_id'];

      $bid = $db -> quote($arg);
      $results = $db -> select("SELECT
        birds.bid AS 'bid',
        birds.date AS 'date',
        birds.species AS 'species',
        birds.distance AS 'distance',
        birds.migrant AS 'migrant',
        birds.sex AS 'sex',
        birds.nest AS 'nest',
        birds.eggs as 'eggs',
        users.user_name as 'user_name'
        FROM birds
        INNER JOIN users ON
        birds.users_user_id = users.user_id

        WHERE user_id = '" . mysql_real_escape_string($_SESSION['user_id']) . "' ");

        foreach($results as $result){
            $bird = new Bird();
            $bird->hydrate($result);
            $birds[] = $bird;
          }
        if (isset($birds)) {
          return $birds;
}
      }

  public function getLast(){


      $db = new Db();

      $results = $db -> select("SELECT
        birds.bid AS 'bid',
        birds.date AS 'date',
        birds.species AS 'species',
        birds.distance AS 'distance',
        birds.migrant AS 'migrant',
        birds.sex AS 'sex',
        birds.nest AS 'nest',
        birds.eggs as 'eggs',
        users.user_name as 'user_name'
        FROM birds
        INNER JOIN users ON
        birds.users_user_id = users.user_id
        ORDER BY bid DESC limit 1");

      foreach($results as $result){
        $bird = new Bird();
        $bird->hydrate($result);
      }

      return $bird;

  }

  public function getAllBirds(){

      $db = new Db();
      $birds = array();

      $results = $db -> select("SELECT
        birds.bid AS 'bid',
        birds.date AS 'date',
        birds.species AS 'species',
        birds.distance AS 'distance',
        birds.migrant AS 'migrant',
        birds.sex AS 'sex',
        birds.nest AS 'nest',
        birds.eggs as 'eggs',
        users.user_name as 'userName'
        FROM birds
        INNER JOIN users ON
        birds.users_user_id = users.user_id
        ORDER BY bid DESC;");

    foreach($results as $result){
        $bird = new Bird();
        $bird->hydrate($result);
        $birds[] = $bird;
      }

      return $birds;

  }
  public function save($bird){

    if ($bird->getbid()) {
      $this->_update($bird);
    } else {
      $this->_add($bird);
    }
  }

  public function delete($bird){

    if(!is_numeric($bird)) return FALSE;

      $db = new Db();

      $bid = $db -> quote($bird);
      $results = $db -> query("DELETE from birds where bid = $bid");
  }

  private function _add($bird){
    $db = new Db();

    $date = $db -> quote($bird->getDate());
    $species = $db -> quote($bird->getSpecies());
    $distance = $db -> quote($bird->getDistance());
    $migrant = $db -> quote($bird->getMigrant());
    $sex = $db -> quote($bird->getSex());
    $nest = $db -> quote($bird->getNest());
    $eggs = $db -> quote($bird->getEggs());
    $userID = $db -> quote($bird->getUserID());


    $results = $db -> query("insert into login.birds (date, species, distance, migrant, sex, nest, eggs, users_user_id)
    values ($date, $species, $distance, $migrant, $sex, $nest, $eggs, $userID);");

  }

  private function _update($bird){
  $db = new Db();

  $bid = $db -> quote($bird->getbid());
  $date = $db -> quote($bird->getDate());
  $species = $db -> quote($bird->getSpecies());
  $distance = $db -> quote($bird->getDistance());
  $migrant = $db -> quote($bird->getMigrant());
  $sex = $db -> quote($bird->getSex());
  $nest = $db -> quote($bird->getNest());
  $eggs = $db -> quote($bird->getEggs());
  $userID = $db -> quote($bird->getUserID());

  $results = $db -> query("update login.birds set date=$date, species=$species, distance=$distance,
  migrant=$migrant, sex=$sex, nest=$nest, eggs=$eggs where bid = $bid;");

}





}
