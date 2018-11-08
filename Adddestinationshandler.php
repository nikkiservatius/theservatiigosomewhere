<?php
	session_start();

	$city = $_POST['city'];
	$state = $_POST['state'];
  $country = $_POST['country'];

	$messages = array();
	$bad = false;

  $_SESSION['presets']['city'] = $city;
  $_SESSION['presets']['state'] = $state;


	if(empty($city)){
		$_SESSION['messages'][] = "City is Required";
		$bad = true;
	}

	if(empty($country)){
		$_SESSION['messages'][] = "Country is Required";
		$bad = true;
	}
  if($country == "United States" && (empty($state))){
    $bad = false;
  }else if ($country || "United States" && (empty($state))) {
      $_SESSION['messages'][] = "State is Required";
  		$bad = true;
    }


	if($bad){
		header('Location: Adddestinations.php');
		exit;
	}
unset($_SESSION['presets']);
	require_once 'Dao.php';

	$dao = new DAO();

	if(isset($_POST['SubmitDestination'])){
		$dao->saveDestination($city, $state, $country);
		$_SESSION['messages'][]="Thanks for the destination submission!";
}

header('Location: Destinations.php');
	exit;

?>
