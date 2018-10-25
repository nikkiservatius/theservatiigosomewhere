<?php
session_start();
header("Location: ../index.php");


$name = $_POST['name'];
$password = $_POST['password'];
$_SESSION['presets']['name'] = $name;


$messages = array();

$bad = false;
if (strlen($name) == 0) {
  $_SESSION['messages'][] = "Name is required.";
  $bad = true;
}
if (strlen($password) == 0) {
  $_SESSION['messages'][] = "Password is required.";
  $bad = true;
}
if ($bad) {
  header( "Location: ../index.php");
  $_SESSION['validated'] = 'bad';
  exit;
}
// Got here, means everything validated, and the comment will post.
unset($_SESSION['presets']);
require_once 'Dao.php';
$dao = new Dao();
if($_POST['name'] == "createButton"){
  $dao->saveLogin($name, $password);
  echo "here";
}
header('Location: ../Home.php');
exit;
?>
