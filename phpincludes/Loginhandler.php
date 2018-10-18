<?php
session_start();
header("Location: ../index.php");


$name = $_POST['name'];
$password = $_POST['password'];
$_SESSION['presets']['name'] = $name;


$loginerrormessages = array();

$bad = false;
if (empty($name)) {
  $_SESSION['messages'][] = "Name is required.";
  $bad = true;
}
if (empty($password)) {
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
$dao->saveLogin($name, $password);
header('Location: ../Home.php');
exit;
?>
