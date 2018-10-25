<?php
class Dao{
  private $host = "us-cdbr-iron-east-01.cleardb.net";
  private $db = "heroku_9b079b48391d866";
  private $user = "bfecb98047ad0d";
  private $pass = "f6b96ffa";

  public function getConnection () {
    return new PDO("mysql:host=us-cdbr-iron-east-01.cleardb.net;dbname=heroku_9b079b48391d866", "bfecb98047ad0d",
          "f6b96ffa");

}

public function saveLogin ($name, $password) {
    $conn = $this->getConnection();
    $saveQuery =
        "INSERT INTO users
        (username, password)
        VALUES
        (:username, :password)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":username", $name);
    $q->bindParam(":password", $password);
    $q->execute();
  }
  public function getUser($name, $password){
  		$conn=$this->getConnection();
  		$query = $conn->prepare("SELECT name,password FROM users WHERE name = :username AND password= :password");
  		$query->bindParam(':username', $name);
  		$query->bindParam(':password', $password);
  		$query->setFetchMode(PDO::FETCH_ASSOC);
      	$query->execute();
      	$results = $query->fetchAll();
      	return $results;
  	}
  	public function addUser($name, $password){
  		$conn = $this->getConnection();
  		$query = $conn->prepare("insert into users (username, password) values (:username,:password)");
  		 $num=0;
  		 $query->bindParam(':username', $name);
  		 $query->bindParam(':password', $password);
  		$query->execute();
  	}
  	public function deleteUser($name, $password){
  	}



}




?>
