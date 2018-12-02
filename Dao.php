<?php
class Dao{

  private $host = "us-cdbr-iron-east-01.cleardb.net";
  private $db = "heroku_9b079b48391d866";
  private $user = "bfecb98047ad0d";
  private $pass = "f6b96ffa";

  public function __construct(){
  	}

  public function getConnection () {
    return new PDO("mysql:host=us-cdbr-iron-east-01.cleardb.net;dbname=heroku_9b079b48391d866", "bfecb98047ad0d",
          "f6b96ffa");

}


public function addUser($username, $password){
      $salt=$password.$username;
		  $hashPass=hash('sha256', $salt);
			$conn=$this->getConnection();
			$saveQuery =
				"INSERT INTO users (username, password) VALUES (:username, :password)";
        $q= $conn -> prepare($saveQuery);
			$q->bindParam(":username", $username);
			$q->bindParam(":password", $hashPass);
      //$q->bindParam(":password", $password);
      $q->execute();
  //        return true;
    //  } catch (PDOExeception $e) {
      //    return false;
      //}
  }
  public function getUsername($username){
  		$conn=$this->getConnection();
      $q = $conn->prepare("SELECT username FROM users WHERE username = :username");
      $q->bindparam(":username", $username);
      $q->setFetchMode(PDO::FETCH_ASSOC);
  		$q->execute();
  		$result=$q->fetchAll();
  		return $result;
  	}


  public function getUserPassword($username, $password){
    $salt=$password . $username;
		$hashPass = hash('sha256', $salt);
		$conn=$this->getConnection();
		$q=$conn->prepare("SELECT username FROM users WHERE username = :username AND password = :password");
		$q->bindParam(":username", $username);
		$q->bindParam(":password", $hashPass);
    //$q->bindParam(":password", $password);
		$q->setFetchMode(PDO::FETCH_ASSOC);
		$q->execute();
		$result=$q->fetchAll();
		return $result;
	}

  public function saveDestination($city, $state, $country){
  			$conn=$this->getConnection();
  			$saveQuery =
  				"INSERT INTO destinations_input (city, state, country) VALUES (:city, :state, :country)";
          $q=$conn->prepare($saveQuery);
        $q->bindParam(":city", $city);
  			$q->bindParam(":state", $state);
        $q->bindParam(":country", $country);
        $q->execute();

	}

  public function getDestination(){
		$conn=$this->getConnection();
		$q=$conn->prepare("SELECT city, state, country from destinations_input order by id desc");
		$q->setFetchMode(PDO::FETCH_ASSOC);
		$q->execute();
		$result=$q->fetchAll();
		return $result;
	}

  public function saveVote($city, $state, $country){
        $conn=$this->getConnection();
        $saveQuery =
          "INSERT INTO vote_results (city, state, country) VALUES (:city, :state, :country)";
          $q=$conn->prepare($saveQuery);
        $q->bindParam(":city", $city);
        $q->bindParam(":state", $state);
        $q->bindParam(":country", $country);
        $q->execute();
}
}


?>
