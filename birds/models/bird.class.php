<?php

/**
 * Flora Object
 */
class Bird{

  private $_bid;
//  private $_name;
  private $_date;
  private $_species;
  private $_distance;
  private $_sex;
  private $_migrant;
  private $_nest;
  private $_eggs;
  private $_userID;
  private $_userName;

  public function getBID(){return $this->_bid;}
  public function setBID($arg){$this->_bid = $arg;}

//  public function getName(){return $this->_name;}
//  public function setName($arg){$this->_name = $arg;}

  public function getDate(){return $this->_date;}
  public function setDate($arg){$this->_date = $arg;}

  public function getSpecies(){return $this->_species;}
  public function setSpecies($arg){$this->_species = $arg;}

  public function getDistance(){return $this->_distance;}
  public function setDistance($arg){$this->_distance = $arg;}

  public function getSex(){return $this->_sex;}
  public function setSex($arg){$this->_sex = $arg;}

  public function getMigrant(){return $this->_migrant;}
  public function setMigrant($arg){$this->_migrant = $arg;}

  public function getNest(){return $this->_nest;}
  public function setNest($arg){$this->_nest = $arg;}

  public function getEggs(){return $this->_eggs;}
  public function setEggs($arg){$this->_eggs = $arg;}

  public function getUserID(){return $this->_userID;}
  public function setUserID($arg){$this->_userID = $arg;}

  public function getUserName(){return $this->_userName;}
  public function setUserName($arg){$this->_userName = $arg;}

  public function hydrate($arr) {
    $this->setBID(isset($arr["bid"])?$arr["bid"]:'');
    $this->setUserName(isset($arr["userName"])?$arr["userName"]:'');
    $this->setDate(isset($arr["date"])?$arr["date"]:'');
    $this->setSpecies(isset($arr["species"])?$arr["species"]:'');
    $this->setDistance(isset($arr["distance"])?$arr["distance"]:'');
    $this->setSex(isset($arr["sex"])?$arr["sex"]:'');
    $this->setMigrant(isset($arr["migrant"])?$arr["migrant"]:'');
    $this->setNest(isset($arr["nest"])?$arr["nest"]:'');
    $this->setUserID(isset($arr["users_user_id"])?$arr["users_user_id"]:'');
    $this->setEggs(isset($arr["eggs"])?$arr["eggs"]:'');
  }

}
