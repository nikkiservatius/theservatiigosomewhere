<?php
session_start();

$votevalue = $_POST['vote'];


$messages = array();
require_once 'Dao.php';

$dao = new DAO();

if(isset($_POST['SubmitVote'])){
  $dao->saveVote($voteValue);
  $_SESSION['messages'][]="Thanks for the destination submission!";
}

?>
