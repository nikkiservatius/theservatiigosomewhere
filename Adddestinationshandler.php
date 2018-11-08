<?php
	session_start();
	$city = $_POST['city'];
	$state = $_POST['state'];
  $country = $_POST['country'];

	$messages = array();
	$bad = false;


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
  }else if (empty($state)) {
      $_SESSION['messages'][] = "Country is Required";
  		$bad = true;
    }


	if($bad){
		header('Location: Adddestinations.php');
		exit;
	}

	require_once 'Dao.php';

	$dao = new DAO();

	if(isset($_POST['SubmitDestination'])){
		$location=$dao->saveDestination($city, $state, $country);
		if(!empty($location)){
			$dao->saveDestination($city, $state, $country);
			header('Location: Destinations.php');
    }else{
        header('Location: Adddestinations.php' )
			exit;
		}
}


	exit;

?>
