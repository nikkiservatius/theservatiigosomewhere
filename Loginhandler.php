<?php

session_start();



$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION['presets']['username'] = $username;


$messages = array();

$bad = false;

$_SESSION['presets']['username']=$username;

if (strlen($username) == 0) {
  $_SESSION['messages'][] = "Name is required.";
  $bad = true;
}
if (strlen($password) == 0) {
  $_SESSION['messages'][] = "Password is required.";
  $bad = true;
}

// Got here, means everything validated, and the comment will post.
unset($_SESSION['presets']);
require_once("Dao.php");

$dao = new Dao();

if (isset($_POST['CreateButton'])) {
  $user=$dao->getUsername($username);

		//if the number of rows in my table with that username are zero, then create a row for the username and password.
		if(empty($user)){
			$dao->addUser($username, $password);
      echo "here";

			header('Location: Home.php');
			exit;
		}else{
			$_SESSION['messages'][]= "That username already exists";
      $bad = true;

		}


} else if (isset($_POST['LoginButton'])) {

  $login=$dao->getUserPassword($username, $password);
		if(!empty($login)){
			header('Location: Home.php');
			exit;
		}else{
      $_SESSION['messages'][] = "Username or Password is incorrect.";
			header('Location: index.php');
			exit;

  exit;
}
}
if ($bad) {
  header( 'Location: index.php');

  exit;


}

exit;
?>
