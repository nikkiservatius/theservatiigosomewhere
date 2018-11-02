<?php
echo "here";
session_start();
header("Location: ../index.php");


$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION['presets']['username'] = $username;


$messages = array();

$bad = false;
if (strlen($username) == 0) {
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
require_once("Dao.php");
$dao = new Dao();
$checkuser=$dao->getUser($username);
if ($checkuser){
    $user = $dao->validateUser($username, $password);
    if ($user) {
      header('Location: ../Home.php');
    } else {
      header('Location: ../index.php');
    }
} else {
    $dao->saveLogin($username, $password);
    header('Location: ../Home.php');
}
header('Location: ../index.php');
exit;
?>
