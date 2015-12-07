<?php

/**
 * Flora Object
 */
class Flora{

  private $_rid;
//  private $_name;
  private $_date;
  private $_weather;
  private $_plantName;
  private $_location;
  private $_additionalNote;
  private $_soilType;
  private $_userID;
  private $_userName;
  private $_soilID;

  public function getRID(){return $this->_rid;}
  public function setRID($arg){$this->_rid = $arg;}

//  public function getName(){return $this->_name;}
//  public function setName($arg){$this->_name = $arg;}

  public function getDate(){return $this->_date;}
  public function setDate($arg){$this->_date = $arg;}

  public function getWeather(){return $this->_weather;}
  public function setWeather($arg){$this->_weather = $arg;}

  public function getPlantName(){return $this->_plantName;}
  public function setPlantName($arg){$this->_plantName = $arg;}

  public function getLocation(){return $this->_location;}
  public function setLocation($arg){$this->_location = $arg;}

  public function getAdditionalNote(){return $this->_additionalNote;}
  public function setAdditionalNote($arg){$this->_additionalNote = $arg;}

  public function getSoilType(){return $this->_soilType;}
  public function setSoilType($arg){$this->_soilType = $arg;}

  public function getSoilID(){return $this->_soilID;}
  public function setSoilID($arg){$this->_soilID = $arg;}

  public function getUserID(){return $this->_userID;}
  public function setUserID($arg){$this->_userID = $arg;}

  public function getUserName(){return $this->_userName;}
  public function setUserName($arg){$this->_userName = $arg;}

  public function hydrate($arr) {
    $this->setRID(isset($arr["rid"])?$arr["rid"]:'');
    $this->setUserName(isset($arr["userName"])?$arr["userName"]:'');
    $this->setDate(isset($arr["date"])?$arr["date"]:'');
    $this->setWeather(isset($arr["weather"])?$arr["weather"]:'');
    $this->setPlantName(isset($arr["plantName"])?$arr["plantName"]:'');
    $this->setLocation(isset($arr["location"])?$arr["location"]:'');
    $this->setAdditionalNote(isset($arr["additionalNote"])?$arr["additionalNote"]:'');
    $this->setSoilType(isset($arr["soilType_idsoilType"])?$arr["soilType_idsoilType"]:'');
    $this->setUserID(isset($arr["users_user_id"])?$arr["users_user_id"]:'');
    $this->setSoilID(isset($arr["soilID"])?$arr["soilID"]:'');
  }

}
