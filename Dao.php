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
			$conn=$this->getConnection();
			$saveQuery = $conn->prepare(
				"INSERT INTO users (username, password) VALUES (:username, :password)");
			$saveQuery->bindParam(":username", $username);
			$saveQuery->bindParam(":password", $password);
      $saveQuery->execute();
  //        return true;
    //  } catch (PDOExeception $e) {
      //    return false;
      //}
  }
  public function getUsername($username){
  		$conn=$this->getConnection();
      $stmt = $conn->prepare("SELECT username FROM users WHERE username = :username");
      $stmt->bindparam(":username", $username);
      $stmt->execute();
  		return $stmt->fetch();
}
  public function getUserPassword($username, $password){
		$conn=$this->getConnection();
		$q=$conn->prepare("SELECT username FROM users WHERE username=:username AND password=:password");
		$q->bindParam(":username", $username);
		$q->bindParam(":password", $password);
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


  	// public function addUser($username, $password){
  	// 	$conn = $this->getConnection();
  	// 	$query = $conn->prepare("insert into users (username, password) values (:username,:password)");
  	// 	 $num=0;
  	// 	 $query->bindParam(':username', $username);
  	// 	 $query->bindParam(':password', $password);
  	// 	$query->execute();
  	// }
  	public function deleteUser($username, $password){
  	}
    public function validateUser($username, $password){
      $conn=$this->getConnection();
      $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
      $stmt->bindparam(":username", $username);
      $stmt->execute();
      $user = $stmt->fetch();
      if ($user){
        $digest = $user['password'];
          if($password == $digest){
            return true;
          }
          return false;
      }
      return false;
    }

}
?>
