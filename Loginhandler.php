<?php
echo "here";
session_start();
header('Location: index.php');


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
if ($bad) {
  header( 'Location: index.php');
  //$_SESSION['validated'] = 'bad';
  exit;


}
// Got here, means everything validated, and the comment will post.
unset($_SESSION['presets']);
require_once 'Dao.php';
$dao = new Dao();

if (isset($_POST['CreateButton'])) {


  $user=$dao->getUsername($username);
		//if the number of rows in my table with that username are zero, then create a row for the username and password.
		if(empty($user)){
			$dao->addUser($username, $password);
			header('Location: Home.php');
			exit;
		}else{
			$_SESSION['messages'][]= "That username already exists";
			header('Location: index.php');
			exit;
		}
  // $checkuser=$dao->getUser($username);
  // if (empty($checkuser)) {
  //   $dao->addUser($username, $password);
  //   header('Location: ../Meettheservatii.php');
  // } else {
  //   header('Location: ../Adddestinations.php');
  // }

} else if (isset($_POST['LoginButton'])) {

  $login=$dao->getUserPassword($username, $password);
		if($login){
			header('Location: Home.php');
			exit;
		}else{
      $_SESSION['messages'][] = "Username or Password is incorrect.";
			header('Location: index.php');
			exit;
  //echo "loginbutton";
  // $checkuser=$dao->getUser($username);
  // if ($checkuser){
  //   $user = $dao->validateUser($username, $password);
  //   if ($user) {
  //     header('Location: ../Home.php');
  //   } else {
  //     header('Location: ../index.php');
  //   }
  // }
  exit;
}
}
//header('Location: ../index.php');
exit;
?>
