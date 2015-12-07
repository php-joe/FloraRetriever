<?php

function check()
{
  if(!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php?logout');
  }
  else {
    $current_user = $_SESSION['user_id'];
  }
}

function check2()
{
  if(($_SESSION['user_access_level'] != 255)) {
    header('Location: ../../index.php?logout');
  }
  else {
    $current_user = $_SESSION['user_id'];
  }
}
 ?>
