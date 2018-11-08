<?php

require_once 'Dao.php';

$dao = new DAO();

if(isset($_POST['SubmitVote'])){
  $dao->saveDestination($city, $state, $country);
  $_SESSION['messages'][]="Thanks for the destination submission!";
}

?>
